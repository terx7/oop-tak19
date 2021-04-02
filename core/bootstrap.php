<?php

$app = [];

$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database']['local'])
);

require 'controllers/PagesController.php';
require 'controllers/UsersController.php';
require 'controllers/TaskController.php';

function view ( $name, $data = [] ) {

    extract($data);

    return require "views/{$name}.view.php";

}

function redirect ( $path ) {

    header("Location: /{$path}");

}
