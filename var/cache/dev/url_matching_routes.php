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
        '/gifts' => [[['_route' => 'app_gifts_index', '_controller' => 'App\\Controller\\GiftsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/gifts/new' => [[['_route' => 'app_gifts_new', '_controller' => 'App\\Controller\\GiftsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/message' => [
            [['_route' => 'app_message_index', '_controller' => 'App\\Controller\\MessageController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'app_message_recu', '_controller' => 'App\\Controller\\MessageController::mrecu'], null, ['GET' => 0], null, true, false, null],
        ],
        '/message/new' => [[['_route' => 'app_message_new', '_controller' => 'App\\Controller\\MessageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/qr-codes' => [[['_route' => 'app_qr_codes', '_controller' => 'App\\Controller\\QrCodeGeneratorController::index'], null, null, null, false, false, null]],
        '/question/new' => [[['_route' => 'quiz_new', '_controller' => 'App\\Controller\\QuizController::new'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/download' => [[['_route' => 'app_reservation_download', '_controller' => 'App\\Controller\\ReservationController::usersDataDownload'], null, null, null, false, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/security' => [[['_route' => 'app_security', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/stats' => [[['_route' => 'app_stats', '_controller' => 'App\\Controller\\StatsController::index'], null, null, null, false, false, null]],
        '/test/cadeau' => [[['_route' => 'app_test_cadeau', '_controller' => 'App\\Controller\\TestCadeauController::index'], null, null, null, false, false, null]],
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
        '/quiz' => [[['_route' => 'quiz', '_controller' => 'App\\Controller\\QuizController::index'], null, ['GET' => 0], null, false, false, null]],
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
                    .'|mpetition/(?'
                        .'|([^/]++)(?'
                            .'|(*:245)'
                            .'|/edit(*:258)'
                            .'|(*:266)'
                        .')'
                        .'|sort\\-by\\-nbp(*:288)'
                    .')'
                .')'
                .'|/documentexpedition/([^/]++)(?'
                    .'|(*:329)'
                    .'|/edit(*:342)'
                    .'|(*:350)'
                .')'
                .'|/front/(?'
                    .'|competition/(?'
                        .'|detailscadeau/([^/]++)(*:406)'
                        .'|([^/]++)(*:422)'
                        .'|cadeaux/([^/]++)(*:446)'
                    .')'
                    .'|reservation/([^/]++)(*:475)'
                .')'
                .'|/gifts/([^/]++)(?'
                    .'|(*:502)'
                    .'|/edit(*:515)'
                    .'|(*:523)'
                .')'
                .'|/message/([^/]++)(?'
                    .'|(*:552)'
                    .'|/edit(*:565)'
                    .'|(*:573)'
                .')'
                .'|/q(?'
                    .'|uestion/([^/]++)/(?'
                        .'|edit(*:611)'
                        .'|delete(*:625)'
                    .')'
                    .'|r\\-code/([^/]++)/([\\w\\W]+)(*:660)'
                .')'
                .'|/rese(?'
                    .'|rvation/([^/]++)(?'
                        .'|(*:696)'
                        .'|/edit(*:709)'
                        .'|(*:717)'
                    .')'
                    .'|t\\-password/reset(?:/([^/]++))?(*:757)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|/edit(*:788)'
                    .'|(*:796)'
                .')'
                .'|/v(?'
                    .'|alidation/([^/]++)(?'
                        .'|/(?'
                            .'|new(*:838)'
                            .'|edit(*:850)'
                        .')'
                        .'|(*:859)'
                    .')'
                    .'|ehicule/([^/]++)(?'
                        .'|(*:887)'
                        .'|/edit(*:900)'
                        .'|(*:908)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:949)'
                    .'|wdt/([^/]++)(*:969)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1015)'
                            .'|router(*:1030)'
                            .'|exception(?'
                                .'|(*:1051)'
                                .'|\\.css(*:1065)'
                            .')'
                        .')'
                        .'|(*:1076)'
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
        245 => [[['_route' => 'app_competition_show', '_controller' => 'App\\Controller\\CompetitionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'app_competition_edit', '_controller' => 'App\\Controller\\CompetitionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        266 => [[['_route' => 'app_competition_delete', '_controller' => 'App\\Controller\\CompetitionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        288 => [[['_route' => 'app_competition_sort_by_nbp', '_controller' => 'App\\Controller\\CompetitionController::sortByNbp'], [], ['GET' => 0], null, false, false, null]],
        329 => [[['_route' => 'app_documentexpedition_show', '_controller' => 'App\\Controller\\DocumentexpeditionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        342 => [[['_route' => 'app_documentexpedition_edit', '_controller' => 'App\\Controller\\DocumentexpeditionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        350 => [[['_route' => 'app_documentexpedition_delete', '_controller' => 'App\\Controller\\DocumentexpeditionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        406 => [[['_route' => 'app_front_showdetailscadeau', '_controller' => 'App\\Controller\\FrontCompetitionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        422 => [[['_route' => 'app_front_participer', '_controller' => 'App\\Controller\\FrontCompetitionController::participer'], ['id'], null, null, false, true, null]],
        446 => [[['_route' => 'exchange_gift', '_controller' => 'App\\Controller\\FrontCompetitionController::exchangeGift'], ['id'], null, null, false, true, null]],
        475 => [[['_route' => 'app_interface_reservation', '_controller' => 'App\\Controller\\FrontReservationController::detaille'], ['idV'], null, null, false, true, null]],
        502 => [[['_route' => 'app_gifts_show', '_controller' => 'App\\Controller\\GiftsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        515 => [[['_route' => 'app_gifts_edit', '_controller' => 'App\\Controller\\GiftsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        523 => [[['_route' => 'app_gifts_delete', '_controller' => 'App\\Controller\\GiftsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        552 => [[['_route' => 'app_message_show', '_controller' => 'App\\Controller\\MessageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        565 => [[['_route' => 'app_message_edit', '_controller' => 'App\\Controller\\MessageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        573 => [[['_route' => 'app_message_delete', '_controller' => 'App\\Controller\\MessageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        611 => [[['_route' => 'quiz_edit', '_controller' => 'App\\Controller\\QuizController::edit'], ['id'], null, null, false, false, null]],
        625 => [[['_route' => 'quiz_delete', '_controller' => 'App\\Controller\\QuizController::delete'], ['id'], null, null, false, false, null]],
        660 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        696 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        709 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        717 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        757 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        788 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        796 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        838 => [[['_route' => 'app_validation_new', '_controller' => 'App\\Controller\\ValidationController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        850 => [[['_route' => 'app_validation_edit', '_controller' => 'App\\Controller\\ValidationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        859 => [
            [['_route' => 'app_validation_show', '_controller' => 'App\\Controller\\ValidationController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_validation_delete', '_controller' => 'App\\Controller\\ValidationController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        887 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['idV'], ['GET' => 0], null, false, true, null]],
        900 => [[['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['idV'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        908 => [[['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['idV'], ['POST' => 0], null, false, true, null]],
        949 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        969 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1015 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1030 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1051 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1065 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1076 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
