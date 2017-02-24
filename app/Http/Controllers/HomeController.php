<?php

namespace App\Http\Controllers;

use App\Done;
use App\Task;
use App\User;
use Auth;
use DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function insert_inprogress($id, $member, $taskk)
    {
        DB::insert('insert into progress (task_id, taskk, user_id, user_position, user_committe, member) values (?, ?, ?,?, ?, ?)',
            [$id, $taskk, Auth::user()->id, Auth::user()->position, Auth::user()->committe, $member]);

        DB::delete('delete from  tasks where id = ?', [$id]);

        return redirect('home');
    }

    public function insert_done($id, $member, $taskk)
    {
        DB::insert('insert into donee (task_id, taskk, user_id, user_position, user_committe, member) values (?, ?, ?,?, ?, ?)',
            [$id, $taskk, Auth::user()->id, Auth::user()->position, Auth::user()->committe, $member]);

        DB::delete('delete from  progress where id = ?', [$id]);

        return redirect('home');
    }

    public function index()
    {
        $user_data = Task::where('user_committe', '=', Auth::user()->committe)->get();

        $user_data2 = User::where('committe', '=', Auth::user()->committe)->get();

        $user_data3 = DB::select('select * from progress where user_committe  = ?', [Auth::user()->committe]);

        $user_data4 = DB::select('select * from donee where user_committe  = ?', [Auth::user()->committe]);

        return view('home', compact('user_data', 'user_data2', 'user_data3', 'user_data4'));
    }

    public function profile_data($id)
    {
        $data = Auth::user()->find($id);

        return view('profile', compact('data'));
    }

    public function delete_task_inprogress($id)
    {
        DB::delete('delete from  progress where id = ?', [$id]);

        return redirect('home');
    }

    public function delete_task_done($id)
    {
        DB::delete('delete from  donee where id = ?', [$id]);

        return redirect('home');
    }
}
