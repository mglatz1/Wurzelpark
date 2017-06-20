<?php

namespace App\Jobs;

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
        // edit certificate
        $certificate_username = __('messages.message_certificate_for').$this->user->name;
        $fileName = app_path().'/../'.env('CERTIFICATE_PATH');
        $template = new \PhpOffice\PhpWord\TemplateProcessor($fileName);
        $template->setValue('name', $this->user->name);
        $doc_filename = sys_get_temp_dir().'/'.$certificate_username.'.docx';
        $template->saveAs($doc_filename);

        // docx to pdf conversion
        $api = new Api(env('CLOUD_CONVERT_API_KEY'));

        $api->convert([
            'inputformat' => 'docx',
            'outputformat' => 'pdf',
            'input' => 'upload',
            'file' => fopen($doc_filename, 'r'),
        ])
            ->wait()
            ->download($certificate_username.'.pdf');

        // send email with certificate
        Mail::to($this->user)->send(new FinishQuizMail($certificate_username.'.pdf'));

        // delete certificates
        unlink($doc_filename);
        unlink($certificate_username.'.pdf');
    }
}
