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
        'nic',
        'land_line',
        'bank_account',
        'position',
        'branch',
        'hired_date'
    ];

    public $timestamps = true;
    public $incrementing = false;

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'id');
    }

    public static function filterValidFields($fields) {
        $validFields = [
            'dob',
            'gender',
            'nic',
            'land_line',
            'bank_account',
            'position',
            'branch',
            'hired_date'
        ];

        $filteredFieldsAndData = array_intersect_key($fields, array_flip($validFields));

        return $filteredFieldsAndData;
    }

}