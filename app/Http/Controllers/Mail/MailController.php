<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Mail\Markdown;

use App\Events\Mail\SendMail;

class MailController extends Controller
{
    public function send() {
        $email = 'test_email@gmail.com';
        
        $details = [
            'title' => 'Mail Test from Nicesnippets.com',
            'url' => 'https://www.nicesnippets.com',
            'content' => 'Ở ĐÂY CÓ NHIỀU CONTENT',
        ];


        $markdown = new Markdown(view(), config('mail.markdown'));

        return $markdown->render('emails.mailTemplate');
        
        $notification = (new \App\Notifications\InvoicePaid)->toMail('test@example.com');
        $markdown = new \Illuminate\Mail\Markdown(view(), config('mail.markdown'));
        return $markdown->render($notification->markdown, $notification->data());
        // Mail::to($event->email)->send(new MailTemplate($event->details));


        $markdown = new Markdown(view(), config('mail.markdown'));

        return $markdown->render('emails.mailTemplate')->with('details', $details);


        return view('emails.mailTemplate')->with('details', $details);
        
        event(new SendMail($email, $details));
        dd("Mail Send Successfully");
    }
}
