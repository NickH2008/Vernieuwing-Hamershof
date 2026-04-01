<?php
class tehuurController
{
    private $db;

    public function __construct($router)
    {
        $router->get('/tehuur', [$this, 'index']);
        $router->post('/api/create_rental', [$this, 'createRental']);
        $this->db = new databaseController();
    }

    public function index()
    {
        require __DIR__ . '/../public/tehuur.php';
    }

    public function createRental()
    {
        header("Content-Type: application/json");

        $contactName = $_POST['contact_name'] ?? '';
        $contactEmail = $_POST['contact_email'] ?? '';
        $contactPhone = $_POST['contact_phone'] ?? '';
        $shopName = $_POST['shop_name'] ?? '';
        $shopCategory = $_POST['shop_category'] ?? '';
        $shopDescription = $_POST['shop_description'] ?? '';
        $preferredSize = $_POST['preferred_size'] ?? null;
        $preferredLocation = $_POST['preferred_location'] ?? '';
        $startDate = $_POST['start_date'] ?? null;
        $termsAccepted = isset($_POST['terms']) ? 1 : 0;

        // Validate required fields
        if (empty($contactName) || empty($contactEmail) || empty($contactPhone) || empty($shopName) || empty($shopCategory)) {
            echo json_encode([
                "status" => "error",
                "message" => "Vul alle verplichte velden in (*)"
            ]);
            exit;
        }

        // Validate email format
        if (!filter_var($contactEmail, FILTER_VALIDATE_EMAIL)) {
            echo json_encode([
                "status" => "error",
                "message" => "Voer een geldig e-mailadres in"
            ]);
            exit;
        }

        // Check if terms are accepted
        if (!$termsAccepted) {
            echo json_encode([
                "status" => "error",
                "message" => "U moet akkoord gaan met de algemene voorwaarden"
            ]);
            exit;
        }

        // Handle file uploads
        $businessPlanPath = '';
        $logoPath = '';

        // Create uploads directory if it doesn't exist
        $uploadDir = __DIR__ . '/../uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Handle business plan upload
        if (isset($_FILES['business_plan']) && $_FILES['business_plan']['error'] === UPLOAD_ERR_OK) {
            $businessPlanName = basename($_FILES['business_plan']['name']);
            $businessPlanPath = $uploadDir . 'business_plan_' . time() . '_' . $businessPlanName;
            move_uploaded_file($_FILES['business_plan']['tmp_name'], $businessPlanPath);
            $businessPlanPath = str_replace(__DIR__ . '/../', '', $businessPlanPath); // Store relative path
        }

        // Handle logo upload
        if (isset($_FILES['logo']) && $_FILES['logo']['error'] === UPLOAD_ERR_OK) {
            $logoName = basename($_FILES['logo']['name']);
            $logoPath = $uploadDir . 'logo_' . time() . '_' . $logoName;
            move_uploaded_file($_FILES['logo']['tmp_name'], $logoPath);
            $logoPath = str_replace(__DIR__ . '/../', '', $logoPath); // Store relative path
        }

        // Insert rental request into database
        $sql = "INSERT INTO rental_requests (
            contact_name, contact_email, contact_phone,
            shop_name, shop_category, shop_description,
            preferred_size, preferred_location, start_date,
            business_plan_path, logo_path, terms_accepted,
            created_at
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";

        $params = [
            $contactName, $contactEmail, $contactPhone,
            $shopName, $shopCategory, $shopDescription,
            $preferredSize, $preferredLocation, $startDate,
            $businessPlanPath, $logoPath, $termsAccepted
        ];

        $result = $this->db->save($sql, $params);

        if ($result) {
            echo json_encode([
                "status" => "success",
                "message" => "Uw huurverzoek is succesvol verzonden. Wij nemen zo snel mogelijk contact met u op."
            ]);
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "Er is een fout opgetreden bij het opslaan van uw verzoek. Probeer het opnieuw."
            ]);
        }
    }
}