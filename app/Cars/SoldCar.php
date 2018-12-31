<?php

namespace App\Cars;

use Illuminate\Database\Eloquent\Model;

class SoldCar extends Model
{
    protected $table = 'sold_cars';
    protected $primaryKey = 'id_sold_car';
    protected $fillable = [
        'condition',
        'color',
        'mileage',
        'seller_description',
        'year',
        'images'
    ];

    public $timestamps = true;

    /**
     * Defines one to many relationship CarModel.
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function model() {
        return $this->belongsTo('App\Cars\CarModel', 'id_car_model', 'id_car_model');
    }

    public function seller() {

    }
}
