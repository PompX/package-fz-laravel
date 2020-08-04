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
		
		$options = ['--provider' => 'Xwg\Fz\FzServiceProvider'];
        $this->call('vendor:publish', $options);
		
		$this->line('OK!!');
    }
}