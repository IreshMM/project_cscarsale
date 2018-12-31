<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Cars\SoldCar;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Defines seller relationship to SoldCar [user->level = seller]
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function soldCars() {
        return $this->hasMany(SoldCar::class, 'id_seller', 'id');
    }
}
