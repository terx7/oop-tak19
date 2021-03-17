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

}