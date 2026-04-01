<?php

class homeController
{
    public function __construct($router)
    {
        $router->get('/home', [$this, 'index']);
        $router->get('/', [$this, 'index']);
    }

    public function index(){
        include __DIR__ . '/../public/home.php';
    }
}