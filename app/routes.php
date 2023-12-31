<?php

$router->get('', 'TicketController@index');
$router->post('', 'TicketController@store');
$router->get('{ticket}/edit', 'TicketController@edit');
$router->get('register', 'AuthenticationController@register');


$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

$router->get('admin', 'AdminTicketController@index');
$router->post('admin/tickets', 'AdminTicketController@tickets');