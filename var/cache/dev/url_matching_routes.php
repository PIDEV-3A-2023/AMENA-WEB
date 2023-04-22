<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/search' => [[['_route' => 'app_admin_search', '_controller' => 'App\\Controller\\AdminController::searchStudentx'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/new' => [[['_route' => 'app_admin_new', '_controller' => 'App\\Controller\\AdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/annonces' => [[['_route' => 'app_annonces_index', '_controller' => 'App\\Controller\\AnnoncesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/annonces/new' => [[['_route' => 'app_annonces_new', '_controller' => 'App\\Controller\\AnnoncesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/colis' => [[['_route' => 'app_colis_index', '_controller' => 'App\\Controller\\ColisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/colis/new' => [[['_route' => 'app_colis_new', '_controller' => 'App\\Controller\\ColisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/message' => [
            [['_route' => 'app_message_index', '_controller' => 'App\\Controller\\MessageController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'app_message_recu', '_controller' => 'App\\Controller\\MessageController::mrecu'], null, ['GET' => 0], null, true, false, null],
        ],
        '/message/new' => [[['_route' => 'app_message_new', '_controller' => 'App\\Controller\\MessageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/security' => [[['_route' => 'app_security', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/search' => [[['_route' => 'app_user_search', '_controller' => 'App\\Controller\\UserController::searchStudentx'], null, ['GET' => 0], null, false, false, null]],
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
                    .'|dmin/([^/]++)(?'
                        .'|(*:28)'
                        .'|/edit(*:40)'
                        .'|(*:47)'
                    .')'
                    .'|nnonces/([^/]++)(?'
                        .'|(*:74)'
                        .'|/edit(*:86)'
                        .'|(*:93)'
                    .')'
                .')'
                .'|/colis/([^/]++)(?'
                    .'|(*:120)'
                    .'|/edit(*:133)'
                    .'|(*:141)'
                .')'
                .'|/message/([^/]++)(?'
                    .'|(*:170)'
                    .'|/edit(*:183)'
                    .'|(*:191)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:236)'
                .'|/user/(?'
                    .'|edit/([^/]++)(*:266)'
                    .'|delete/([^/]++)(*:289)'
                .')'
                .'|/v(?'
                    .'|alidation/([^/]++)(?'
                        .'|/(?'
                            .'|new(*:331)'
                            .'|edit(*:343)'
                        .')'
                        .'|(*:352)'
                    .')'
                    .'|ehicule/([^/]++)(?'
                        .'|(*:380)'
                        .'|/edit(*:393)'
                        .'|(*:401)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:442)'
                    .'|wdt/([^/]++)(*:462)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:508)'
                            .'|router(*:522)'
                            .'|exception(?'
                                .'|(*:542)'
                                .'|\\.css(*:555)'
                            .')'
                        .')'
                        .'|(*:565)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'app_admin_show', '_controller' => 'App\\Controller\\AdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        40 => [[['_route' => 'app_admin_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        47 => [[['_route' => 'app_admin_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        74 => [[['_route' => 'app_annonces_show', '_controller' => 'App\\Controller\\AnnoncesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        86 => [[['_route' => 'app_annonces_edit', '_controller' => 'App\\Controller\\AnnoncesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        93 => [[['_route' => 'app_annonces_delete', '_controller' => 'App\\Controller\\AnnoncesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        120 => [[['_route' => 'app_colis_show', '_controller' => 'App\\Controller\\ColisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        133 => [[['_route' => 'app_colis_edit', '_controller' => 'App\\Controller\\ColisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        141 => [[['_route' => 'app_colis_delete', '_controller' => 'App\\Controller\\ColisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        170 => [[['_route' => 'app_message_show', '_controller' => 'App\\Controller\\MessageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        183 => [[['_route' => 'app_message_edit', '_controller' => 'App\\Controller\\MessageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        191 => [[['_route' => 'app_message_delete', '_controller' => 'App\\Controller\\MessageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        236 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        266 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        289 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        331 => [[['_route' => 'app_validation_new', '_controller' => 'App\\Controller\\ValidationController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        343 => [[['_route' => 'app_validation_edit', '_controller' => 'App\\Controller\\ValidationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        352 => [
            [['_route' => 'app_validation_show', '_controller' => 'App\\Controller\\ValidationController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_validation_delete', '_controller' => 'App\\Controller\\ValidationController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        380 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['idv'], ['GET' => 0], null, false, true, null]],
        393 => [[['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['idv'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        401 => [[['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['idv'], ['POST' => 0], null, false, true, null]],
        442 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        462 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        508 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        522 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        542 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        555 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        565 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
