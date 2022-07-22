<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

use App\Events\Mail\SendMail;
use App\Mail\MailTemplate;

class MailController extends Controller
{
    public function mailTemplate() {
        return view('vendor.mail.html.create');
    }

    public function sendMail(Request $request) {

        $data = $request->only('email', 'content');
        $validator =  $this->isValidator($data);
        if ($validator->fails()) {
            $errors = $validator->messages();
            return redirect('mail')->withErrors($errors);

        } else {
            $details = [
                'title' => 'Mail Test from Nicesnippets.com',
                'content' => $request->content,
                'url_confirm' => config('app.url').'/survey',
            ];
            event(new SendMail($request->email, $details));
            return redirect()->back()->with('message', 'Send Mail Success!');
        }
    }

    /**
     * @param array $data
     */
    protected function isValidator(array $data) {
        return Validator::make($data, [
            'email' => ['required','email'],
            'content' => ['required'],
        ]);
    }
    
}
