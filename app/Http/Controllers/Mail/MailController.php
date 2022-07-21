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
        return view('emails.mailTemplate')->with('details', $details);
        
        event(new SendMail($email, $details));
        dd("Mail Send Successfully");
    }
}
