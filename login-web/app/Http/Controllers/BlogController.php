<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showBlog(Request $request)
    {
        if ($request->session()->has('login') && $request->session()->get('login')) {

            return view('blog');
        }

        $message = 'Bạn chưa đăng nhập.';
        $request->session()->flash('not-login', $message);
        return view('user');
    }
}
