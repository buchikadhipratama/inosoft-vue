<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Jenssegers\Mongodb\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'customer';

    protected $fillable = ['id', 'name'];
}
