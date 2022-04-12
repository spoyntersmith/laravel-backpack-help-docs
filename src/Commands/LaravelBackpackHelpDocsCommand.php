<?php

namespace Spoyntersmith\LaravelBackpackHelpDocs\Commands;

use Illuminate\Console\Command;

class LaravelBackpackHelpDocsCommand extends Command
{
    public $signature = 'laravel-backpack-help-docs';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
