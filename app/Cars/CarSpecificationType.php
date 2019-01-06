<?php

namespace App\Cars;

use Illuminate\Database\Eloquent\Model;

class CarSpecificationType extends Model
{
    protected $table = 'car_specification_type';
    protected $primaryKey = 'id_car_specification_type';
    public $fillable = ['name'];
    public $timestamps = false;

    public function specifications() {
        return $this->hasMany('App\Cars\CarSpecification', 'car_specification_type', 'car_specification_type');
    }
}
