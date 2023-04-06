<?php

namespace DeltaSolutions\Translations\Commands;

use Illuminate\Console\Command;

class TranslationsCommand extends Command
{
    public $signature = 'translations';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
