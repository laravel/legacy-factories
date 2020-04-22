<?php

namespace Illuminate\Database\Eloquent;

use Faker\Generator;
use Illuminate\Support\ServiceProvider;

class LegacyFactoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Factory::class, function ($app) {
            return Factory::construct(
                $app->make(Generator::class), $this->app->databasePath('factories')
            );
        });
    }
}
