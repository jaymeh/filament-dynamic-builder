<?php

namespace Jaymeh\FilamentDynamicBuilder\Commands;

use Illuminate\Console\Command;

class FilamentDynamicBuilderCommand extends Command
{
    public $signature = 'filament-dynamic-builder';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
