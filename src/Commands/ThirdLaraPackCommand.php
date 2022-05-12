<?php

namespace MignonTech\ThirdLaraPack\Commands;

use Illuminate\Console\Command;

class ThirdLaraPackCommand extends Command
{
    public $signature = 'thirdlarapack';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
