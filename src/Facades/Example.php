<?php

namespace Cremir\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cremir\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Cremir\Example\Example::class;
    }
}
