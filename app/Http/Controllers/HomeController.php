<?php

namespace App\Http\Controllers;

use App\Done;
use App\InProgress;
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

    public function insert_inprogress($id, $id_user)
    {
        echo $id . ' ' . $id_user;
    }

    public function insert_done($id, $id_user)
    {
        echo $id . ' ' . $id_user;
    }

    public function index()
    {
        $user_data = Task::where('user_committe', '=', Auth::user()->committe)->get();

        $user_data2 = User::where('committe', '=', Auth::user()->committe)->get();

        return view('home', compact('user_data','user_data2'));
    }

    public function profile_data($id)
    {
        $data = Auth::user()->find($id);

        return view('profile', compact('data'));
    }
}
