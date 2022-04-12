<?php

namespace Spoyntersmith\LaravelBackpackHelpDocs;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spoyntersmith\LaravelBackpackHelpDocs\LaravelBackpackHelpDocs
 */
class LaravelBackpackHelpDocsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-backpack-help-docs';
    }
}
