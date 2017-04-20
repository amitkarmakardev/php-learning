<?php

class Router{
    
    protected $routes = [];

    public function define($routes){
        $this->routes = $routes;
    }

    public static function load($router_file){
        $router = new static;
        require $router_file;
        return $router;
    }

    public function direct($uri){
        if (array_key_exists($uri, $this->routes)){
            return $this->routes[$uri];
        }
        throw new Exception('Could not find the route');
    }
}