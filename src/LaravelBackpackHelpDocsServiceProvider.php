<?php

namespace SeanPoynterSmith\LaravelBackpackHelpDocs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use SeanPoynterSmith\LaravelBackpackHelpDocs\Commands\LaravelBackpackHelpDocsCommand;

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
            ->hasConfigFile()
            ->hasViews()
            ->hasRoute('backpack/custom')
            ->hasMigration('create_laravel-backpack-help-docs_table')
            ->hasCommand(LaravelBackpackHelpDocsCommand::class);
    }
}
