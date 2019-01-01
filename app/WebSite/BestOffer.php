<?php

namespace App\WebSite;

use Illuminate\Database\Eloquent\Model;
use App\Cars\CarListing;

class BestOffer extends Model
{
    protected $table = 'best_offer';
    protected $primaryKey = 'id_car_listing';
    protected $fillable = ['id_car_listing'];

    public $timestamps = true;

    /**
     * Defines one to one relationship to CarListing
     * Returns the relationship to related car listing
     * @return Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carListing() {
        return $this->hasOne(CarListing::class, 'id_car_listing', 'id_car_listing');
    }
}
