<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{

    public function home()
    {

        $tickets = App::get('database')->selectAll('tickets');
        $users = App::get('database')->selectAll('users');

        return view('index', ['users' => $users, 'tickets' => $tickets]);
    }

    public function about()
    {
        $company = "Rocky Mountain Web Design";

        return view('about', ['company' => $company]);
    }

    public function contact()
    {
        return view('contact');
    }
}
