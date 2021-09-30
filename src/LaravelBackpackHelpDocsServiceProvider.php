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
            ->hasConfigFile('backpack/backpack-help-docs')
            ->hasViews()
            ->hasRoute('backpack/custom')
            ->hasMigration('create_laravel_backpack_help_docs_table')
            ->hasCommand(LaravelBackpackHelpDocsCommand::class);

        $this->app->config["filesystems.disks.help-docs"] = [
            'driver' => 'local',
            'root' => storage_path('app/help-docs'),
        ];
    }
}
