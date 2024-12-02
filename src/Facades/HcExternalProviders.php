<?php

namespace Sindhani\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sindhani\HcExternalProviders
 */
class HcExternalProviders extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Sindhani\HcExternalProviders::class;
    }
}
