<?php

class evenementenController
{
    public function __construct($router)
    {
        $router->get('/evenementen', [$this, 'index']);
    }

    public function index()
    {
        include __DIR__ . '/../public/evenementen.php';
    }
}
