<?php

namespace App\Customers;

use Illuminate\Database\Eloquent\Model;
use App\Cars\CarModel;

class Subscription extends Model
{
    protected $table = 'subscription';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'id_car_model'];

    public $timestamps = true;

    public function model() {
        return $this->belongsTo(CarModel::class, 'id_car_model', 'id_car_model');
    }

    public static function filterValidFields($fields) {
        $validFields = [
            'name',
            'email',
            'id_car_model'
        ];

        $filteredFieldsAndData = array_intersect_key($fields, array_flip($validFields));

        return $filteredFieldsAndData;
    }
}
