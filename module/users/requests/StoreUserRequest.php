<?php

declare (strict_types = 1);

namespace Module\Users\Requests;

use Respect\Validation\Validator;
use App\Core\FormRequest;

final class StoreUserRequest extends FormRequest {
    
    /*
        $this->validated([
            username => [max(100), 'username has to have...'],
            password => max(20),
            email => table(users)->unique,
            admin => nullable,
        ]);
    */

    public function __invoke(): bool {

        return $this->validated([
            'username' => [
                Validator::alnum()->length(3, 100)->validate($this->request()->get('username')), 
                'username must have alphanumerics characters with minimum length of 3 and miximum length of 100'
            ],
        ]);
    }    
}