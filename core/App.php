<?php

namespace App\Core;

use App\Core\Database\QueryBuilder;
use Exception;

class App
{

    protected static $registry = [];

    public static function bind($key, $value)

    {
        static::$registry[$key] = $value;
    }

    /**
     * resolve a dependency from the container
     * @return QueryBuilder
     */
    public static function get($key)

    {
        if (!array_key_exists($key, static::$registry)) {
            throw new Exception("No {$key} is bound in the container");
        }

        return static::$registry[$key];
    }
}
