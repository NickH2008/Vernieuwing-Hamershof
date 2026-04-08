<?php

class tehuurController
{
    private $tehuurService;

    public function __construct($router)
    {
        $router->get('/tehuur', [$this, 'index']);
        $router->get('/tehuur/{slug}', [$this, 'showProperty']);
        $router->post('/tehuur/create', [$this, 'createRental']);
        $this->tehuurService = new tehuurService();
    }

    /**
     * Display the rental page
     */
    public function index()
    {
        $properties = $this->getProperties();
        require __DIR__ . '/../public/tehuur.php';
    }

    /**
     * Handle rental request creation
     */
    public function createRental()
    {
        // Set JSON response header
        header("Content-Type: application/json");

        try {
            // Get the rental request data from service
            $result = $this->tehuurService->createRentalRequest($_POST, $_FILES);

            // Return JSON response
            echo json_encode($result);

        } catch (Exception $e) {
            // Handle unexpected errors
            error_log("Controller error: " . $e->getMessage());
            echo json_encode([
                "status" => "error",
                "message" => "Er is een onverwachte fout opgetreden. Probeer het opnieuw."
            ]);
        }
    }

    /**
     * Show a single property detail page.
     */
    public function showProperty($slug)
    {
        $pand = $this->getPropertyBySlug($slug);

        if (!$pand) {
            http_response_code(404);
            require __DIR__ . '/../public/404.php';
            return;
        }

        // Parse JSON fields
        $pand['features'] = json_decode($pand['features'], true) ?? [];
        $pand['details'] = json_decode($pand['details'], true) ?? [];
        $pand['statusClass'] = $pand['status_class'];
        $pand['availability'] = $pand['availability'];

        $selectedShop = $pand['title'];
        require __DIR__ . '/../public/pand_detail.php';
    }

    /**
     * Get all properties from database
     */
    private function getProperties()
    {
        $sql = "SELECT * FROM properties ORDER BY id ASC";
        $results = $this->tehuurService->db->read($sql);
        
        if (!$results) {
            return [];
        }

        $properties = [];
        foreach ($results as $row) {
            $slug = $row['slug'];
            $properties[$slug] = [
                'title' => $row['title'],
                'location' => $row['location'],
                'size' => $row['size'],
                'availability' => $row['availability'],
                'statusClass' => $row['status_class'],
                'image' => $row['image'],
                'summary' => $row['summary'],
                'description' => $row['description'],
                'features' => json_decode($row['features'], true) ?? [],
                'details' => json_decode($row['details'], true) ?? [],
            ];
        }

        return $properties;
    }

    /**
     * Get a single property by slug from database
     */
    private function getPropertyBySlug($slug)
    {
        $sql = "SELECT * FROM properties WHERE slug = ?";
        $result = $this->tehuurService->db->read($sql, [$slug]);
        return $result ? $result[0] : null;
    }

    /**
     * Get all properties for select dropdown
     */
    public function getAllPropertiesForSelect()
    {
        $sql = "SELECT id, title FROM properties ORDER BY id ASC";
        return $this->tehuurService->db->read($sql);
    }
}