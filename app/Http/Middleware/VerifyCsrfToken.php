<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'admin/dashboard/carlisting/*',
        'admin/dashboard/seller/*',
        'admin/dashboard/seller_request/*',
        'admin/dashboard/employee/*',
        'admin/dashboard/subscription/*',
        'admin/dashboard/best_offer/*',
        'admin/dashboard/featured_listing/*',
        'admin/dashboard/testimonial/*',
        'admin/dashboard/website_content/*',
        'admin/dashboard/car_listing/*'
    ];
}