<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login()
    {
        // return view('auth.login');
    }
    public function logout()
    {
        // return view('auth.login');
    }
}
