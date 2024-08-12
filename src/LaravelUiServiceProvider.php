<?php

namespace Prabin\LaravelUi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Prabin\LaravelUi\Commands\LaravelUiCommand;

class LaravelUiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-ui')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(LaravelUiCommand::class);
    }
}
