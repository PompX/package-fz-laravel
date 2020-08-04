<?php

namespace Xwg\Fz\Console;
use Illuminate\Console\Command;

class PublishCommand extends Command
{
    protected $signature = 'fz:publish';

    protected $description = 'publish fz vendor';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        //$options = ['--provider' => 'Xwg\Fz\FzServiceProvider'];
        //$this->call('vendor:publish', $options);
		
		$this->line('publish...');
		$this->line('hello world!!');
		
		$this->loadViewsFrom(__DIR__.'/views','Fz');//视图目录
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/fz'),//发布视图目录到resources下
            __DIR__.'/config/fz.php' => config_path('fz.php'),//发布配置文件到laravel的config目录下
        ]);
		
		$this->line('OK!!');
    }
}