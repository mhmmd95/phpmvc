<?php

$router->get('', 'TicketController@index');
$router->post('', 'TicketController@store');
$router->get('{ticket}/edit', 'TicketController@edit');
/*

I need to register the route like 
-- POST => [{ticket}/edit($ticket)]

*/

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

$router->get('admin', 'AdminTicketController@index');
$router->post('admin/tickets', 'AdminTicketController@tickets');