<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendContact(Request $request)
    {
        // Validation
        $request->validate([
            'fullname' => 'required|min:6',
            'email' => 'required|email',
            'phone' => 'required|digits_between:9,15|numeric',
            'message' => 'required',
        ]);
        // Send email
        $details = [
            'from' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        Mail::to('info@henesmed.tj')->send(new ContactMail($details));

        $locale = App::currentLocale();
        if ($locale == 'en') {
            $title = 'Your message sended succesfully!';
        }
        if ($locale == 'ru') {
            $title = 'Ваше сообщение успешно доставлена!';
        }

        return back()->with('success', $title);
    }
}
