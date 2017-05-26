<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FinishQuiz extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     * @internal param User $user
     */
    public function __construct()
    {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Grüße vom Wurzelpark Arriach")
            ->markdown('emails.finish-quiz');
    }
}
