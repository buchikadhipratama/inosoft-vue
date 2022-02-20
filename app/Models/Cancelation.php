<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Cancelation extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'cancelation';

    protected $fillable = [
        'description',
        'attachment'
    ];
}
