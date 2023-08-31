<?php

namespace App\Controllers;

use App\Core\App;
use App\Enums\Role;

class UsersController
{
    public function index()
    {
        $users = App::get('database')->table('users')->all();
        $roleCases = Role::cases();
        return view('users', compact(['users', 'roleCases']));
    }

    public function store()
    {
        App::get('database')->table('users')->insert([
            'name' => $_POST['name'],
            'admin' => $_POST['role'],
        ]);

        return redirect('users');
    }
}
