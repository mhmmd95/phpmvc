<?php

namespace App\Controllers;

use App\Core\App;

class AdminTicketController {

    public function index() {

        $tickets = App::get('database')->table('tickets')->all();
        return view('admin_tickets', ['tickets' => $tickets]);
    }
}