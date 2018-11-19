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

    /**
     * Defines one to many relationship.
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function model() {
        return $this->belongsTo('App\Cars\CarModel', 'id_car_model', 'id_car_model');
    }

    /**
     * Returns an array of locations of listing images.
     * @param string directory to be concatanated to the front.
     * @return array where first two elements are thumbnails.
     */
    public function getImages($directory) {
        $imageLocations = array();

        for($i = 1; $i <= $this->images; $i++) {
            $imageLocations[] = $directory . '/' . strval($this->id_car_listing) . strval($i);
        }

        return $imageLocations;
    }
}