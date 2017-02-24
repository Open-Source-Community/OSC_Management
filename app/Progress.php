<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Progress extends Eloquent
{
    protected $fillable = ['member', 'user_committe', 'user_position', 'user_id', 'task_id', 'taskk'];

    public function tasks_inprogress()
    {
        return $this->belongsTo('App\Task');
    }

}
