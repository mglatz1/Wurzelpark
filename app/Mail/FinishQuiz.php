<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FinishQuiz extends Mailable
{
    use Queueable, SerializesModels;

    protected $doc_filename;

    /**
     * Create a new message instance.
     * @internal param User $user
     * @param $doc_filename
     */
    public function __construct($doc_filename)
    {
        $this->doc_filename = $doc_filename;
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
            ->attach($this->doc_filename, [
                'mime' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])
            ->markdown('emails.finish-quiz');
    }
}
