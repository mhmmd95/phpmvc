<?php 
require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core \{
    Router,
    Request
};

$request = Request::getInstance();    

try{
    Router::load('app/routes.php')->direct($request->uri(), $request->method());
}catch(\Throwable $e) {
    die($e);
}