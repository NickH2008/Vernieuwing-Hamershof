<?php
class Router
{
    private $routes = [];

    public function get($uri, $callback)
    {
        $this->routes['GET'][$uri] = $callback;
    }

    public function post($uri, $callback)
    {
        $this->routes['POST'][$uri] = $callback;
    }

    public function dispatch()
    {
        ob_start();
        $basePath = '/';
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (strpos($uri, $basePath) === 0) {
            $uri = substr($uri, strlen($basePath));
        }

        $uri = rtrim($uri, '/') ?: '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if (isset($this->routes[$method][$uri])) {
            call_user_func($this->routes[$method][$uri]);
            return;
        }


        foreach ($this->routes[$method] ?? [] as $route => $callback) {
            // Convert route with {param} to regex
            $pattern = preg_replace('/\{(\w+)\}/', '([^/]+)', $route);
            $pattern = "@^" . rtrim($pattern, '/') . "$@";

            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches); // Remove full match
                call_user_func_array($callback, $matches);
                return;
            }
        }

        http_response_code(404);
        if (str_starts_with($uri, '/admin')) {
            require './admin/admin404.php';
        } else {
            require './public/404.php';
        }
        ob_end_flush();
    }

}
