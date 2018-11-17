<?php

namespace App\Cars;

use Illuminate\Database\Eloquent\Model;

class CarMake extends Model
{
    protected $table = 'car_make';
    protected $primaryKey = 'id_car_make';
    protected $fillable = ['name'];
    public $timestamps = true;
    
    public function models() {
        return $this->hasMany('App\Cars\CarModel', 'id_car_make', 'id_car_make');
    }
}
