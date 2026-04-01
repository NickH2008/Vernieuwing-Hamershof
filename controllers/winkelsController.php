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
        echo "Debug: winkelsController index called\n";
        require __DIR__ . '/../public/winkels.php';
    }
    public function create()
    {
        header("Content-Type: application/json");
        echo "Debug: create called\n";

        $winkelnaam = $_POST['winkel_name'] ?? '';
        $categorie = 1;
        $image = $_FILES['cover_image']['name'] ?? '';
        echo "Debug: winkelnaam=$winkelnaam, categorie=$categorie, image=$image\n";

        if (empty($winkelnaam)) {
            echo json_encode([
                "status" => "error",
                "message" => "Winkelnaam ontbreekt"
            ]);
            exit;
        }
        echo "Debug: proceeding to insert\n";

        $sql = "INSERT INTO winkels (winkel_name, category_id) VALUES (?, ?)";
        $result = $this->db->save($sql, [$winkelnaam, $categorie]);
        echo "Debug: save result=" . ($result ? 'true' : 'false') . "\n";

        echo json_encode([
            "status" => "success",
            "message" => "Winkel succesvol aangemaakt",
        ]);
    }

    public function get_winkels()
    {
        header("Content-Type: application/json");

        $sql = "SELECT winkel_name, category_id FROM winkels";
        $winkels = $this->db->read($sql);

        echo json_encode([
            "status" => "success",
            "data" => $winkels
        ]);
    }

}