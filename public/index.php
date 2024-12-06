<?php

use App\Kernel;
use Symfony\Component\Dotenv\Dotenv;

if (php_sapi_name() === 'cli-server') {
    $_SERVER['SCRIPT_NAME'] = '/index.php';
}

// Charger uniquement les variables d'environnement si on n'est PAS en production
if ($_SERVER['APP_ENV'] !== 'prod') {
    (new Dotenv())->bootEnv(dirname(__DIR__) . '/.env');
}

require_once dirname(__DIR__) . '/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
