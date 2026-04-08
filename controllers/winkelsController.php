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
        $router->get('/api/get_fotos', [$this, 'get_fotos']);
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
        $phone = $_POST['phone'] ?? '';
        $email = $_POST['email'] ?? '';
        $website = $_POST['website'] ?? '';
        $location = $_POST['location'] ?? '';

        if (empty($winkelnaam)) {
            echo json_encode(["status" => "error", "message" => "Winkelnaam ontbreekt"]);
            exit;
        }

        // 1. EERST uploads verwerken
        $uploadDir = __DIR__ . '/../uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $image = '';
        if (!empty($_FILES['cover_image']['name'])) {
            $image = 'uploads/' . basename($_FILES['cover_image']['name']);
            move_uploaded_file($_FILES['cover_image']['tmp_name'], $uploadDir . basename($_FILES['cover_image']['name']));
        }

        $logo = '';
        if (!empty($_FILES['logo']['name'])) {
            $logo = 'uploads/' . basename($_FILES['logo']['name']);
            move_uploaded_file($_FILES['logo']['tmp_name'], $uploadDir . basename($_FILES['logo']['name']));
        }

        // 2. DAN opslaan in database
        $sql = "INSERT INTO winkels (winkel_name, category_id, description, logo, cover_image, phone, email, website, location) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $result = $this->db->save($sql, [$winkelnaam, $categorie, $description, $logo, $image, $phone, $email, $website, $location]);

        $newWinkelId = $this->db->lastInsertId();

        // 3. Foto opslaan in winkel_images
        $result_foto = true;
        if (!empty($image)) {
            $sql = "INSERT INTO winkel_images (winkel_id, image_path) VALUES (?, ?)";
            $result_foto = $this->db->save($sql, [$newWinkelId, $image]);
        }

        if ($result) {
            echo json_encode(["status" => "success", "message" => "Winkel succesvol aangemaakt"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Er is een fout opgetreden bij het opslaan"]);
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

        $sql = "SELECT w.*, GROUP_CONCAT(wi.image_path) as fotos 
            FROM winkels w 
            LEFT JOIN winkel_images wi ON w.winkel_id = wi.winkel_id 
            GROUP BY w.winkel_id";
        $winkels = $this->db->read($sql);

        echo json_encode([
            "status" => "success",
            "data" => $winkels
        ]);
    }

    public function get_fotos()
    {
        header("Content-Type: application/json");

        $sql = "SELECT * FROM winkel_images";
        $fotos = $this->db->read($sql);

        echo json_encode([
            "status" => "success",
            "data" => $fotos
        ]);
    }

}