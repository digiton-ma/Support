<?php

declare(strict_types=1);

namespace Digitonma\Support\Providers;

use Digitonma\Support\Routing\Concerns\RegistersRouteClasses;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as IlluminateServiceProvider;

/**
 * Class     RouteServiceProvider
 *
 * @author   Digitonma <contact@digiton.ma>
 */
abstract class RouteServiceProvider extends IlluminateServiceProvider
{
    /* -----------------------------------------------------------------
     |  Traits
     | -----------------------------------------------------------------
     */

    use RegistersRouteClasses;
}
