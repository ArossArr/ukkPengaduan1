<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('layouts/admin');
    }
    public function dashv()
    {
        return view ('layouts/dashboard');
    }
}
