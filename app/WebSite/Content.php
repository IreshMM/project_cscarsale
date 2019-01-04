<?php

namespace App\WebSite;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'website_content';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'description'
    ];

    public $timestamps = false;

    public static function filterValidFields($fields) {
        $validFields = [
            'title',
            'description'
        ];

        $filteredFieldsAndData = array_intersect_key($fields, array_flip($validFields));

        return $filteredFieldsAndData;
    }
}
