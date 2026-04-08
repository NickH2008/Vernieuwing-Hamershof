<?php

class contactController
{
    public function __construct($router)
    {
        $router->get('/contact', [$this, 'index']);
    }

    public function index(){
        include __DIR__ . '/../public/contact.php';
    }
}