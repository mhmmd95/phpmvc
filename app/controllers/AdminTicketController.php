<?php

namespace App\Controllers;

use App\Core\App;

class AdminTicketController {

    public function index() {

        return view('admin');
    }

    public function tickets() {

        if(isset($_POST['name']) && !is_null($_POST['name']) && $_POST['name'] != '') {

            $isAdmin = count(App::get('database')->table('users')->whereAdmin('name', $_POST['name'])) === 1;

            if($isAdmin) {
                $tickets = App::get('database')->table('tickets')->all();
                return view('admin_tickets', ['tickets' => $tickets]);
            }
        }

        return redirect('admin');
    }
}