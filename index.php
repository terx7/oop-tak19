<?php

require 'functions.php';
require 'Task.php';

$env = 'local';

$pdo = connectToDb($env);

$tasks = fetchAllTasks($pdo);

require 'index.view.php';