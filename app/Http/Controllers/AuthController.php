<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index(){
        return view('sesi.user');
    }


    function loginMhs(Request $request)
    {
            $request -> validate([
            'email' => 'required',
            'password' => 'required',

        ],[
            'email.required' => 'Email Wajib diisi',
            'password.required' => 'Password Wajib diisi',
        ]);

        $infologin = [
            'email' => $request ->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return 'sukses';
        }else{
            return redirect('/')->withErrors('salah');
        }
    }
}
