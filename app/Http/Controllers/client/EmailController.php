<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $user = auth()->user();
        Mail::to($user)->send(new SendMail($user));

        if(Mail::failures()){
            return response()->Fail('Xin lỗi! Vui lòng thử lại');
        } else {
            return response()->success('Gửi thành công');
        }
    }
}
