<?php

namespace App\Customers;

use Illuminate\Database\Eloquent\Model;
use App\Cars\SoldCar;

class Buyer extends Model
{
    protected $table = 'buyer';
    protected $fillable = ['name', 'address', 'email'];
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
}
