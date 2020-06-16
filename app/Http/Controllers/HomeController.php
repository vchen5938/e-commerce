<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function who(Request $request)
    {
        //取得登入用戶
        //dd(Auth::user());

        //取得登入用戶主鍵
        //dd(Auth::id());

        //取得登入用戶
        dd($request->user());
    }

    public function authlogin()
    {

        $user = User::findOrFail(51);
        Auth::login($user);
    }

    public function authlogout()
    {
        Auth::logout();
    }

    public function storePage()
    {
        return view('store');
    }
}
