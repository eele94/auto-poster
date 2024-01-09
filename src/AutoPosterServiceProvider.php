<?php

namespace Eele94\AutoPoster;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Eele94\AutoPoster\Commands\AutoPosterCommand;

class AutoPosterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('auto-poster')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_auto-poster_table')
            ->hasCommand(AutoPosterCommand::class);
    }
}
