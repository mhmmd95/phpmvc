<?php

namespace Module\Users\Services;

use Module\Users\Requests\StoreUserRequest;
use App\Core\Request;
use App\Core\App;

final class Register {

    public function register(Request $request) {
        
        $isValid = (new StoreUserRequest)();

        //TODO: continue building the register a user functionality.
        die(var_dump($isValid, $_SESSION['errors']));

        if(!$isValid) {
            redirect('register');
        }

        App::get('database')->table('users')->insert($request->all());
    }
}
    