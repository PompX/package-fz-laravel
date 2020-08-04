<?php

namespace Xwg\Fz;

use Illuminate\Support\ServiceProvider;
use Xwg\Fz\Console\PublishCommand;

class FzServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('fz',function ($app){
            return new Fz($app['session'], $app['config']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       if($this->app->runningInConsole()){
            $this->commands([
                PublishCommand::class,
            ]);
        }
    }
	
}
