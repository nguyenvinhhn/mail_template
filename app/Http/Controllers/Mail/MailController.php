<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Mail\Markdown;

use App\Events\Mail\SendMail;

use App\Mail\MailTemplate;
use App\Mail\MailNotify;
use Mail;


class MailController extends Controller
{
    public function mailTemplate() {

        return view('vendor.mail.html.create');
        $email = 'test_email@gmail.com';
        
        $details = [
            'title' => 'Mail Test from Nicesnippets.com',
            'url' => 'https://www.nicesnippets.com',
            'content' => $request->content,
        ];

        $markdown = new Markdown(view(), config('mail.markdown'));
        return $markdown->render('emails.mailTemplate');
        return view('emails.mailTemplate')->with('details', $details);
        
        event(new SendMail($email, $details));
        dd("Mail Send Successfully");
    }

    public function sendMail(Request $request) {
        $email = 'nguyenvinasdfh.hn.dev@gmail.com';
        $details = [
            'title' => 'Mail Test from Nicesnippets.com',
            'url' => 'https://www.nicesnippets.com',
            'content' => $request->content,
        ];

        event(new SendMail($email, $details));
        dd('thanh cong');
    }
    
}
