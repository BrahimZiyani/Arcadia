<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|nimal/([^/]++)/(?'
                        .'|edit(*:229)'
                        .'|de(?'
                            .'|lete(?'
                                .'|\\-image/([^/]++)(*:265)'
                                .'|(*:273)'
                            .')'
                            .'|tails(*:287)'
                        .')'
                    .')'
                    .'|dmin/(?'
                        .'|comptes\\-rendus/([^/]++)(?'
                            .'|/edit(*:337)'
                            .'|(*:345)'
                        .')'
                        .'|habitats/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:382)'
                                .'|delete\\-image(*:403)'
                            .')'
                            .'|(*:412)'
                        .')'
                        .'|services/([^/]++)/(?'
                            .'|edit(*:446)'
                            .'|delete(?'
                                .'|\\-image/([^/]++)(*:479)'
                                .'|(*:487)'
                            .')'
                        .')'
                        .'|users/([^/]++)(?'
                            .'|/edit(*:519)'
                            .'|(*:527)'
                        .')'
                    .')'
                    .'|vis/([^/]++)/(?'
                        .'|valider(*:560)'
                        .'|supprimer(*:577)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        229 => [[['_route' => 'animal_edit', '_controller' => 'App\\Controller\\AnimalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        265 => [[['_route' => 'animal_remove_image', '_controller' => 'App\\Controller\\AnimalController::removeImage'], ['id', 'image'], ['POST' => 0], null, false, true, null]],
        273 => [[['_route' => 'animal_delete', '_controller' => 'App\\Controller\\AnimalController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        287 => [[['_route' => 'animal_details', '_controller' => 'App\\Controller\\AnimalController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        337 => [[['_route' => 'compte_rendu_edit', '_controller' => 'App\\Controller\\CompteRenduController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        345 => [[['_route' => 'compte_rendu_delete', '_controller' => 'App\\Controller\\CompteRenduController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        382 => [[['_route' => 'habitat_edit', '_controller' => 'App\\Controller\\HabitatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        403 => [[['_route' => 'habitat_delete_image', '_controller' => 'App\\Controller\\HabitatController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        412 => [
            [['_route' => 'habitat_delete', '_controller' => 'App\\Controller\\HabitatController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'habitat_details', '_controller' => 'App\\Controller\\HabitatController::details'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        446 => [[['_route' => 'service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        479 => [[['_route' => 'service_remove_image', '_controller' => 'App\\Controller\\ServiceController::removeImage'], ['id', 'image'], ['POST' => 0], null, false, true, null]],
        487 => [[['_route' => 'service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        519 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        527 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        560 => [[['_route' => 'app_avis_valider', '_controller' => 'App\\Controller\\PageController::validerAvis'], ['id'], ['POST' => 0], null, false, false, null]],
        577 => [
            [['_route' => 'app_avis_supprimer', '_controller' => 'App\\Controller\\PageController::supprimerAvis'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
