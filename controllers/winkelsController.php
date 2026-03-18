<?php
class winkelsController
{
    public function __construct($router)
    {
        $router->get('/winkels', [$this, 'index']);
    }

    public function index()
    {
        require __DIR__ . '/../public/winkels.php';
    }
}