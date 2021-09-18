<?php

namespace spoyntersmith\LaravelBackpackHelpDocs;

use Illuminate\Support\Facades\Facade;

/**
 * @see \spoyntersmith\LaravelBackpackHelpDocs\LaravelBackpackHelpDocs
 */
class LaravelBackpackHelpDocsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-backpack-help-docs';
    }
}
