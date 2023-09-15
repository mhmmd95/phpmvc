<?php

declare (strict_types = 1);

namespace Module\Shared\Traits;

use App\Core\Request as CoreRequest;

trait Request {

    private CoreRequest $request;

    protected function request() {
        return $this->request;
    }
}