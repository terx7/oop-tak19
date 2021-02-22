<?php

require('functions.php');

class Task {

    protected $description;
    protected $completed = false;

    public function __construct ( $description ) {
        $this->description = $description;
    }

    public function isComplete () {
        return $this->completed;
    }

    public function complete () {
        $this->completed = true;
    }

}

$tasks = [
    new Task('Käi poes'),
    new Task('Vaata korvpalli kell neli'),
    new Task('Täida päevikud'),
];

dd($tasks);

// $task->complete();
// dd($task->isComplete());
// require('index.view.php');