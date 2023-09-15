<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Request;
use Module\Users\Services\Register;

class AuthenticationController extends Controller{

    public function register() {

        $registerUser = new Register;
        $registerUser->register($this->request());

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