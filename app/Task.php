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
}
