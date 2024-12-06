

-- Drop the table if it exists
DROP TABLE IF EXISTS animal;

-- Create table `animal`
CREATE TABLE animal (
  id SERIAL PRIMARY KEY,
  habitat_id INTEGER NOT NULL,
  nom VARCHAR(255) NOT NULL,
  race VARCHAR(255) NOT NULL,
  etat_de_sante TEXT NOT NULL,
  alimentation TEXT NOT NULL,
  images JSONB NOT NULL,
  visites INTEGER NOT NULL DEFAULT 0,
  CONSTRAINT fk_habitat FOREIGN KEY (habitat_id) REFERENCES habitat (id)
);

-- Insert data into `animal`
INSERT INTO animal (id, habitat_id, nom, race, etat_de_sante, alimentation, images, visites) VALUES
(1, 1, 'Simba', 'Lion', 'Très Bon', 'Viande', '["animation-zoo-mervent-674f02afe016d.jpg"]', 10),
(2, 1, 'Nala', 'Lionne', 'Très bon', 'Viande', '[]', 0),
(3, 2, 'Kaa', 'Serpent', 'Bon', 'Rongeurs', '[]', 0),
(4, 2, 'Baloo', 'Ours brun', 'Bon', 'Baies, Miel', '[]', 0),
(5, 3, 'Croc', 'Crocodile', 'Bon', 'Poisson', '[]', 0),
(6, 3, 'Hippo', 'Hippopotame', 'Très bon', 'Herbes', '[]', 0),
(7, 1, 'Zara', 'Girafe', 'Bon', 'Feuilles', '[]', 0),
(8, 3, 'Gustave', 'Alligator', 'Excellent', 'Viande', '[]', 0);
