<?php

namespace App\Jobs;

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
        $fileName = app_path().'/../files/Certificate.docx';
        $template = new \PhpOffice\PhpWord\TemplateProcessor($fileName);
        $template->setValue('name', $this->user->name);
        $doc_filename = sys_get_temp_dir().'/'.__('messages.message_certificate_for').$this->user->name.'.docx';
        $template->saveAs($doc_filename);

        // save as pdf todo: fix because this doesn't work (in command line it works)
        //shell_exec('soffice --headless --convert-to pdf "'.$docx_filename.'"');

        // send email with certificate
        Mail::to($this->user)->queue(new FinishQuizMail($doc_filename));

        // delete certificate
        unlink($doc_filename);
    }
}
