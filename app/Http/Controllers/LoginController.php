<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;


class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function actionLogin(Request $Request)
    {
        // ambil dari tag input 'nama' dari setiap form
        $Request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);
        $credentials = $Request->only('email', 'password');
        //jika email dan password betul
        if (Auth::attempt($credentials)) {
            $Request->session()->regenerate();
            return redirect()->intended('dashboard');
            //return redirect()->to('dashboard);
        }
        return back()->withErrors([
            'email' => 'invalid credentials',

        ])->onlyInput('email');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
        //redirect('login');
    }
}
