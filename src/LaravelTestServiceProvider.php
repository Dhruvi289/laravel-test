<?php

namespace Spatie\LaravelTest;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelTest\Commands\LaravelTestCommand;

class LaravelTestServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-test')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-test_table')
            ->hasCommand(LaravelTestCommand::class);
    }
}
