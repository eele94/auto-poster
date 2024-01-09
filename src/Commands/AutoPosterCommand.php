<?php

namespace Eele94\AutoPoster\Commands;

use Illuminate\Console\Command;

class AutoPosterCommand extends Command
{
    public $signature = 'auto-poster';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
