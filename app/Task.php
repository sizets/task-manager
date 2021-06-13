<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Task extends Eloquent
{
    protected $fillable = [
        'name',
        'vertical_id',
        

    ];

    public function vertical(){
        return $this->belongsTo('App\Vertical', 'vertical_id');
    }
}
