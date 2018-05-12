<?php

namespace App\Jobs;

use \PhpOffice\PhpWord\TemplateProcessor;
use \CloudConvert\Api;
use App\Mail\PostcardMail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class GenerateSendPostcard implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 1;
    protected $postcard_template_filename;
    protected  $email_address;
    protected  $email_address2;
    protected  $image_filename;
    protected  $image_filename2;

    /**
     * Create a new job instance.
     *
     * @param $postcard_template_filename
     * @param $email_address
     * @param $email_address2
     * @param $image_filename
     * @param $image_filename2
     */
    public function __construct($postcard_template_filename, $email_address, $email_address2, $image_filename, $image_filename2)
    {
        $this->postcard_template_filename = $postcard_template_filename;
        $this->email_address = $email_address;
        $this->email_address2 = $email_address2;
        $this->image_filename = $image_filename;
        $this->image_filename2 = $image_filename2;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $files_dir = app_path().'/../'.env('FILES_DIR').'/';
        $storage_dir = app_path().'/../public/';

        // postcard processing
        $postcard_filename = __('messages.message_postcard').'-'.date("d-m-Y-H-i-s");
        $template = new TemplateProcessor($files_dir.$this->postcard_template_filename.'.docx');
        $template->setImageValue('image1.png', $storage_dir.$this->image_filename);

        if ($this->image_filename2 === "") {
            $this->image_filename2 = $files_dir.'postcard_missing_pic.png';
        }

        $template->setImageValue('image2.png', $storage_dir.$this->image_filename2);

        $postcard_temp_filename = sys_get_temp_dir().'/'.$postcard_filename.'.docx';
        $template->saveAs($postcard_temp_filename);

        $file_path_to_processed_postcard = sys_get_temp_dir().'/'.$postcard_filename.'.png';

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

        // send email with postcard

        if ($this->email_address2 != null) {
            Mail::to($this->email_address)->cc($this->email_address2)
                ->send(new PostcardMail($file_path_to_processed_postcard));
        }
        else {
            Mail::to($this->email_address)->send(new PostcardMail($file_path_to_processed_postcard));
        }

        //unlink($file_path_to_processed_postcard);
    }
}
