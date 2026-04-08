-- Create events table and insert standard yearly events for Hamershof
-- Deze SQL code kun je uitvoeren in phpMyAdmin of een andere MySQL client
-- Het maakt de events tabel aan en vult deze met standaard jaarlijkse evenementen

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

-- Insert standard yearly events
INSERT INTO events (title, slug, category, image, event_date, start_time, end_time, location, description, is_free) VALUES
-- Pasen
('Paasbrunch', 'paasbrunch-2024', 'Familie', '/public/assets/leegpandhamershof.png', '2024-04-01', '10:00', '14:00', 'Restaurantgebied', 'Geniet van een heerlijke paasbrunch met speciale paasgerechten en activiteiten voor kinderen.', 0),
('Paaseieren Zoeken', 'paaseieren-zoeken-2024', 'Familie', '/public/assets/leegpandhamershof.png', '2024-04-01', '14:00', '16:00', 'Centrale Plaza', 'Traditioneel paaseieren zoeken voor de kinderen met prijzen voor iedereen.', 1),

-- Meivakantie
('Meivakantie Kinderweek', 'meivakantie-kinderweek-2024', 'Familie', '/public/assets/leegpandhamershof.png', '2024-04-29', '10:00', '17:00', 'Speelplein', 'Speciale activiteiten voor kinderen tijdens de meivakantie met workshops en spelletjes.', 1),
('Meivakantie Familiedag', 'meivakantie-familiedag-2024', 'Familie', '/public/assets/leegpandhamershof.png', '2024-05-04', '11:00', '18:00', 'Hele winkelcentrum', 'Een dag vol familie-activiteiten tijdens de meivakantie.', 1),

-- Hemelvaart
('Hemelvaartsdag Markt', 'hemelvaartsdag-markt-2024', 'Markt', '/public/assets/leegpandhamershof.png', '2024-05-09', '10:00', '17:00', 'Buitenplein', 'Lokale markt met ambachtelijke producten en lekkernijen.', 1),

-- Pinksteren
('Pinksteren Familiefestival', 'pinksteren-familiefestival-2024', 'Familie', '/public/assets/leegpandhamershof.png', '2024-05-19', '12:00', '20:00', 'Centrale Plaza', 'Groot familiefeest met live muziek, workshops en kinderactiviteiten.', 1),

-- Zomervakantie start
('Zomeravond Markt', 'zomeravond-markt-2024', 'Markt', '/public/assets/leegpandhamershof.png', '2024-07-01', '16:00', '21:00', 'Buitenplein', 'Avondmarkt met lokale producten en zomerse sfeer.', 1),

-- Herfstvakantie
('Herfstvakantie Kinderactiviteiten', 'herfstvakantie-kinderactiviteiten-2024', 'Familie', '/public/assets/leegpandhamershof.png', '2024-10-12', '10:00', '16:00', 'Speelplein', 'Herfstactiviteiten voor kinderen met pompoenen snijden en herfstversieringen maken.', 1),

-- Kerst
('Kerstboom Ontbranding', 'kerstboom-ontbranding-2024', 'Familie', '/public/assets/leegpandhamershof.png', '2024-11-30', '17:00', '19:00', 'Centrale Plaza', 'Officiële ontbranding van de grote kerstboom met kerstliederen en warme chocolademelk.', 1),
('Kerstmarkt', 'kerstmarkt-2024', 'Markt', '/public/assets/leegpandhamershof.png', '2024-12-01', '10:00', '20:00', 'Hele winkelcentrum', 'Magische kerstmarkt met handgemaakte cadeaus, lekkernijen en kerstversieringen.', 1),
('Kerstdiner', 'kerstdiner-2024', 'Culinair', '/public/assets/leegpandhamershof.png', '2024-12-25', '18:00', '22:00', 'Restaurantgebied', 'Speciaal kerstmenu met traditionele gerechten en feestelijke ambiance.', 0),
('Oudejaarsavond Feest', 'oudejaarsavond-feest-2024', 'Muziek', '/public/assets/leegpandhamershof.png', '2024-12-31', '20:00', '01:00', 'Centrale Plaza', 'Groot eindejaarsfeest met live muziek, champagne en vuurwerk.', 0),

-- Voorjaarsvakantie 2025
('Voorjaarsvakantie Wintersport', 'voorjaarsvakantie-wintersport-2025', 'Sport', '/public/assets/leegpandhamershof.png', '2025-02-17', '10:00', '17:00', 'Sportplein', 'Wintersport demonstraties en workshops voor jong en oud.', 1),
('Voorjaarsvakantie Carnaval', 'voorjaarsvakantie-carnaval-2025', 'Familie', '/public/assets/leegpandhamershof.png', '2025-02-25', '14:00', '18:00', 'Centrale Plaza', 'Carnavalsoptocht en feestelijke activiteiten voor het hele gezin.', 1),

-- Pasen 2025
('Paasconcerten', 'paasconcerten-2025', 'Muziek', '/public/assets/leegpandhamershof.png', '2025-04-20', '15:00', '17:00', 'Muziekplein', 'Klassieke paasconcerten met lokale muzikanten.', 1),

-- Bevrijdingsdag
('Bevrijdingsdag Picknick', 'bevrijdingsdag-picknick-2025', 'Familie', '/public/assets/leegpandhamershof.png', '2025-05-05', '12:00', '18:00', 'Buitenplein', 'Gezellige picknick met live muziek en activiteiten.', 1),

-- Moederdag
('Moederdag Brunch', 'moederdag-brunch-2025', 'Familie', '/public/assets/leegpandhamershof.png', '2025-05-11', '10:00', '14:00', 'Restaurantgebied', 'Speciale moederdag brunch met bloemen en attenties.', 0),

-- Vaderdag
('Vaderdag BBQ', 'vaderdag-bbq-2025', 'Culinair', '/public/assets/leegpandhamershof.png', '2025-06-15', '12:00', '20:00', 'Buitenplein', 'Gezellige vaderdag BBQ met verschillende soorten vlees en bijgerechten.', 0),

-- Zomer
('Zomeravond Film', 'zomeravond-film-2025', 'Familie', '/public/assets/leegpandhamershof.png', '2025-07-15', '21:00', '23:00', 'Buitenplein', 'Gratis openlucht filmavond met zomerse films voor het hele gezin.', 1),
('Zomer Festival', 'zomer-festival-2025', 'Muziek', '/public/assets/leegpandhamershof.png', '2025-08-10', '14:00', '23:00', 'Centrale Plaza', 'Groot zomerfestival met diverse artiesten en activiteiten.', 0),

-- Prinsjesdag
('Prinsjesdag Oranje Markt', 'prinsjesdag-oranje-markt-2025', 'Markt', '/public/assets/leegpandhamershof.png', '2025-09-15', '10:00', '17:00', 'Buitenplein', 'Oranje gekleurde markt ter ere van Prinsjesdag.', 1);