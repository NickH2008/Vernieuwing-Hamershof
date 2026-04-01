<?php
class winkelsController
{
    private $db;
    public function __construct($router)
    {
        $router->get('/winkels', [$this, 'index']);
        $router->post('/winkels/create', [$this, 'create']);
        $router->get('/admin', [$this, 'index']);
        $router->post('/admin/create', [$this, 'create']);
        $this->db=new databaseController();
    }

    public function index()
    {
        require __DIR__ . '/../public/winkels.php';
    }
    public function create()
    {
        header("Content-Type: application/json");

        $winkelnaam = $_POST['winkelnaam'] ?? '';
        $categorie = $_POST['categorie'] ?? '';
        $image = $_FILES['picture']['name'] ?? '';

        if (empty($winkelnaam)) {
            echo json_encode([
                "status" => "error",
                "message" => "Winkelnaam ontbreekt"
            ]);
            exit;
        }

        $sql = "INSERT INTO winkels (winkelnaam, categorie, image) VALUES (?, ?, ?)";
        $this->db->save($sql, [$winkelnaam, $categorie, $image]);

        echo json_encode([
            "status" => "success",
            "message" => "Winkel succesvol aangemaakt"
        ]);
    }

}