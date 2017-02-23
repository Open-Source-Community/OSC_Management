<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Auth;

class TaskController extends Controller
{
    public function insert_post(Request $request)
    {
        $content = $request->input('content');
        $option = $request->input('task_to_member');

        $task = new Task;
        $task->task = $content;
        $task->task_member = $option;
        $task->user_id = Auth::user()->id;
        $task->user_committe = Auth::user()->committe;
        $task->user_position = Auth::user()->position;

        $task->save();

        return redirect('home');
    }

    public function edit($id)
    {
        $notes = Auth::user()->tasks->find($id);

        return view('edit', compact('notes'));
    }

    public function update(Request $request, $id)
    {
        $content = $request->input('content');

        $task = Auth::user()->tasks->find($id);

        $task->update(['task' => $content]);

        return redirect('home');
    }

    public function delete_post($id)
    {
        $task = Auth::user()->tasks->find($id);

        $task->delete();

        return redirect('home');
    }
}
