<?php

namespace App\Core;

class Router
{
    private $routes = [];

    public function get($uri, $action)
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function post($uri, $action)
    {
        $this->routes['POST'][$uri] = $action;
    }

    public function dispatch($method, $uri)
    {
        $uri = parse_url($uri, PHP_URL_PATH);

        if (!isset($this->routes[$method][$uri])) {
            http_response_code(404);
            echo json_encode([
                "success" => false,
                "message" => "Rota não encontrada"
            ]);
            return;
        }

        $action = $this->routes[$method][$uri];

        // separa Controller@method
        list($controller, $method) = explode('@', $action);

        $controller = "App\\Controllers\\{$controller}";

        $instance = new $controller();

        $instance->$method();
    }
}