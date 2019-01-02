<?php

namespace App\Cars;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Customers\Buyer;

class SoldCar extends Model
{
    protected $table = 'sold_car';
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

    /**
     * Defines one to many relationship to CarModel
     * Returns the specific model relationship
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function model() {
        return $this->belongsTo('App\Cars\CarModel', 'id_car_model', 'id_car_model');
    }

    /**
     * Defines one to many relationship to User [level:seller]
     * Returns the specific user relationship
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function seller() {
        return $this->belongsTo(User::class, 'id_seller', 'id');
    }

    /**
     * Defines one to many relationship to User [level:buyer]
     * Returns the specific user relationship
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function buyer() {
        return $this->belongsTo(Buyer::class, 'id_buyer', 'id');
    }
}
