<?php

class agendaController
{
    public function __construct($router)
    {
        $router->get('/agenda', [$this, 'index']);
    }

    public function index(){
        include __DIR__ . '/../public/agenda.php';
    }
}