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
        $properties = $this->getProperties();
        $pand = $properties[$slug] ?? null;

        if (!$pand) {
            http_response_code(404);
            require __DIR__ . '/../public/404.php';
            return;
        }

        $selectedShop = $pand['title'];
        require __DIR__ . '/../public/pand_detail.php';
    }

    private function getProperties()
    {
        return [
            'ruime-winkelunit-centrum' => [
                'title' => 'Ruime Winkelunit Centrum',
                'location' => 'Locatie A - Begane Grond',
                'size' => '125 m²',
                'availability' => 'Beschikbaar',
                'statusClass' => 'beschikbaar',
                'image' => '/public/assets/leegpandhamershof.png',
                'summary' => 'Moderne winkelruimte in het hart van het winkelcentrum met veel daglicht en uitstekende zichtbaarheid.',
                'description' => 'Deze ruime winkelunit biedt een royale etalage, een hoge plafonds en een flexibele indeling voor conceptstores, mode of lifestyle-formules.',
                'features' => [
                    'Ruime gevel met veel zichtbaarheid',
                    'Directe toegang vanaf de begane grond',
                    'Hoge voetgangersstroom en centrale locatie',
                ],
                'details' => [
                    'Huurprijs' => 'Op aanvraag',
                    'Oppervlakte' => '125 m²',
                    'Verdieping' => 'Begane grond',
                    'Parkeerplaatsen' => 'Inclusief parkeermogelijkheden',
                ],
            ],
            'hoekpand-met-etalage' => [
                'title' => 'Hoekpand met Etalage',
                'location' => 'Locatie B - Hoofdplein',
                'size' => '85 m²',
                'availability' => 'Beschikbaar',
                'statusClass' => 'beschikbaar',
                'image' => '/public/assets/leegpandhamershof.png',
                'summary' => 'Strategisch gelegen hoekpand met extra etalageruimte en hoge voetgangersfrequentie.',
                'description' => 'Een aantrekkelijke hoeklocatie die perfect is voor visuele concepten, horeca of specialistische retail met veel zichtbaarheid.',
                'features' => [
                    'Grote hoeketalage',
                    'Hoge passage van bezoekers',
                    'Veel lichtinval en presentatie mogelijkheden',
                ],
                'details' => [
                    'Huurprijs' => 'Op aanvraag',
                    'Oppervlakte' => '85 m²',
                    'Verdieping' => 'Begane grond',
                    'Parkeerplaatsen' => 'Ruime parkeermogelijkheid nabij',
                ],
            ],
            'compacte-retail-space' => [
                'title' => 'Compacte Retail Space',
                'location' => 'Locatie C - Zijgang',
                'size' => '55 m²',
                'availability' => 'Binnenkort Beschikbaar',
                'statusClass' => 'bijna-beschikbaar',
                'image' => '/public/assets/leegpandhamershof.png',
                'summary' => 'Ideale ruimte voor specialty retail of dienstverlening, volledig gerenoveerd.',
                'description' => 'Een compact pand met moderne afwerking, uitstekend geschikt voor conceptstores, beauty of dienstverlening met een warme uitstraling.',
                'features' => [
                    'Gerenoveerde winkelruimte',
                    'Ideaal voor niche-concepten',
                    'Verhoogde exposure in een drukke zijgang',
                ],
                'details' => [
                    'Huurprijs' => 'Op aanvraag',
                    'Oppervlakte' => '55 m²',
                    'Verdieping' => 'Begane grond',
                    'Parkeerplaatsen' => '450+ parkeerplaatsen in nabijheid',
                ],
            ],
            'premium-winkelruimte' => [
                'title' => 'Premium Winkelruimte',
                'location' => 'Locatie D - Entree Gebied',
                'size' => '180 m²',
                'availability' => 'Beschikbaar',
                'statusClass' => 'beschikbaar',
                'image' => '/public/assets/leegpandhamershof.png',
                'summary' => 'Grote winkelunit met hoge plafonds en flexibele indeling, perfect voor flagship stores.',
                'description' => 'Deze premium ruimte biedt een representatieve uitstraling en veel flexibiliteit voor formules die ruimte en impact nodig hebben.',
                'features' => [
                    'Hoge plafonds en open zichtlijnen',
                    'Ruime winkelvloer',
                    'Achterruimte geschikt voor opslag of kantoor',
                ],
                'details' => [
                    'Huurprijs' => 'Op aanvraag',
                    'Oppervlakte' => '180 m²',
                    'Verdieping' => 'Begane grond',
                    'Parkeerplaatsen' => 'Gemakkelijke toegang tot entree en parkeergelegenheid',
                ],
            ],
        ];
    }
}