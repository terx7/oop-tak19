<?php

class TaskController {

    public function index () {

        global $app;

        $tasks= $app['database']->selectAll('todos');

        return view('task', ['tasks' => $tasks]);

    }

    public function store () {

        global $app;

        $app['database']->insert('todos', [
            'description' => $_POST['description'],
        ]);

        return redirect('task');
    }

    public function edit () {

        global $app;

        $task = $app['database']->selectById('todos', $_GET['id']);

        return view('edit-task', ['task' => $task]);
    }

    public function update () {

        global $app;

        $app['database']->update('todos', $_POST['id'], [
            'description' => $_POST['description'],
        ]);

        return redirect('tasks');
    }

    public function delete () {

        global $app;

        $app['database']->delete('todos', $_GET['id']);

        return redirect('tasks');
    }

}
