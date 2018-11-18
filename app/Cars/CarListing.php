<?php

namespace App\Cars;

use Illuminate\Database\Eloquent\Model;

class CarListing extends Model
{
    protected $table = 'car_listing';
    protected $primaryKey = 'id_car_listing';
    protected $fillable = [
        'condition',
        'color',
        'mileage',
        'seller_description',
        'year',
        'images'
    ];
    public $timestamps = true;

    public function model() {
        return $this->belongsTo('App\Cars\CarModel', 'id_car_model', 'id_car_model');
    }
}