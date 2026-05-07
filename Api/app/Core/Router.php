<?php

namespace App\Core;

class Router
{
    private $routes = [];

    private function addRoute($method, $route, $action)
    {
        $this->routes[$method][$route] = $action;
    }
    public function get($route, $action)
    {
        $this->addRoute('GET', $route, $action);
    }

        public function post($route, $action)
    {
        $this->addRoute('POST', $route, $action);
    }

    public function delete($route, $action)
    {
        $this->addRoute('DELETE', $route, $action);
    }

    public function put($route, $action)
    {
        $this->addRoute('PUT', $route, $action);
    }

    public function dispatch($method, $uri)
    {
        $uri = parse_url($uri, PHP_URL_PATH);

        if (!isset($this->routes[$method])) {
            echo json_encode([
                "success" => false,
                "message" => "Rota não encontrada"
            ]);
            return;
        }
        foreach ($this->routes[$method] as $route => $action) {
            $pattern = preg_replace('/\{id\}/', '([0-9]+)', $route);

            $pattern = "#^" . $pattern . "$#";

            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches);

                [$controller, $methodAction] = explode('@', $action);

                $controller = "App\\Controllers\\{$controller}";

                $controllerInstance = new $controller();

                call_user_func_array(
                    [$controllerInstance, $methodAction],
                    $matches
                );
                return;    
            }
        }
        echo json_encode([
            "success" => false,
            "message" => "Rota não encontrada"
        ]);
    }   
}