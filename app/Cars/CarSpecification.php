<?php

namespace App\Cars;

use Illuminate\Database\Eloquent\Model;

class CarSpecification extends Model
{
    protected $table = 'car_specification';
    protected $primaryKey = 'id_car_specification';
    public $fillable = ['name'];
    public $timestamps = true;

    public function specificationType() {
        return $this->belongsTo('App\Cars\CarSpecificationType', 'id_car_specification_type', 'id_car_specification_type');
    }

    public function models() {
        return $this->belongsToMany('App\Cars\CarModel', 'car_specification_value', 'id_car_specification', 'id_car_model')
                    ->withPivot('value', 'unit')
                    ->as('specification');
    }
}
