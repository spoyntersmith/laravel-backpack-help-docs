<?php

namespace Spoyntersmith\LaravelBackpackHelpDocs\Commands;

use Illuminate\Console\Command;

class LaravelBackpackHelpDocsCommand extends Command
{
    public $signature = 'laravel-backpack-help-docs';

    public $description = 'My command';

    /**
     * @return int
     */
    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
