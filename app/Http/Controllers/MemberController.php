<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Schedule;

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

    public function add_schedule(Request $request)
    {
        $this->validate($request,
        [
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required|after:' . $request->start_time,
        ]);
        
        $user = session()->get("user", null);
        if($user == null)
        {
            return redirect("/")->with("flash_message", "不正なアクセスです。");
        }

        $schedule = new Schedule(['date' => $request->date, 'start_time' => $request->start_time, 'end_time' => $request->end_time]);
        $message = "追加しました。";
        if(!$user->schedules()->save($schedule))
        {
            $message = "追加に失敗しました。";
        }

        return redirect("/member/add_schedule")->with("flash_message", $message);
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
