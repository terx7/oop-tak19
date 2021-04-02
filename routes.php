<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');


$router->get('todos', 'TaskController@index');
$router->post('todos', 'TaskController@store');

$router->get('users/delete', 'UsersController@delete');

$router->get('users/edit', 'UsersController@edit');

$router->post('users', 'UsersController@store');
$router->post('users/edit', 'UsersController@update');
