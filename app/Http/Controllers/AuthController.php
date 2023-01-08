<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('admin/dashboard');
        } else {
            return view('login');
        }
    }


    public function loginAction(Request $req)
    {
        $data = [
            'email' => $req->input('email'),
            'password' => $req->input('password'),
        ];

        if (Auth::attempt($data)) {
            return redirect('admin/dashboard');
        } else {
            return redirect('admin/login')->with('error', 'Email atau Password tidak sesuai');
        }
    }

    public function logoutAction()
    {
        Auth::logout();
        return redirect('admin/login');
    }
}
