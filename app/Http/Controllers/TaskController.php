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

        $note = new Task;
        $note->task = $content;
        $note->user_id = Auth::user()->id;
        $note->user_committe = Auth::user()->committe;
        $note->user_position = Auth::user()->position;

        $note->save();

        return redirect('home');
    }

    public function edit($id)
    {
        $notes = Auth::user()->notes->find($id);

        return view('edit', compact('notes'));
    }

    public function update(Request $request, $id)
    {
        $content = $request->input('content');

        $notes = Auth::user()->notes->find($id);

        $notes->update(['task' => $content]);

        return redirect('home');
    }

    public function delete_post($id)
    {
        $note = Auth::user()->notes->find($id);

        $note->delete();

        return redirect('home');
    }
}
