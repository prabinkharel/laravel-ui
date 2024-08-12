<?php

namespace Prabin\LaravelUi\Commands;

use Illuminate\Console\Command;

class LaravelUiCommand extends Command
{
    public $signature = 'laravel-ui';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
