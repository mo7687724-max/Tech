<?php


class Router
{
    private $routes = [];

    public function get(string $path, array $action): void
    {
        $path = '/' . trim($path, '/');
        $this->routes['GET'][$path] = [
            'action' => $action
        ];
    }

    public function post(string $path, array $action): void
    {
        $path = '/' . trim($path, '/');
        $this->routes['POST'][$path] = [
            'action' => $action
        ];
    }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

        // Extract URI path safely without parse_url failing on colons in directory names (e.g. php-laravel-2-3:15)
        $requestUri = $_SERVER['REQUEST_URI'] ?? '/';
        $path = explode('?', $requestUri, 2)[0];
        if (preg_match('#^https?://#i', $path)) {
            $parsed = parse_url($path, PHP_URL_PATH);
            $path = $parsed !== false ? $parsed : $path;
        }
        $uri = rawurldecode($path);
        
        $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));

        $baseDir = preg_replace('#/public$#', '', $scriptDir);

        // '/php-mvc/PHP-MVC/public'
        // '/php-mvc/PHP-MVC/public/users'
        if($scriptDir !== '' && $scriptDir !== '/' && stripos($uri, $scriptDir) === 0) {
            $uri = substr($uri, strlen($scriptDir));
        }elseif ($baseDir !== '' && $baseDir !== '/' && stripos($uri, $baseDir) === 0) {
            $uri = substr($uri, strlen($baseDir));
        }

        $uri = '/' . trim($uri ,'/');
        //  PHP_MVC/users/

        if (!isset($this->routes[$method][$uri])) {
            // Set 404 status code | កំណត់ HTTP Status 404
            http_response_code(404);
            // Output 404 message | បង្ហាញសារ 404
            echo '404 - Page Not Found';
            return;
        }
        /* 
         *  $this->routes = [
         *     'GET' => [
         *         '/users' => [
         *             'action' => [HomeController::class, 'index'],
         *             
         *         ]
         *     ]
         */

        $route = $this->routes[$method][$uri];
        //  $route = ['GET']['/users']

        [$controller, $methodName] = $route['action'];

        $controllerInstance = new $controller();

        $controllerInstance->$methodName();

    }
}