<?php

namespace App\Jobs;

use \PhpOffice\PhpWord\TemplateProcessor;
use \CloudConvert\Api;
use App\Mail\FinishQuizMail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;


class FinishQuiz implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 1;
    protected $user;

    /**
     * Create a new job instance.
     *
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        app()->setLocale($this->user->language);
        $files_path = app_path().'\\..\\'.env('FILES_PATH').'\\';

        // certificate processing
        $certificate_filename = __('messages.message_certificate_for').$this->user->name;
        $certificate_template_filename = $files_path.$this->user->language.env('CERTIFICATE_NAME');
        $template = new TemplateProcessor($certificate_template_filename);
        $template->setValue('name', $this->user->name);
        $doc_temp_filename = sys_get_temp_dir().'\\'.$certificate_filename.'.docx';
        $template->saveAs($doc_temp_filename);
        $file_path_to_processed_certificate = sys_get_temp_dir().'\\'.$certificate_filename.'.pdf';

        // docx to pdf conversion
        $api = new Api(env('CLOUD_CONVERT_API_KEY_CERTIFICATE'));

        $api->convert([
            'inputformat' => 'docx',
            'outputformat' => 'pdf',
            'input' => 'upload',
            'file' => fopen($doc_temp_filename, 'r'),
        ])
            ->wait()
            ->download($file_path_to_processed_certificate);

        // postcard processing
        $postcard_filename = __('messages.message_postcard_for').$this->user->name;
        $postcard_template_filename = $files_path.env('POSTCARD_NAME');
        $template = new TemplateProcessor($postcard_template_filename);
        $template->setImageValue('image1.png', $files_path.'pic1.png');
        $template->setImageValue('image2.png', $files_path.'pic2.png');
        $template->setImageValue('image3.png', $files_path.'pic3.png');
        $postcard_temp_filename = sys_get_temp_dir().'\\'.$postcard_filename.'.docx';
        $template->saveAs($postcard_temp_filename);
        $file_path_to_processed_postcard = sys_get_temp_dir().'\\'.$postcard_filename.'.png';

        // docx to png conversion
        $api = new Api(env('CLOUD_CONVERT_API_KEY_POSTCARD'));

        $api->convert([
            'inputformat' => 'docx',
            'outputformat' => 'png',
            'input' => 'upload',
            'file' => fopen($postcard_temp_filename, 'r'),
        ])
            ->wait()
            ->download($file_path_to_processed_postcard);

        // send email with certificate
        Mail::to($this->user)->send(new FinishQuizMail($file_path_to_processed_certificate, $file_path_to_processed_postcard));

        // delete temporary files
        unlink($doc_temp_filename);
        unlink($postcard_temp_filename);
        unlink($file_path_to_processed_certificate);
        unlink($file_path_to_processed_postcard);
    }
}
