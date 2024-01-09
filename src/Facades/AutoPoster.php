<?php

namespace Eele94\AutoPoster\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Eele94\AutoPoster\AutoPoster
 */
class AutoPoster extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Eele94\AutoPoster\AutoPoster::class;
    }
}
