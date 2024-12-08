<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;

// Configure ton DSN (copie directement depuis Heroku ou ton .env)
$dsn = getenv('MAILER_DSN');

$transport = Transport::fromDsn($dsn);
$mailer = new Mailer($transport);

$email = (new Email())
    ->from('brahimziyani@gmail.com') // Adresse validée dans SendGrid
    ->to('arcadia.zooapp@gmail.com')   // Adresse de destination
    ->subject('Test Symfony Mailer')
    ->text('Ceci est un e-mail de test depuis Symfony Mailer.');

try {
    $mailer->send($email);
    echo "E-mail envoyé avec succès.\n";
} catch (\Exception $e) {
    echo "Erreur : " . $e->getMessage() . "\n";
}
