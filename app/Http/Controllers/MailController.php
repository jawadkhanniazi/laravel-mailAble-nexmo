<?php

namespace App\Http\Controllers;



use App\Mail\SignupEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function sendEmail(){
        $data = [
            'name' => "user!",
            'verification_code' => "WERERWER"
        ];

        
        Mail::to('your email address')->send(new SignupEmail($data));

        //Mail::to('')->send(new SignupEmail($data));
        return redirect('/home');
    }
}
