<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Vertical extends Eloquent
{
    protected $fillable = [
        'name' 
    ];
}
