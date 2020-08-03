<?php
namespace Xwg\Fz\Facades;

use Illuminate\Support\Facades\Facade;

class Fz extends Facade
{
    protected  static function getFacadeAccessor()
    {
        return 'fz';
    }
}