<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Donee extends Eloquent
{
    protected $fillable = ['member', 'user_committe', 'user_position', 'user_id', 'task_id', 'taskk'];

    public function tasks_done()
    {
        return $this->belongsTo('App\Task');
    }
}
