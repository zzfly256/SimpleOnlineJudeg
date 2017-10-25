<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = 'work';
    protected $fillable = [
        'task_id'
    ];

    public function task()
    {
        return $this->belongsTo('App\Task');
    }

}
