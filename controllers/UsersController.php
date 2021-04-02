<?php

class UsersController {

    public function index () {

        global $app;

        $users = $app['database']->selectAll('users');

        return view('users', ['users' => $users]);

    }

    public function store () {

        global $app;

        $app['database']->insert('users', [
            'name' => $_POST['name'],
        ]);

        return redirect('users');
    }

    public function edit () {

        global $app;

       $user = $app['database']->selectById('users', $_GET['id']);

       return view('edit-user', ['user' => $user]);
    }

    public function update () {

        global $app;

        $app['database']->update('users', $_POST['id'], [
            'name' => $_POST['name'],
        ]);

        return redirect('users');
    }

    public function delete () {

        global $app;

        $app['database']->delete('users', $_GET['id']);

        return redirect('users');
    }

    

}
