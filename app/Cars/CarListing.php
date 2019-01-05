<?php

namespace App\Cars;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        'images',
        'city',
        'id_car_model',
        'id_seller',
        'buying_price',
        'selling_price'
    ];
    public $timestamps = true;

    /**
     * Defines many to one relationship to car model.
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function model() {
        return $this->belongsTo('App\Cars\CarModel', 'id_car_model', 'id_car_model');
    }

    /**
     * Defines many to one relationship to seller [user:level = seller]
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function seller() {
        return $this->belongsTo('App\User', 'id_seller', 'id');
    }

    /**
     * Returns an array of locations of listing images.
     * @param string directory to be concatanated to the front.
     * @return array where first two elements are thumbnails.
     */
    public function getImages() {
        $directory = "/images";
        $imageLocations = array();

        for($i = 1; $i <= $this->images; $i++) {
            $imageLocations[] = $directory . '/' . strval($this->id_car_listing) . strval($i) . '.jpg';
        }

        return $imageLocations;
    }

    public static function getBestOffers() {
        $bestOffers = DB::table('best_offers')->get();
        return $bestOffers;
    }

    public static function filterValidFields($fields) {
        $validFields = [
            'id_car_listing',
            'condition',
            'mileage',
            'color',
            'seller_description',
            'year',
            'images',
            'city',
            'id_car_model',
            'id_seller',
            'buying_price',
            'selling_price'
        ];

        $filteredFieldsAndData = array_intersect_key($fields, array_flip($validFields));

        return $filteredFieldsAndData;
    }
}