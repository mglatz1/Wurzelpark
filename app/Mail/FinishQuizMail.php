<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FinishQuizMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $pdf_filename;
    protected $postcard_filename;

    /**
     * Create a new message instance.
     *
     * @param $pdf_filename
     * @param $postcard_filename
     */
    public function __construct($pdf_filename, $postcard_filename)
    {
        $this->pdf_filename = $pdf_filename;
        $this->postcard_filename = $postcard_filename;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(__('messages.message_email_subject'))
            ->attach($this->pdf_filename, [
                'mime' => 'application/pdf'])
            ->attach($this->postcard_filename, [
                'mime' => 'image/png'])
            ->markdown('emails.finish-quiz');
    }
}
