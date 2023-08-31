<?php

// $router->get('public/style.css', 'PagesController@style');
$router->get('', 'TicketController@index');
$router->post('', 'TicketController@store');

$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->post('names', 'controllers/add-name.php');
$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');
