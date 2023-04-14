<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/colis' => [[['_route' => 'app_colis_index', '_controller' => 'App\\Controller\\ColisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/colis/new' => [[['_route' => 'app_colis_new', '_controller' => 'App\\Controller\\ColisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/competition' => [[['_route' => 'app_competition_index', '_controller' => 'App\\Controller\\CompetitionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/competition/new' => [[['_route' => 'app_competition_new', '_controller' => 'App\\Controller\\CompetitionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/gifts' => [[['_route' => 'app_gifts_index', '_controller' => 'App\\Controller\\GiftsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/gifts/new' => [[['_route' => 'app_gifts_new', '_controller' => 'App\\Controller\\GiftsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/message' => [[['_route' => 'app_message_index', '_controller' => 'App\\Controller\\MessageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/message/new' => [[['_route' => 'app_message_new', '_controller' => 'App\\Controller\\MessageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/validation' => [[['_route' => 'app_validation_index', '_controller' => 'App\\Controller\\ValidationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/validation/new' => [[['_route' => 'app_validation_new', '_controller' => 'App\\Controller\\ValidationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vehicule' => [[['_route' => 'app_vehicule_index', '_controller' => 'App\\Controller\\VehiculeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vehicule/new' => [[['_route' => 'app_vehicule_new', '_controller' => 'App\\Controller\\VehiculeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/co(?'
                    .'|lis/([^/]++)(?'
                        .'|(*:28)'
                        .'|/edit(*:40)'
                        .'|(*:47)'
                    .')'
                    .'|mpetition/([^/]++)(?'
                        .'|(*:76)'
                        .'|/edit(*:88)'
                        .'|(*:95)'
                    .')'
                .')'
                .'|/gifts/([^/]++)(?'
                    .'|(*:122)'
                    .'|/edit(*:135)'
                    .'|(*:143)'
                .')'
                .'|/message/([^/]++)(?'
                    .'|(*:172)'
                    .'|/edit(*:185)'
                    .'|(*:193)'
                .')'
                .'|/reservation/([^/]++)(?'
                    .'|(*:226)'
                    .'|/edit(*:239)'
                    .'|(*:247)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:273)'
                    .'|/edit(*:286)'
                    .'|(*:294)'
                .')'
                .'|/v(?'
                    .'|alidation/([^/]++)(?'
                        .'|(*:329)'
                        .'|/edit(*:342)'
                        .'|(*:350)'
                    .')'
                    .'|ehicule/([^/]++)(?'
                        .'|(*:378)'
                        .'|/edit(*:391)'
                        .'|(*:399)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:440)'
                    .'|wdt/([^/]++)(*:460)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:506)'
                            .'|router(*:520)'
                            .'|exception(?'
                                .'|(*:540)'
                                .'|\\.css(*:553)'
                            .')'
                        .')'
                        .'|(*:563)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'app_colis_show', '_controller' => 'App\\Controller\\ColisController::show'], ['idColis'], ['GET' => 0], null, false, true, null]],
        40 => [[['_route' => 'app_colis_edit', '_controller' => 'App\\Controller\\ColisController::edit'], ['idColis'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        47 => [[['_route' => 'app_colis_delete', '_controller' => 'App\\Controller\\ColisController::delete'], ['idColis'], ['POST' => 0], null, false, true, null]],
        76 => [[['_route' => 'app_competition_show', '_controller' => 'App\\Controller\\CompetitionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        88 => [[['_route' => 'app_competition_edit', '_controller' => 'App\\Controller\\CompetitionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        95 => [[['_route' => 'app_competition_delete', '_controller' => 'App\\Controller\\CompetitionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        122 => [[['_route' => 'app_gifts_show', '_controller' => 'App\\Controller\\GiftsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        135 => [[['_route' => 'app_gifts_edit', '_controller' => 'App\\Controller\\GiftsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        143 => [[['_route' => 'app_gifts_delete', '_controller' => 'App\\Controller\\GiftsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        172 => [[['_route' => 'app_message_show', '_controller' => 'App\\Controller\\MessageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        185 => [[['_route' => 'app_message_edit', '_controller' => 'App\\Controller\\MessageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        193 => [[['_route' => 'app_message_delete', '_controller' => 'App\\Controller\\MessageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        226 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        239 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        247 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        273 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        286 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        294 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        329 => [[['_route' => 'app_validation_show', '_controller' => 'App\\Controller\\ValidationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        342 => [[['_route' => 'app_validation_edit', '_controller' => 'App\\Controller\\ValidationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        350 => [[['_route' => 'app_validation_delete', '_controller' => 'App\\Controller\\ValidationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        378 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['idV'], ['GET' => 0], null, false, true, null]],
        391 => [[['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['idV'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        399 => [[['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['idV'], ['POST' => 0], null, false, true, null]],
        440 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        460 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        506 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        520 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        540 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        553 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        563 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
