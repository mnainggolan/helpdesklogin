<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }
    public function register()
    {
        return view('auth/reset');
    }
    public function user()
    {
        return view('auth/reset');
    }
}
