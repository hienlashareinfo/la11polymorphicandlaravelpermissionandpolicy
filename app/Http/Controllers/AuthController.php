<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        Auth::loginUsingId(1);
        return redirect(route('home'));
    }
    public function logout()
    {
        Auth::logoutUsingId(1);
        return redirect(route('home'));
    }
}
