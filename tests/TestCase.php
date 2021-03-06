<?php

namespace Spoyntersmith\LaravelBackpackHelpDocs\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Spoyntersmith\LaravelBackpackHelpDocs\LaravelBackpackHelpDocsServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Spoyntersmith\\LaravelBackpackHelpDocs\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelBackpackHelpDocsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-backpack-help-docs_table.php.stub';
        $migration->up();
        */
    }
}
