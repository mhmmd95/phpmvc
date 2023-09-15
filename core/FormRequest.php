<?php

declare (strict_types = 1);

namespace App\Core;

use App\Core\Request;
use Module\Shared\Traits\Request as TraitsRequest;

abstract class FormRequest {

    use TraitsRequest;

    public function __construct()
    {
        $this->request = Request::getInstance();
    }

    protected function validated(array $rules, int $index = 0): bool {

        if($index >= count($rules)) {
            return true;
        }

        $param = array_keys($rules)[$index];

        if(!$rules[$param][0]) {
            $_SESSION['errors'] = $rules[$param][1];
            return false;
        }

        return $this->validated($rules, ++$index);
    }

}