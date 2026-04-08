<?php

class agendaController
{
    private $agendaService;

    public function __construct($router)
    {
        $this->agendaService = new agendaService();
        $router->get('/agenda', [$this, 'index']);
        $router->get('/api/agenda', [$this, 'agendaApi']);
    }

    public function index()
    {
        include __DIR__ . '/../public/agenda.php';
    }

    public function agendaApi()
    {
        header("Content-Type: application/json");

        $agenda = $this->agendaService->getAgenda();
        if ($agenda) {
            $data = [
                "status" => "success",
                "data" => $agenda
            ];
            echo json_encode($data);
            return;
        }
        echo json_encode([
            "status" => "error",
            "message" => "Geen agenda items gevonden",
            'data' => $agenda
        ]);
    }
}