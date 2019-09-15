<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login_page()
    {
        return "Login Page";
    }

    public function register_page()
    {
        return "Register Page";
    }
}
