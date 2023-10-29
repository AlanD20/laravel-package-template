<?php

namespace AuthorTemplate\LaravelPackageTemplate\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AuthorTemplate\LaravelPackageTemplate\LaravelPackageTemplate
 */
class LaravelPackageTemplate extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return \AuthorTemplate\LaravelPackageTemplate\LaravelPackageTemplate::class;
    }
}
