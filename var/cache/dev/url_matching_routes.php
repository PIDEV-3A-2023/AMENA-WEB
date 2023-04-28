<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/admin/colis' => [[['_route' => 'app_admin_colis_index', '_controller' => 'App\\Controller\\AdminColisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/colis/new' => [[['_route' => 'app_admin_colis_new', '_controller' => 'App\\Controller\\AdminColisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/new' => [[['_route' => 'app_admin_new', '_controller' => 'App\\Controller\\AdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/annonces' => [[['_route' => 'app_annonces_index', '_controller' => 'App\\Controller\\AnnoncesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/annonces/new' => [[['_route' => 'app_annonces_new', '_controller' => 'App\\Controller\\AnnoncesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/colis' => [[['_route' => 'app_colis_index', '_controller' => 'App\\Controller\\ColisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/colis/new' => [[['_route' => 'app_colis_new', '_controller' => 'App\\Controller\\ColisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/competition' => [[['_route' => 'app_competition_index', '_controller' => 'App\\Controller\\CompetitionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/competition/new' => [[['_route' => 'app_competition_new', '_controller' => 'App\\Controller\\CompetitionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/documentexpedition' => [[['_route' => 'app_documentexpedition_index', '_controller' => 'App\\Controller\\DocumentexpeditionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/documentexpedition/new' => [[['_route' => 'app_documentexpedition_new', '_controller' => 'App\\Controller\\DocumentexpeditionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front/competition' => [[['_route' => 'app_front_competition', '_controller' => 'App\\Controller\\FrontCompetitionController::index'], null, null, null, false, false, null]],
        '/front/competition/cadeaux' => [[['_route' => 'app_front_cadeaucompetition', '_controller' => 'App\\Controller\\FrontCompetitionController::afficherCadeaux'], null, null, null, false, false, null]],
        '/front/reservation' => [[['_route' => 'app_front_reservation', '_controller' => 'App\\Controller\\FrontReservationController::index'], null, null, null, false, false, null]],
        '/front/reservation/MesReservations' => [[['_route' => 'app_interface_Mesreservation', '_controller' => 'App\\Controller\\FrontReservationController::mesRes'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\FrontReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/gifts' => [[['_route' => 'app_gifts_index', '_controller' => 'App\\Controller\\GiftsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/gifts/new' => [[['_route' => 'app_gifts_new', '_controller' => 'App\\Controller\\GiftsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/message' => [
            [['_route' => 'app_message_index', '_controller' => 'App\\Controller\\MessageController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'app_message_recu', '_controller' => 'App\\Controller\\MessageController::mrecu'], null, ['GET' => 0], null, true, false, null],
        ],
        '/message/new' => [[['_route' => 'app_message_new', '_controller' => 'App\\Controller\\MessageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/security' => [[['_route' => 'app_security', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/profil' => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], null, ['GET' => 0], null, false, false, null]],
        '/validation' => [[['_route' => 'app_validation_index', '_controller' => 'App\\Controller\\ValidationController::index'], null, ['GET' => 0], null, true, false, null]],
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
                .'|/a(?'
                    .'|dmin/(?'
                        .'|colis/([^/]++)(?'
                            .'|(*:37)'
                            .'|/edit(*:49)'
                            .'|(*:56)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:75)'
                            .'|/edit(*:87)'
                            .'|(*:94)'
                        .')'
                    .')'
                    .'|nnonces/([^/]++)(?'
                        .'|(*:122)'
                        .'|/edit(*:135)'
                        .'|(*:143)'
                    .')'
                .')'
                .'|/co(?'
                    .'|lis/(?'
                        .'|([^/]++)(?'
                            .'|(*:177)'
                            .'|/edit(*:190)'
                            .'|(*:198)'
                        .')'
                        .'|terms(*:212)'
                    .')'
                    .'|mpetition/([^/]++)(?'
                        .'|(*:242)'
                        .'|/edit(*:255)'
                        .'|(*:263)'
                    .')'
                .')'
                .'|/documentexpedition/([^/]++)(?'
                    .'|(*:304)'
                    .'|/edit(*:317)'
                    .'|(*:325)'
                .')'
                .'|/front/reservation/(?'
                    .'|MesReservations/([^/]++)(?'
                        .'|/\\#(*:386)'
                        .'|(*:394)'
                    .')'
                    .'|([^/]++)(*:411)'
                .')'
                .'|/gifts/([^/]++)(?'
                    .'|(*:438)'
                    .'|/edit(*:451)'
                    .'|(*:459)'
                .')'
                .'|/message/([^/]++)(?'
                    .'|(*:488)'
                    .'|/edit(*:501)'
                    .'|(*:509)'
                .')'
                .'|/rese(?'
                    .'|rvation/([^/]++)(?'
                        .'|/(?'
                            .'|\\#(*:551)'
                            .'|c(*:560)'
                            .'|edit(*:572)'
                        .')'
                        .'|(*:581)'
                    .')'
                    .'|t\\-password/reset(?:/([^/]++))?(*:621)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|/edit(*:652)'
                    .'|(*:660)'
                .')'
                .'|/v(?'
                    .'|alidation/([^/]++)(?'
                        .'|/(?'
                            .'|new(*:702)'
                            .'|edit(*:714)'
                        .')'
                        .'|(*:723)'
                    .')'
                    .'|ehicule/([^/]++)(?'
                        .'|(*:751)'
                        .'|/edit(*:764)'
                        .'|(*:772)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:813)'
                    .'|wdt/([^/]++)(*:833)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:879)'
                            .'|router(*:893)'
                            .'|exception(?'
                                .'|(*:913)'
                                .'|\\.css(*:926)'
                            .')'
                        .')'
                        .'|(*:936)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'app_admin_colis_show', '_controller' => 'App\\Controller\\AdminColisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        49 => [[['_route' => 'app_admin_colis_edit', '_controller' => 'App\\Controller\\AdminColisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        56 => [[['_route' => 'app_admin_colis_delete', '_controller' => 'App\\Controller\\AdminColisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        75 => [[['_route' => 'app_admin_show', '_controller' => 'App\\Controller\\AdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        87 => [[['_route' => 'app_admin_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        94 => [[['_route' => 'app_admin_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        122 => [[['_route' => 'app_annonces_show', '_controller' => 'App\\Controller\\AnnoncesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        135 => [[['_route' => 'app_annonces_edit', '_controller' => 'App\\Controller\\AnnoncesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        143 => [[['_route' => 'app_annonces_delete', '_controller' => 'App\\Controller\\AnnoncesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        177 => [[['_route' => 'app_colis_show', '_controller' => 'App\\Controller\\ColisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        190 => [[['_route' => 'app_colis_edit', '_controller' => 'App\\Controller\\ColisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        198 => [[['_route' => 'app_colis_delete', '_controller' => 'App\\Controller\\ColisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        212 => [[['_route' => 'app_terms', '_controller' => 'App\\Controller\\ColisController::terms'], [], null, null, false, false, null]],
        242 => [[['_route' => 'app_competition_show', '_controller' => 'App\\Controller\\CompetitionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        255 => [[['_route' => 'app_competition_edit', '_controller' => 'App\\Controller\\CompetitionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'app_competition_delete', '_controller' => 'App\\Controller\\CompetitionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        304 => [[['_route' => 'app_documentexpedition_show', '_controller' => 'App\\Controller\\DocumentexpeditionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        317 => [[['_route' => 'app_documentexpedition_edit', '_controller' => 'App\\Controller\\DocumentexpeditionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        325 => [[['_route' => 'app_documentexpedition_delete', '_controller' => 'App\\Controller\\DocumentexpeditionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        386 => [[['_route' => 'app_reservation_annuler', '_controller' => 'App\\Controller\\FrontReservationController::annuler'], ['id'], null, null, false, false, null]],
        394 => [[['_route' => 'app_reservation_download', '_controller' => 'App\\Controller\\FrontReservationController::usersDataDownload'], ['id'], null, null, false, true, null]],
        411 => [[['_route' => 'app_interface_reservation', '_controller' => 'App\\Controller\\FrontReservationController::detaille'], ['idV'], null, null, false, true, null]],
        438 => [[['_route' => 'app_gifts_show', '_controller' => 'App\\Controller\\GiftsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        451 => [[['_route' => 'app_gifts_edit', '_controller' => 'App\\Controller\\GiftsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        459 => [[['_route' => 'app_gifts_delete', '_controller' => 'App\\Controller\\GiftsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        488 => [[['_route' => 'app_message_show', '_controller' => 'App\\Controller\\MessageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        501 => [[['_route' => 'app_message_edit', '_controller' => 'App\\Controller\\MessageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        509 => [[['_route' => 'app_message_delete', '_controller' => 'App\\Controller\\MessageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        551 => [[['_route' => 'app_reservation_terminer', '_controller' => 'App\\Controller\\ReservationController::terminer'], ['id'], null, null, false, false, null]],
        560 => [[['_route' => 'app_reservation_confirme', '_controller' => 'App\\Controller\\ReservationController::confirmer'], ['id'], null, null, false, false, null]],
        572 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        581 => [
            [['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        621 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        652 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        660 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        702 => [[['_route' => 'app_validation_new', '_controller' => 'App\\Controller\\ValidationController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        714 => [[['_route' => 'app_validation_edit', '_controller' => 'App\\Controller\\ValidationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        723 => [
            [['_route' => 'app_validation_show', '_controller' => 'App\\Controller\\ValidationController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_validation_delete', '_controller' => 'App\\Controller\\ValidationController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        751 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['idV'], ['GET' => 0], null, false, true, null]],
        764 => [[['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['idV'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        772 => [[['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['idV'], ['POST' => 0], null, false, true, null]],
        813 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        833 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        879 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        893 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        913 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        926 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        936 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
