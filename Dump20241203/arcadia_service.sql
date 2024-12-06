

-- Drop the table if it exists
DROP TABLE IF EXISTS service;

-- Create table `service`
CREATE TABLE service (
  id SERIAL PRIMARY KEY,
  nom VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  images JSON NOT NULL
);

-- Insert data into `service`
INSERT INTO service (id, nom, description, images) VALUES
(1, 'Tour en petit train', 'Parcourez le zoo confortablement à bord de notre petit train et profitez d\'une vue imprenable sur les habitats et les animaux.', '["Nice-674a2917624c2.png"]'),
(3, 'Restauration', 'Profitez de nos espaces de restauration offrant des plats variés et adaptés à tous les goûts. Des options végétariennes et véganes sont également disponibles.', '["Nice-674b178db8990.png"]'),
(4, 'Visite guidée des habitats', 'Découvrez les habitats du parc avec nos guides experts qui partageront des informations passionnantes sur nos animaux et leur environnement.', '["Nice-674b17b1ae94d.png"]');
