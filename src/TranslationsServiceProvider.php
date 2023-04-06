<?php

namespace DeltaSolutions\Translations;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use DeltaSolutions\Translations\Commands\TranslationsCommand;

class TranslationsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('translations')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_translations_table')
            ->hasCommand(TranslationsCommand::class);
    }
}
