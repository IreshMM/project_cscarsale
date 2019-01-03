<?php

namespace App\Customers;

use Illuminate\Database\Eloquent\Model;
use App\Cars\SoldCar;

class Buyer extends Model
{
    protected $table = 'buyer';
    protected $fillable = [
        'title', 
        'first_name', 
        'last_name', 
        'street_address', 
        'email',
        'city'
    ];
    protected $primaryKey = 'id';

    public $timestamps = true;

    /**
     * Defines one to many relationship to SoldCar
     * Returns the cars bought by this buyer
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carsBought() {
        return $this->hasMany(SoldCar::class, 'id_buyer', 'id');
    }

    public static function filterValidFields($fields) {
        $validFields = [
            'title',
            'first_name',
            'last_name',
            'street_address',
            'city',
            'email',
            'buying_price',
            'selling_price',
            'date'
        ];

        $filteredFieldsAndData = array_intersect_key($fields, array_flip($validFields));

        return $filteredFieldsAndData;
    }
}
