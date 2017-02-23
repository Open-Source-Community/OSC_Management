<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Task extends Eloquent
{
    protected $fillable = [
        'task', 'user_id', 'user_committe', 'user_position'
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function inprogress_tasks()
    {
        return $this->hasMany('App\InProgress');
    }

    public function done()
    {
        return $this->hasMany('App\Done');
    }
}
