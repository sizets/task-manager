<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Report extends Eloquent
{
    protected $fillable = [
    
        'vertical_id',
        'task_id',
        'hours',
        'description'


    ];

    public function vertical(){
        return $this->belongsTo('App\Vertical', 'vertical_id');
    }
    public function task(){
        return $this->belongsTo('App\Task', 'task_id');
    }
}
