<?php

use App\Kernel;
use Symfony\Component\Dotenv\Dotenv;

$_SERVER['APP_ENV'] = 'prod';
$_SERVER['APP_DEBUG'] = false;

if (php_sapi_name() === 'cli-server') {
    $_SERVER['SCRIPT_NAME'] = '/index.php';
}

if ($_SERVER['APP_ENV'] !== 'prod') {
    // Décommentez la ligne suivante pour charger les variables d'environnement en mode non-production
    // (new Dotenv())->bootEnv(dirname(__DIR__) . '/.env');
}

require_once dirname(__DIR__) . '/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
