<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Name extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'names';

    protected $fillable = [
        'name',
    ];
}
