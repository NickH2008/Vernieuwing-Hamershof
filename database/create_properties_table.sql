-- Create properties table
CREATE TABLE IF NOT EXISTS properties (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    location VARCHAR(255) NOT NULL,
    size VARCHAR(50) NOT NULL,
    availability VARCHAR(100) NOT NULL,
    status_class VARCHAR(50) NOT NULL COMMENT 'beschikbaar or bijna-beschikbaar',
    image VARCHAR(500),
    summary TEXT,
    description LONGTEXT,
    features JSON,
    details JSON,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert default properties
INSERT INTO properties (title, slug, location, size, availability, status_class, image, summary, description, features, details) VALUES
(
    'Ruime Winkelunit Centrum',
    'ruime-winkelunit-centrum', 
    'Locatie A - Begane Grond',
    '125 m²',
    'Beschikbaar',
    'beschikbaar',
    '/public/assets/leegpandhamershof.png',
    'Moderne winkelruimte in het hart van het winkelcentrum met veel daglicht en uitstekende zichtbaarheid.',
    'Deze ruime winkelunit biedt een royale etalage, een hoge plafonds en een flexibele indeling voor conceptstores, mode of lifestyle-formules.',
    '["Ruime gevel met veel zichtbaarheid", "Directe toegang vanaf de begane grond", "Hoge voetgangersstroom en centrale locatie"]',
    '{"Huurprijs": "Op aanvraag", "Oppervlakte": "125 m²", "Verdieping": "Begane grond", "Parkeerplaatsen": "Inclusief parkeermogelijkheden"}'
),
(
    'Hoekpand met Etalage',
    'hoekpand-met-etalage',
    'Locatie B - Hoofdplein',
    '85 m²',
    'Beschikbaar',
    'beschikbaar',
    '/public/assets/leegpandhamershof.png',
    'Strategisch gelegen hoekpand met extra etalageruimte en hoge voetgangersfrequentie.',
    'Een aantrekkelijke hoeklocatie die perfect is voor visuele concepten, horeca of specialistische retail met veel zichtbaarheid.',
    '["Grote hoeketalage", "Hoge passage van bezoekers", "Veel lichtinval en presentatie mogelijkheden"]',
    '{"Huurprijs": "Op aanvraag", "Oppervlakte": "85 m²", "Verdieping": "Begane grond", "Parkeerplaatsen": "Ruime parkeermogelijkheid nabij"}'
),
(
    'Compacte Retail Space',
    'compacte-retail-space',
    'Locatie C - Zijgang',
    '55 m²',
    'Binnenkort Beschikbaar',
    'bijna-beschikbaar',
    '/public/assets/leegpandhamershof.png',
    'Ideale ruimte voor specialty retail of dienstverlening, volledig gerenoveerd.',
    'Een compact pand met moderne afwerking, uitstekend geschikt voor conceptstores, beauty of dienstverlening met een warme uitstraling.',
    '["Gerenoveerde winkelruimte", "Ideaal voor niche-concepten", "Verhoogde exposure in een drukke zijgang"]',
    '{"Huurprijs": "Op aanvraag", "Oppervlakte": "55 m²", "Verdieping": "Begane grond", "Parkeerplaatsen": "450+ parkeerplaatsen in nabijheid"}'
),
(
    'Premium Winkelruimte',
    'premium-winkelruimte',
    'Locatie D - Entree Gebied',
    '180 m²',
    'Beschikbaar',
    'beschikbaar',
    '/public/assets/leegpandhamershof.png',
    'Grote winkelunit met hoge plafonds en flexibele indeling, perfect voor flagship stores.',
    'Deze premium ruimte biedt een representatieve uitstraling en veel flexibiliteit voor formules die ruimte en impact nodig hebben.',
    '["Hoge plafonds en open zichtlijnen", "Ruime winkelvloer", "Achterruimte geschikt voor opslag of kantoor"]',
    '{"Huurprijs": "Op aanvraag", "Oppervlakte": "180 m²", "Verdieping": "Begane grond", "Parkeerplaatsen": "Gemakkelijke toegang tot entree en parkeergelegenheid"}'
);
