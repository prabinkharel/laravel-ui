<?php

namespace Prabin\LaravelUi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Prabin\LaravelUi\LaravelUi
 */
class LaravelUi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Prabin\LaravelUi\LaravelUi::class;
    }
}
