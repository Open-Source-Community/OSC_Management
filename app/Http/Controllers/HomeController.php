<?php

namespace App\Http\Controllers;

use App\InProgress;
use Illuminate\Http\Request;
use App\Task;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
