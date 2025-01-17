<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');
$router->get('users/delete', 'UsersController@delete');
$router->get('users/edit', 'UsersController@edit');

$router->post('users', 'UsersController@store');
$router->post('users/edit', 'UsersController@update');

$router->get('tasks', 'TaskController@index');
$router->get('tasks/delete', 'TaskController@delete');
$router->get('tasks/edit', 'TaskController@edit');

$router->post('tasks', 'TaskController@store');
$router->post('tasks/edit', 'TaskController@update');
