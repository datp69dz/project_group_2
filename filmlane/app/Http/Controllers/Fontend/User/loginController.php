<?php

namespace App\Http\Controllers\FontEnd\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class loginController extends Controller
{
    public function get_login()
    {
        return view('fontend.page.user.login');
    }
    public function post_login(Request $request)
{
    // Kiểm tra dữ liệu nhập vào
    $validator = Validator::make($request->all(), [
        'email' => 'required',
        'password' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->route('get_login')->withErrors($validator)->withInput();
    }

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Xác thực thành công
        $user = Auth::user();
        $request->session()->put('user', $user);
        return redirect()->route('home');
    } else {
        // Xác thực thất bại
        return redirect()->route('get_login')->with('error', 'Invalid credentials');
    }
}
}
