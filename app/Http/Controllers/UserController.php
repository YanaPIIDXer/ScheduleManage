<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function login_page()
    {
        return "Login Page";
    }

    public function register_page()
    {
        return view("user.register");
    }

    public function register(UserRequest $request)
    {
        $user = new User();
        $user->user_id = $request->user_id;
        $user->password = password_hash($request->password, PASSWORD_BCRYPT);

        $user->save();

        return redirect("/");
    }
}
