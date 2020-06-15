<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function sendSms(Request $request)
    {
        // return $request;
        Nexmo::message()->send([
            'to' => '92' . $request->mobile,
            'from' => '',
            'text' => 'your result has bee announced !!'
        ]);

        Session::flash('success', 'Message sent');
        return redirect('/home');
    }    
}
