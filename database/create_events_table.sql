-- Create events table
CREATE TABLE IF NOT EXISTS events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    category VARCHAR(100) NOT NULL,
    image VARCHAR(500) NOT NULL,
    event_date DATE NOT NULL,
    start_time VARCHAR(20) NOT NULL,
    end_time VARCHAR(20) NOT NULL,
    location VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    is_free TINYINT(1) NOT NULL DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Default events
INSERT INTO events (title, slug, category, image, event_date, start_time, end_time, location, description, is_free) VALUES
('Lente Fashion Show', 'lente-fashion-show', 'Mode', '/public/assets/leegpandhamershof.png', '2024-03-12', '14:00', '17:00', 'Centrale Plaza', 'Bekijk de nieuwste lentetrends tijdens onze exclusieve fashion show met lokale ontwerpers.', 1),
('Kinderactiviteiten Dag', 'kinderactiviteiten-dag', 'Familie', '/public/assets/leegpandhamershof.png', '2024-03-18', '10:00', '15:00', 'Bij de fontein', 'Een dag vol pret voor de hele familie met workshops, spelletjes en entertainment.', 1),
('Food Festival', 'food-festival', 'Culinair', '/public/assets/leegpandhamershof.png', '2024-03-25', '12:00', '20:00', 'Food Court', 'Proef heerlijke gerechten van onze restaurants en ontdek nieuwe smaken.', 1),
('Live Muziek Avond', 'live-muziek-avond', 'Muziek', '/public/assets/leegpandhamershof.png', '2024-04-05', '19:00', '22:00', 'Centrale Plaza', 'Geniet van live optredens van lokale bands en artiesten.', 1),
('Paasmarkt', 'paasmarkt', 'Markt', '/public/assets/leegpandhamershof.png', '2024-04-10', '10:00', '17:00', 'Hele winkelcentrum', 'Speciale paasmarkt met lokale ambachtslieden en producten.', 1),
('Beauty & Wellness Dag', 'beauty-wellness-dag', 'Wellness', '/public/assets/leegpandhamershof.png', '2024-04-20', '11:00', '18:00', 'Eerste verdieping', 'Een dag gewijd aan schoonheid en welzijn met workshops en behandelingen.', 1);
