<?php

declare(strict_types=1);

namespace Digitonma\Support\Tests\Stubs;

use Digitonma\Support\Providers\RouteServiceProvider;

/**
 * Class     RouteServiceProviderWithRouteClasses
 *
 * @author   Digitonma <contact@digiton.ma>
 */
class RouteServiceProviderWithRouteClasses extends RouteServiceProvider
{
    /* -----------------------------------------------------------------
     |  Properties
     | -----------------------------------------------------------------
     */

    protected $routesClasses = [
        \Digitonma\Support\Tests\Stubs\PagesRoutes::class,
    ];

    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    /**
     * Define your route model bindings, pattern filters, etc.
     */
    public function boot(): void
    {
        parent::boot();

        static::bindRouteClasses($this->routesClasses);
    }

    /**
     * Define the routes for the application.
     */
    public function map(): void
    {
        static::mapRouteClasses($this->routesClasses);

        //
    }
}
