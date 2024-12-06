
-- Drop the table if it exists
DROP TABLE IF EXISTS avis;

-- Create table `avis`
CREATE TABLE avis (
  id SERIAL PRIMARY KEY,
  prenom VARCHAR(255) NOT NULL,
  contenu TEXT NOT NULL,
  valide BOOLEAN NOT NULL,
  date_visite DATE NOT NULL
);

-- Insert data into `avis`
INSERT INTO avis (id, prenom, contenu, valide, date_visite) VALUES
(1, 'Joel', 'Chouette Zoo !', true, '2024-11-09'),
(2, 'Christophe', 'Une visite qui a du chien !', true, '2024-11-12'),
(3, 'Elie', 'Un zoo qui fait rugir de plaisir !', true, '2024-11-21');
