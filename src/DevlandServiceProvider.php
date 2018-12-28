<?php

namespace Skg\Devland;

use Illuminate\Support\ServiceProvider;

//use Skg\Devland\app\Http\Controllers;

class DevlandServiceProvider extends ServiceProvider {

    public function boot() {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'DevLand');
    }

    public function register() {
        $this->app->make('Skg\Devland\app\Http\Controllers\HomeController');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return ['skg.DevLand'];
    }

}
