<?php

namespace MignonTech\ThirdLaraPack;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MignonTech\ThirdLaraPack\Commands\ThirdLaraPackCommand;

class ThirdLaraPackServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('thirdlarapack')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_thirdlarapack_table')
            ->hasCommand(ThirdLaraPackCommand::class);
    }
}
