<?php

namespace Spatie\LaravelTest\Commands;

use Illuminate\Console\Command;

class LaravelTestCommand extends Command
{
    public $signature = 'laravel-test {command}';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
