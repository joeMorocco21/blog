<?php

namespace Router;

use App\Exception\NotFoundException;

class Router{
    public $url;
    public $routes = [];
    public function __construct($url)
    {
        //retirer les slach en debue et en fin du url eve trim
        $this->url = trim($url, '/');
    }
    public function get(string $path, string $action)
    {
        $this->routes['GET'][]= new Route($path, $action);
    }
    public function post(string $path, string $action)
    {
        $this->routes['POST'][]= new Route($path, $action);
    }
    public function run()
    {
        //recuperer post ou get avec $_SERVER dans un tableau $route[];
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route)
        {   //verfication si la route et matche avec l'url
            if ($route->matches($this->url)){
                return $route->execute();
            }
        }
        throw new NotFoundException("La page demander Introuvable");
    }

}