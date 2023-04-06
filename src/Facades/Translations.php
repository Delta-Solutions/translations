<?php

namespace DeltaSolutions\Translations\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DeltaSolutions\Translations\Translations
 */
class Translations extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \DeltaSolutions\Translations\Translations::class;
    }
}
