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
        $router->get('/api/get_winkels', [$this, 'get_winkels']);
        $this->db = new databaseController();
    }

    public function index()
    {
        require __DIR__ . '/../public/winkels.php';
    }
    public function create()
    {
        header("Content-Type: application/json");

        $winkelnaam = $_POST['winkel_name'] ?? '';
        $categorie = $_POST['category'] ?? '';
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

    public function get_winkels()
    {
        header("Content-Type: application/json");

        // Query uitvoeren
        $sql = "SELECT winkel_name, category_id, cover_image FROM winkels";
        $winkels = $this->db->read($sql);


        // JSON terugsturen
        echo json_encode($winkels);
    }

}