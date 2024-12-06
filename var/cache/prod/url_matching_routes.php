<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/animal/new' => [[['_route' => 'animal_new', '_controller' => 'App\\Controller\\AnimalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/animal/test-remove' => [[['_route' => 'test_remove_image', '_controller' => 'App\\Controller\\AnimalController::testRemove'], null, ['POST' => 0], null, false, false, null]],
        '/animals' => [[['_route' => 'animal_show', '_controller' => 'App\\Controller\\AnimalController::show'], null, ['GET' => 0], null, false, false, null]],
        '/test-delete' => [[['_route' => 'test_delete', '_controller' => 'App\\Controller\\AnimalController::testDelete'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/comptes-rendus' => [[['_route' => 'compte_rendu_index', '_controller' => 'App\\Controller\\CompteRenduController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/comptes-rendus/new' => [[['_route' => 'compte_rendu_new', '_controller' => 'App\\Controller\\CompteRenduController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/admin/habitats' => [[['_route' => 'habitat_index', '_controller' => 'App\\Controller\\HabitatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/habitats/new' => [[['_route' => 'habitat_new', '_controller' => 'App\\Controller\\HabitatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/delete-endpoint' => [[['_route' => 'delete_endpoint', '_controller' => 'App\\Controller\\PageController::delete'], null, ['POST' => 0], null, false, false, null]],
        '/services' => [[['_route' => 'app_services', '_controller' => 'App\\Controller\\PageController::services'], null, null, null, false, false, null]],
        '/habitats' => [[['_route' => 'app_habitats', '_controller' => 'App\\Controller\\PageController::habitatsShow'], null, null, null, false, false, null]],
        '/avis' => [[['_route' => 'app_avis', '_controller' => 'App\\Controller\\PageController::avis'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\PageController::profile'], null, null, null, false, false, null]],
        '/conditions-utilisation' => [[['_route' => 'app_conditions_utilisation', '_controller' => 'App\\Controller\\PageController::conditionsUtilisation'], null, null, null, false, false, null]],
        '/politique-confidentialite' => [[['_route' => 'app_politique_confidentialite', '_controller' => 'App\\Controller\\PageController::politiqueConfidentialite'], null, null, null, false, false, null]],
        '/schedule/new' => [[['_route' => 'schedule_new', '_controller' => 'App\\Controller\\ScheduleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/services' => [[['_route' => 'service_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/services/new' => [[['_route' => 'service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/users/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login_check' => [[['_route' => 'login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|nimal/([^/]++)/(?'
                        .'|edit(*:34)'
                        .'|de(?'
                            .'|lete(?'
                                .'|\\-image/([^/]++)(*:69)'
                                .'|(*:76)'
                            .')'
                            .'|tails(*:89)'
                        .')'
                    .')'
                    .'|dmin/(?'
                        .'|comptes\\-rendus/([^/]++)(?'
                            .'|/edit(*:138)'
                            .'|(*:146)'
                        .')'
                        .'|habitats/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:183)'
                                .'|delete\\-image(*:204)'
                            .')'
                            .'|(*:213)'
                        .')'
                        .'|services/([^/]++)/(?'
                            .'|edit(*:247)'
                            .'|delete(?'
                                .'|\\-image/([^/]++)(*:280)'
                                .'|(*:288)'
                            .')'
                        .')'
                        .'|users/([^/]++)(?'
                            .'|/edit(*:320)'
                            .'|(*:328)'
                        .')'
                    .')'
                    .'|vis/([^/]++)/(?'
                        .'|valider(*:361)'
                        .'|supprimer(*:378)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'animal_edit', '_controller' => 'App\\Controller\\AnimalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        69 => [[['_route' => 'animal_remove_image', '_controller' => 'App\\Controller\\AnimalController::removeImage'], ['id', 'image'], ['POST' => 0], null, false, true, null]],
        76 => [[['_route' => 'animal_delete', '_controller' => 'App\\Controller\\AnimalController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        89 => [[['_route' => 'animal_details', '_controller' => 'App\\Controller\\AnimalController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        138 => [[['_route' => 'compte_rendu_edit', '_controller' => 'App\\Controller\\CompteRenduController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        146 => [[['_route' => 'compte_rendu_delete', '_controller' => 'App\\Controller\\CompteRenduController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        183 => [[['_route' => 'habitat_edit', '_controller' => 'App\\Controller\\HabitatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        204 => [[['_route' => 'habitat_delete_image', '_controller' => 'App\\Controller\\HabitatController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        213 => [
            [['_route' => 'habitat_delete', '_controller' => 'App\\Controller\\HabitatController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'habitat_details', '_controller' => 'App\\Controller\\HabitatController::details'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        247 => [[['_route' => 'service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        280 => [[['_route' => 'service_remove_image', '_controller' => 'App\\Controller\\ServiceController::removeImage'], ['id', 'image'], ['POST' => 0], null, false, true, null]],
        288 => [[['_route' => 'service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        320 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        328 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        361 => [[['_route' => 'app_avis_valider', '_controller' => 'App\\Controller\\PageController::validerAvis'], ['id'], ['POST' => 0], null, false, false, null]],
        378 => [
            [['_route' => 'app_avis_supprimer', '_controller' => 'App\\Controller\\PageController::supprimerAvis'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
