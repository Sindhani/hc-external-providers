<?php

namespace Sindhani\Commands;

use Illuminate\Console\Command;

class HcExternalProvidersCommand extends Command
{
    public $signature = 'install';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
