<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function login_page()
    {
        return view("user.login");
    }

    public function login(UserRequest $request)
    {
        $user = User::where("user_id" , "=" , $request->user_id)->get()->toArray();
        if(empty($user))
        {
            return redirect("/login")->with("flash_message", "ログインに失敗しました。");
        }

        $is_match_password = password_verify($request->password, $user[0]['password']);
        if(!$is_match_password)
        {
            return redirect("/login")->with("flash_message", "ログインに失敗しました。");
        }

        session()->put("user", $user);

        return redirect("/member/index");
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

    public function logout(Request $request)
    {
        session()->forget("user");
        return redirect("/")->with("flash_message", "ログアウトしました。");
    }
}
