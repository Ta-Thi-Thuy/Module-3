<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('user');
    }

    public function login(Request $request)
    {
        $username = $request->inputUsername;
        $password = $request->inputPassword;

        if ($username == 'admin' && $password == '123456') {

            $request->session()->push('login', true);

            return redirect()->route('show.blog');
        }
        $message = 'Đăng nhập không thành công. Tên người dùng hoặc mật khẩu không đúng.';
        $request->session()->flash('login-fail', $message);

        return view('user');
    }
}
