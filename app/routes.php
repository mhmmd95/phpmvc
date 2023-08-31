<?php

$router->get('', 'TicketController@index');
$router->post('', 'TicketController@store');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

$router->get('admin', 'AdminTicketController@index');