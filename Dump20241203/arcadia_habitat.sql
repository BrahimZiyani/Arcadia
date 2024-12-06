-- Drop the table if it exists
DROP TABLE IF EXISTS habitat;

-- Create table `habitat`
CREATE TABLE habitat (
  id SERIAL PRIMARY KEY,
  nom VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  images JSONB NOT NULL
);

-- Insert data into `habitat`
INSERT INTO habitat (id, nom, description, images) VALUES
(1, 'Savana', 'La savane est une vaste étendue herbeuse où vivent des animaux tels que les lions et les girafes.', '["Nice-6743abba00cbe.png"]'),
(2, 'Jungle', 'La jungle est un habitat dense et tropical, abritant des animaux comme les tigres et les singes.', '[]'),
(3, 'Marais', 'Le marais est un habitat humide, idéal pour les animaux comme les crocodiles et les amphibiens.', '[]');
