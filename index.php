<?php

$query = require 'bootstrap.php';
// require 'Task.php';

$tasks = $query->selectAll('todos');

// dd($tasks);

require 'index.view.php';