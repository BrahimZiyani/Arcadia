-- PostgreSQL dump
-- Host: 127.0.0.1    Database: arcadia
-- ------------------------------------------------------
-- Converted from MySQL

-- Set client encoding to UTF8
SET client_encoding = 'UTF8';

-- Drop the table if it exists
DROP TABLE IF EXISTS compte_rendu;

-- Create table `compte_rendu`
CREATE TABLE compte_rendu (
  id SERIAL PRIMARY KEY,
  animal_id INTEGER NOT NULL,
  utilisateur_id INTEGER NOT NULL,
  date DATE NOT NULL,
  etat TEXT NOT NULL,
  details TEXT,
  CONSTRAINT fk_animal FOREIGN KEY (animal_id) REFERENCES animal (id),
  CONSTRAINT fk_utilisateur FOREIGN KEY (utilisateur_id) REFERENCES users (id)
);

-- Insert data into `compte_rendu`
INSERT INTO compte_rendu (id, animal_id, utilisateur_id, date, etat, details) VALUES
(1, 1, 1, '2024-10-30', 'En bonne santé', 'Simba est en pleine forme, aucun signe de blessure ou d\'inconfort. Surveillance régulière de sa mobilité et de son comportement recommandée.'),
(2, 2, 1, '2024-10-30', 'En bonne santé', 'Nala montre un comportement énergique. Aucune anomalie de santé détectée.'),
(3, 3, 1, '2024-10-30', 'Observations en cours', 'Kaa semble plus calme que d\'habitude. Observation recommandée pour surveiller son appétit et son niveau d\'activité.'),
(4, 4, 1, '2024-10-30', 'En bonne santé', 'Baloo est actif et curieux. Aucune anomalie de santé relevée.'),
(5, 5, 1, '2024-10-30', 'Léger souci de mobilité', 'Croc semble un peu lent dans ses mouvements, mais pas de signes de douleur. Une inspection plus détaillée est suggérée lors de la prochaine visite vétérinaire.'),
(6, 6, 1, '2024-10-30', 'En bonne santé', 'Hippo est en forme. Son comportement est stable et aucun problème de santé apparent n’est noté.'),
(7, 7, 1, '2024-10-30', 'En bonne santé', 'Zara est dans un état de santé excellent, aucun signe d\'inquiétude. Elle est active et se nourrit normalement.');
