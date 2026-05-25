<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // FORM LOGIN
    public function login()
    {
        return view('auth.login');
    }

    // PROSES LOGIN
    public function authenticate(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        // LOGIN SEDERHANA
        if($username == 'erwamuzaky447@gmail.com' && $password == '123456')
        {
            session([
                'login' => true
            ]);

            return redirect('/dashboard');
        }

        return redirect('/login')
            ->with('error', 'Username atau Password salah!');
    }

    // LOGOUT
    public function logout()
    {
        session()->forget('login');

        return redirect('/login');
    }
}