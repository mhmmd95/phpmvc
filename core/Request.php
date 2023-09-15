<?php

declare (strict_types = 1);

namespace App\Core;

final class Request
{
    private array $request;
    private static ?Request $instance = null;

    private function __construct()
    {
        if(!empty($_REQUEST)) {
            $this->request = $_REQUEST;
        }
    }

    public static function getInstance(): self {

        if(is_null(self::$instance)) {
            self::$instance = new Request;
        }

        return self::$instance;
    }
    
    /**
     * return the request uri
     */
    public function uri(): string
    {        
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),
            '/'
        );
    }

    /**
     * return the request method
     */
    public function method(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * return all the existed request parameters
     * @return array
     */
    public function all(): array {
        return $this->request;
    }

    /**
     * @param string $key
     * @return bool true if the $key is existed within the request parameters else return false
     */
    public function has(string $key): bool {
        return isset($this->request[$key]) && !is_null($this->request[$key]) && $this->request[$key] !== "";
    }
    
    /**
     * get the request parameter via the key
     * @return string
     */
    public function get(string $key, string $default = ''): string {
    
        return match($this->has($key)) {
            true => $this->request[$key],
            default => $default
        };
    }
}


    