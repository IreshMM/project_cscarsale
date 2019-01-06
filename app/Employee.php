<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'employee';
    protected $fillable = [
        'dob',
        'gender',
        'nic'.
        'land_line',
        'bankaccount',
        'position',
        'branch',
        'hired_date'
    ];

    public $timestamps = true;
    public $incrementing = false;

    public function user() {
        $this->hasOne('App\User');
    }
}
