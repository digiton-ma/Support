<?php

declare(strict_types=1);

namespace Digitonma\Support\Providers;

use Digitonma\Support\Providers\Concerns\InteractsWithApplication;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

/**
 * Class     ServiceProvider
 *
 * @author   Digitonma <contact@digiton.ma>
 */
abstract class ServiceProvider extends IlluminateServiceProvider
{
    /* -----------------------------------------------------------------
     |  Traits
     | -----------------------------------------------------------------
     */

    use InteractsWithApplication;
}
