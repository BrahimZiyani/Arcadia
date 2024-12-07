<?php

use App\Kernel;
use Symfony\Component\Dotenv\Dotenv;

if (php_sapi_name() === 'cli-server') {
    $_SERVER['SCRIPT_NAME'] = '/index.php';
}


if ($_SERVER['APP_ENV'] !== 'prod') {
    // Suppression temporaire pour identifier le problème
    // (new Dotenv())->bootEnv(dirname(__DIR__) . '/.env');
}



require_once dirname(__DIR__) . '/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
