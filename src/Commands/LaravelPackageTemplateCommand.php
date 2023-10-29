<?php

namespace AuthorTemplate\LaravelPackageTemplate\Commands;

class LaravelPackageTemplateCommand extends Command
{
    public $signature = 'init';

    public $description = 'My initial command';

    public function handle(): int
    {
        $this->comment('Looks like everything works fine!');

        return self::SUCCESS;
    }
}
