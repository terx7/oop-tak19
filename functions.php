<?php

function fetchAllTasks ($pdo) {
   
    $statement = $pdo->prepare('SELECT * FROM todos;');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}

function dd ( $val ) {

    echo '<pre>';
    die(var_dump($val));
    echo '</pre>';

}