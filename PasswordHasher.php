<?php

require 'vendor/autoload.php';

use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory;

// Demande du mot de passe à l'utilisateur
echo "Entrez le mot de passe à hacher : ";
$password = trim(fgets(STDIN));

// Configuration du service de hachage
$factory = new PasswordHasherFactory([
    'common' => ['algorithm' => 'auto'],
]);

// Obtention du hasher
$passwordHasher = $factory->getPasswordHasher('common');

// Hachage du mot de passe
$hashedPassword = $passwordHasher->hash($password);

// Affichage du mot de passe haché
echo "Mot de passe haché : " . $hashedPassword . "\n";
