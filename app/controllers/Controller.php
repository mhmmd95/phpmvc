<?php

declare (strict_types = 1);

namespace App\Controllers;

use App\Core\Request;
use Module\Shared\Traits\Request as TraitsRequest;

abstract class Controller {

    use TraitsRequest;

    public function __construct()
    {
        $this->request = Request::getInstance();
    }

    
}