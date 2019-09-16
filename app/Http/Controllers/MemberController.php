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

    public function add_schedule_page()
    {
        $user = session()->get("user", null);
        if($user == null)
        {
            return redirect("/")->with("flash_message", "不正なアクセスです。");
        }
        
        return view("member.add_schedule");
    }

    public function schedule_list_page()
    {
        $user = session()->get("user", null);
        if($user == null)
        {
            return redirect("/")->with("flash_message", "不正なアクセスです。");
        }
        
        return view("member.schedule_list");
    }
}
