<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Cars\SoldCar;
use App\Cars\SellerRequest;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 
        'first_name', 
        'last_name',
        'street_address',
        'city',
        'phone',
        'level',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    /**
     * Defines seller relationship to SoldCar [user->level = seller]
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function soldCars() {
        return $this->hasMany(SoldCar::class, 'id_seller', 'id');
    }

    /**
     * Defines seller request relationship to SellerRequest [user->level = seller]
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sellerRequests() {
        return $this->hasMany(SellerRequest::class, 'id_seller', 'id');
    }
    

    public static function filterValidFields($fields) {
        $validFields = [
            'title', 
            'first_name', 
            'last_name',
            'street_address',
            'city',
            'phone',
            'level',
            'email',
            'password'
        ];

        $filteredFieldsAndData = array_intersect_key($fields, array_flip($validFields));

        return $filteredFieldsAndData;
    }
}
