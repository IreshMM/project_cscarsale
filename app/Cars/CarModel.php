<?php

namespace App\Cars;

use Illuminate\Database\Eloquent\Model;
use App\Customer\Subscription;

class CarModel extends Model
{
    protected $table = 'car_model';
    protected $primaryKey = 'id_car_model';
    public $fillable = ['name'];
    public $timestamps = true;

    public function make() {
        return $this->belongsTo('App\Cars\CarMake', 'id_car_make', 'id_car_make');
    }

    public function specifications() {
        return $this->belongsToMany('App\Cars\CarSpecification', 'car_specification_value', 'id_car_model', 'id_car_specification')
                    ->withPivot('value', 'unit')
                    ->as('specification');;
    }

    public function listings() {
        return $this->hasMany('App\Cars\CarListing', 'id_car_model', 'id_car_model');
    }

    public function subscriptions() {
        return $this->hasMany(Subscription::class, 'id_car_model', 'id_car_model');
    }
}
