<?php

class tehuurController
{
    private $tehuurService;

    public function __construct($router)
    {
        $router->get('/tehuur', [$this, 'index']);
        $router->post('/tehuur/create', [$this, 'createRental']);
        $this->tehuurService = new tehuurService();
    }

    /**
     * Display the rental page
     */
    public function index()
    {
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
}