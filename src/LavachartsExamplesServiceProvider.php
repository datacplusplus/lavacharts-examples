<?php

namespace Khill\Lavacharts\Examples;

use \Illuminate\Support\ServiceProvider;

class LavachartsExamplesServiceProvider extends ServiceProvider
{
    protected $defer = false;

    public function boot()
    {
        /**
         * If the package method exists, we're using Laravel 4
         */
        if (method_exists($this, 'package')) {
            $this->package('khill/lavacharts/examples');
        }

        include __DIR__.'/routes.php';

        $this->loadViewsFrom(__DIR__.'/../views', 'lavacharts-examples');
    }

    public function register()
    {
        //
    }

    public function provides()
    {
        return ['lavacharts-examples'];
    }
}
