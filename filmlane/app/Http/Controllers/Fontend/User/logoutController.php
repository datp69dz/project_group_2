<?php

namespace App\Http\Controllers\FontEnd\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class logoutController extends Controller
{
    public function logout()
    {
        Auth::logout();
        session()->forget('user');
        return redirect()->route('home');
    }
}
