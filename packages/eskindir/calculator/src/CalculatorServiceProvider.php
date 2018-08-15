<?php

namespace eskindir\calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *As you can see in our new Service Provider class we have 2 methods.
     *boot() and register(). The boot() method is used to boot any routes,
     *event listeners, or any other functionality you want to add to your package.
     *The register() method is used to bind any classes or functionality into the app container.
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->make('eskindir\calculator\CalculatorController');
      $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }
}
