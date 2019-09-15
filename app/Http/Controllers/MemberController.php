<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $user = session()->get("user", null);
        if($user == null)
        {
            return redirect("/")->with("flash_message", "不正なアクセスです。");
        }
        
        return view("member.index");
    }
}
