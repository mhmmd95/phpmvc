<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    public function index()
    {
        $users = App::get('database')->table('users')->all();
        return view('users', ['users' => $users]);
    }

    public function store()
    {
        App::get('database')->table('users')->insert([
            'name' => $_POST['name']
        ]);

        return redirect('users');
    }
}
