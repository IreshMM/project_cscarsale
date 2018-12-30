<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
   /* protected $fillable = [
        'id',
       'email',
      'password',
      'first_name',
      'last_name',
      'position',
       'mobile',
       'address',
        'gender'
    ];*/
    protected $guarded = [];
    protected $table = 'employee';
}
