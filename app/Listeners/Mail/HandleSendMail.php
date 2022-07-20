<?php

namespace App\Listeners\Mail;

use App\Events\Mail\SendMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Mail\MailTemplate;
use Mail;

class HandleSendMail implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SendMail  $event
     * @return void
     */
    public function handle(SendMail $event)
    {
        Mail::to($event->email)->send(new MailTemplate($event->details));
    }

}
