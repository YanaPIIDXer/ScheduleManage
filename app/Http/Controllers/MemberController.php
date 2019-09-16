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
            'title' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required|after:' . $request->start_time,
        ]);
        
        $user = session()->get("user", null);
        if($user == null)
        {
            return redirect("/")->with("flash_message", "不正なアクセスです。");
        }

        $schedule = new Schedule(['title' => $request->title, 'date' => $request->date, 'start_time' => $request->start_time, 'end_time' => $request->end_time]);
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

        $schedules = $user->schedules()->get();
        return view("member.schedule_list")->with("schedules", $schedules);
    }

    public function delete_schedule(Request $request)
    {
        $user = session()->get("user", null);
        if($user == null)
        {
            return redirect("/")->with("flash_message", "不正なアクセスです。");
        }

        $message = "消去しました。";
        if(!$user->schedules()->find($request->id)->delete())
        {
            $message = "消去に失敗しました。";
        }
        return redirect("/member/schedule_list")->with("flash_message", $message);
    }

    public function delete_ended_schedule()
    {
        $user = session()->get("user", null);
        if($user == null)
        {
            return redirect("/")->with("flash_message", "不正なアクセスです。");
        }

        $query = $user->schedules()->where("date", "<", date("Y/m/d"));
        $query->orWhere(function($q)
        {
            $q->where("date", "=", date("Y/m/d"))->where("end_time", "<", date("H:i:s"));
        });

        $message = "消去しました。";
        if(!$query->delete())
        {
            $message = "消去に失敗しました。";
        }
        return redirect("/member/schedule_list")->with("flash_message", $message);
    }
}
