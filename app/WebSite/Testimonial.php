<?php

namespace App\WebSite;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonial';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'description', 'id_buyer', 'id_seller'];

    public $timestamps = true;

    public static function filterValidFields($fields) {
        $validFields = [
            'title',
            'description',
            'id_buyer',
            'id_seller'
        ];

        $filteredFieldsAndData = array_intersect_key($fields, array_flip($validFields));

        return $filteredFieldsAndData;
    }

    public function buyer() {
        return $this->belongsTo('App\Customers\Buyer', 'id_buyer', 'id');
    }

    public function seller() {
        return $this->belongsTo('App\User', 'id_seller', 'id');
    }
}
