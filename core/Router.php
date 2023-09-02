<?php

namespace App\Core;


class Router
{

    public $routes = [
        'GET' => [],
        'POST' => []
    ];





    public static function load($file)
    {

        $router = new static;

        require $file;

        return $router;
    }




    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }



    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    private function compare_urls(string $input_string, array $urls) :false|array
    {
        foreach (array_keys($urls) as $url) {

            $inputStrArray = explode('/', $input_string);
            $urlArray = explode('/', $url);
            

            $dynamicParams = [];

            if (count($inputStrArray) === count($urlArray)) {
                for ($i = 0; $i < count($urlArray); ++$i) {
                    if (preg_match('/\{(.*?)\}/', $urlArray[$i], $matches) > 0) {
                        $dynamicParams[$matches[1]] = $inputStrArray[$i];
                        $urlArray[$i] = $inputStrArray[$i];
                        continue;
                    }
                }

                if (implode('/', $urlArray) == $input_string) {
                    return [$url, $dynamicParams];
                }
            }
        }
        return false;
    }

    public function direct($uri, $requestType)
    {
        [$uri, $dynamicParams] = $this->compare_urls($uri, $this->routes[$requestType]);

        if(is_array($dynamicParams)) {

            return $this->callAction(
                ...[...explode('@', $this->routes[$requestType][$uri]), $dynamicParams]
            );
        }

        throw new \Exception('No route defined for this URI.');
    }

    protected function callAction($controller, $action, $dynamicParams)
    {
        $controller = "App\\Controllers\\{$controller}";

        $controller = new $controller;


        if (!method_exists($controller, $action)) {
            throw new \Exception(
                "{$controller} does not respond to the {$action} action"
            );
        }

        return $controller->$action(...$dynamicParams);
    }
}
