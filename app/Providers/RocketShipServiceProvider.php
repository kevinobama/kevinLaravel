<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\RocketShip;


class RocketShipServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Helpers\Contracts\RocketShipContract', function(){

            return new RocketShip();

        });
		
        $this->app->singleton('RocketShipContractSingleton', function(){

            return new RocketShip();

        });		
		
		$this->app->singleton('FooBar', function ($app) {		
		return new FooBar($app['SomethingElse']);});		
	    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['App\Helpers\Contracts\RocketShipContract'];
    }

}
