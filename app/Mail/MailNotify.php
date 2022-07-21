<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    /**
        * Create a new data instance.
        *
        * @return void
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
        return $this->from('nguyenhuuhai98@gmail.com')
            ->view('test')
            ->subject('Notification email');
    }
}
