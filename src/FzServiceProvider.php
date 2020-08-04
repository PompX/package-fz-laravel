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
		
		$this->loadViewsFrom(__DIR__.'/views','Fz');//视图目录
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/fz'),//发布视图目录到resources下
            __DIR__.'/config/fz.php' => config_path('fz.php'),//发布配置文件到laravel的config目录下
        ]);
    }
	
}
