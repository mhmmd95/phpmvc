<?php 
require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core \{
    Router,
    Request
};

try{

    Router::load('app/routes.php')->direct(Request::uri(), Request::method());
}catch(\Exception $e) {
    echo $e;
}