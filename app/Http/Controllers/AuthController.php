<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function getLoginForm(){
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        // dd(1);
        $data = Arr::except($request->all(), ['_token']);
        $result = Auth::attempt($data);

        return redirect()->route('admin');
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
