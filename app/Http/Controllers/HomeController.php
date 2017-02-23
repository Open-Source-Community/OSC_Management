<?php

namespace App\Http\Controllers;

use App\Done;
use App\InProgress;
use App\Task;
use Auth;
use DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function insert_inprogress($id)
    {
        $inprogress = new InProgress;

        $inprogress->task_id = $id;
        $inprogress->user_id = Auth::user()->id;
        $inprogress->user_committe = Auth::user()->committe;

        $inprogress->save();

        //   DB::insert('insert into taskinprogress (task_id, user_id, user_committe) values (?, ?, ?)', [$id, Auth::user()->id, Auth::user()->committe]);

        return redirect('home');
    }

    public function insert_done($id)
    {
        $done = new Done;

        $done->task_id = $id;
        $done->user_id = Auth::user()->id;
        $done->user_committe = Auth::user()->committe;
        $done->save();

//        DB::insert('insert into taskdone (task_id, user_id, user_committe) values (?, ?, ?)', [$id, Auth::user()->id, Auth::user()->committe]);

        return redirect('home');
    }

    public function index()
    {
        $user_data = Task::where('user_committe', '=', Auth::user()->committe)->get();

        return view('home', compact('user_data'));
    }

    public function profile_data($id)
    {
        $data = Auth::user()->find($id);

        return view('profile', compact('data'));
    }
}
