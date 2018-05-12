<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostcardMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $postcard_filename;

    /**
     * Create a new message instance.
     *
     * @param $postcard_filename
     */
    public function __construct($postcard_filename)
    {
        $this->postcard_filename = $postcard_filename;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(__('messages.message_email_postcard_subject'))
            ->attach($this->postcard_filename, [
                'mime' => 'image/png'])
            ->markdown('emails.postcard');
    }
}
