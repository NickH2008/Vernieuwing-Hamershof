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
        $router->get('/api/get_categories', [$this, 'get_categories']);
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

        $winkelnaam = $_POST['winkel_name'] ?? '';
        $categorie = $_POST['category_id'] ?? '';
        $description = $_POST['description'] ?? '';
        $logo = $_POST['logo'] ?? '';
        $image = $_FILES['picture']['name'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $email = $_POST['email'] ?? '';
        $website = $_POST['website'] ?? '';
        $location = $_POST['location'] ?? '';

        if (empty($winkelnaam)) {
            echo json_encode([
                "status" => "error",
                "message" => "Winkelnaam ontbreekt"
            ]);
            exit;
        }

        $sql = "INSERT INTO winkels (winkel_name, category_id, description, logo, cover_image, phone, email, website, location) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $result = $this->db->save($sql, [$winkelnaam, $categorie, $description, $logo, $image, $phone, $email, $website, $location]);

        if ($result) {
            echo json_encode([
                "status" => "success",
                "message" => "Winkel succesvol aangemaakt"
            ]);
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "Er is een fout opgetreden bij het opslaan"
            ]);
        }
    }

    public function get_categories()
    {
        header("Content-Type: application/json");

        $sql = "SELECT category_id, category_name FROM winkel_categories";
        $categories = $this->db->read($sql);

        echo json_encode([
            "status" => "success",
            "data" => $categories
        ]);
    }

    public function get_winkels()
    {
        header("Content-Type: application/json");

        $sql = "SELECT * FROM winkels";
        $winkels = $this->db->read($sql);

        echo json_encode([
            "status" => "success",
            "data" => $winkels
        ]);
    }

}