<?php

namespace Spoyntersmith\LaravelBackpackHelpDocs;

use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spoyntersmith\LaravelBackpackHelpDocs\Commands\LaravelBackpackHelpDocsCommand;
use Spoyntersmith\LaravelBackpackHelpDocs\Components\Widget;
use Spoyntersmith\LaravelBackpackHelpDocs\Http\Livewire\HelpDocsModal;

class LaravelBackpackHelpDocsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-backpack-help-docs')
            ->hasRoutes('backpack/help-docs')
            ->hasConfigFile('backpack/help-docs')
            ->hasViews('laravel-backpack-help-docs')
            ->hasViewComponents('help-docs', 'widget')
            ->hasCommand(LaravelBackpackHelpDocsCommand::class)
            ->hasMigration('create_laravel-backpack-help-docs_table');
    }

    public function packageBooted()
    {
        Blade::component('widget', Widget::class, 'help-docs');

        Livewire::component('help-docs-modal', HelpDocsModal::class);
    }
}
