<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'title',
        'description',
        'make',
        'model',
        'type',
        'status',
        'year',
        'thumbnail'
    ];
}
