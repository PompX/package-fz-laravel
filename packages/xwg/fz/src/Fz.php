<?php
namespace Xwg\Fz;

use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;

class Fz
{
    protected $session;

    protected $config;

    public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }

    public function test_rtn()
    {
        return '<strong>from your package!</strong>';
    }
}