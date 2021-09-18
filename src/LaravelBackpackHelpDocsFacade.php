<?php

namespace SeanPoynterSmith\LaravelBackpackHelpDocs;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SeanPoynterSmith\LaravelBackpackHelpDocs\LaravelBackpackHelpDocs
 */
class LaravelBackpackHelpDocsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-backpack-help-docs';
    }
}
