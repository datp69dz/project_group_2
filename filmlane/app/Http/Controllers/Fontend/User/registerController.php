<?php

namespace App\Http\Controllers\FontEnd\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account; // Update the model import statement
use Illuminate\Support\Facades\Validator;

class registerController extends Controller
{
    //
    public function get_register()
    {
        return view('fontend.page.user.register');
    }

    public function post_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:accounts',
            'email' => 'required|email|unique:accounts',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $account = new Account();
        $account->account_id = $request->input('account_id');
        $account->username = $request->input('username');
        $account->email = $request->input('email');
        $account->password = bcrypt($request->input('password'));
        $account->account_date = now();
        $account->account_update = now();
        $account->save();

        return redirect()->route('home');
    }
}
