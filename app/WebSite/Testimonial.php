<?php

namespace App\WebSite;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonial';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'description', 'id_buyer', 'id_seller'];

    public $timestamps = true;
}
