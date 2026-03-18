<?php
class tehuurController
{
    public function __construct($router)
    {
        $router->get('/tehuur', [$this, 'index']);
    }

    public function index()
    {
        require __DIR__ . '/../public/tehuur.php';
    }
}