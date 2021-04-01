<?php

namespace App/Http/Controllers/frontend;

use Illuminate/Http/Request,
App/Http/Controllers/Controller;

class HomeControllers extend Controller
{
    public function index()
    {
        return view('frontend.home');
    }
}