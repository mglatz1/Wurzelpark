<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FinishQuiz extends Mailable
{
    use Queueable, SerializesModels;

    protected $docx_filename;

    /**
     * Create a new message instance.
     * @internal param User $user
     */
    public function __construct($docx_filename)
    {
        $this->docx_filename = $docx_filename;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject(__('messages.message_email_subject'))
            ->attach($this->docx_filename, [
                'as' => __('messages.message_certificate').'.docx',
                'mime' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])
            ->markdown('emails.finish-quiz');
    }
}
