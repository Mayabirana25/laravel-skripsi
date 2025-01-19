<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function login()
    {
        return view('user.login');
    }
   function doLogin(Request $request)
    {
        $data = [
        'email' => $request->input('email'),
        'password' => $request->input('password')
        ];

        if (Auth::attempt($data)){
            return redirect()->route('home');
        } 

        return back()->withErrors(['email' => 'Email atau password salah'])->withInput();

    }
    function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
