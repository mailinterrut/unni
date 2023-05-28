<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeController  
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('users.login');
    }
    public function logout()
    {
        return view('users.login');
    }

    public function register()
    {
        return view('users.register');
    }
    public function dashboard(){

        return view('users.dashboard.dashboard');
    }
    public  function isLoggedIn()
    {
        return auth()->check();
    }

}
