<?php

namespace Ibelemo\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider {

    public function register(): void
    {

    }

    public function boot(): void
    {

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/setup.php', 'contact');

        $this->publishes([
            __DIR__.'/config/setup.php' => config_path('setup.php'),
        ]);




    }
}