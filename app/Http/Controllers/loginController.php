<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Display login page
    public function index()
    {
        return view('login');
    }
}
