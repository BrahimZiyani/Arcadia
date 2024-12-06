

-- Drop the table if it exists
DROP TABLE IF EXISTS users;

-- Create table `users`
CREATE TABLE users (
  id SERIAL PRIMARY KEY,
  email VARCHAR(180) NOT NULL UNIQUE,
  nom VARCHAR(100) NOT NULL,
  prenom VARCHAR(100) NOT NULL,
  roles JSON NOT NULL,
  password VARCHAR(255) NOT NULL
);

-- Insert data into `users`
INSERT INTO users (id, email, nom, prenom, roles, password) VALUES
(1, 'admin@example.com', 'Jean', 'LaPatte', '["ROLE_ADMIN"]', '$2y$13$n1eaO7CTqa96NU2xKgSasuRWZ74nNn4ShWX3sM.JtFENiuG9qweoy'),
(2, 'sophie.renard@example.com', 'Sophie', 'Renard', '["ROLE_VETERINAIRE"]', '$2y$13$Y/DJLKrtv9S2D8Xq/5BJzuMbskZID6PwGTm0/cdenOAexijRCMeiK'),
(4, 'justin.emeu@example.com', 'Emeu', 'Justin', '["ROLE_EMPLOYE"]', '$2y$13$myhOr5Mz4leOqlEu4Wj7su0CIbXdTOdyjVgXWALhqso2aJdsbPdoq');
