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
        '/error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\ErrorController::show'], null, null, null, false, false, null]],
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
        '/qr-code' => [[['_route' => 'app_qr_index', '_controller' => 'App\\Controller\\QrCodeController::generate'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|([^/]++)(*:28)'
                        .'|edit/([^/]++)(*:48)'
                        .'|([^/]++)(*:63)'
                    .')'
                    .'|nnonces/([^/]++)(?'
                        .'|(*:90)'
                        .'|/edit(*:102)'
                        .'|(*:110)'
                    .')'
                .')'
                .'|/colis/([^/]++)(?'
                    .'|(*:138)'
                    .'|/edit(*:151)'
                    .'|(*:159)'
                .')'
                .'|/message/([^/]++)(?'
                    .'|(*:188)'
                    .'|/edit(*:201)'
                    .'|(*:209)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:254)'
                .'|/user/(?'
                    .'|([^/]++)(*:279)'
                    .'|edit/([^/]++)(*:300)'
                    .'|delete/([^/]++)(*:323)'
                .')'
                .'|/v(?'
                    .'|alidation/([^/]++)(?'
                        .'|/(?'
                            .'|new(*:365)'
                            .'|edit(*:377)'
                        .')'
                        .'|(*:386)'
                    .')'
                    .'|ehicule/([^/]++)(?'
                        .'|(*:414)'
                        .'|/edit(*:427)'
                        .'|(*:435)'
                    .')'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:473)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:512)'
                    .'|wdt/([^/]++)(*:532)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:578)'
                            .'|router(*:592)'
                            .'|exception(?'
                                .'|(*:612)'
                                .'|\\.css(*:625)'
                            .')'
                        .')'
                        .'|(*:635)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'app_admin_show', '_controller' => 'App\\Controller\\AdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        48 => [[['_route' => 'app_admin_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        63 => [[['_route' => 'app_admin_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        90 => [[['_route' => 'app_annonces_show', '_controller' => 'App\\Controller\\AnnoncesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        102 => [[['_route' => 'app_annonces_edit', '_controller' => 'App\\Controller\\AnnoncesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        110 => [[['_route' => 'app_annonces_delete', '_controller' => 'App\\Controller\\AnnoncesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        138 => [[['_route' => 'app_colis_show', '_controller' => 'App\\Controller\\ColisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        151 => [[['_route' => 'app_colis_edit', '_controller' => 'App\\Controller\\ColisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        159 => [[['_route' => 'app_colis_delete', '_controller' => 'App\\Controller\\ColisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        188 => [[['_route' => 'app_message_show', '_controller' => 'App\\Controller\\MessageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        201 => [[['_route' => 'app_message_edit', '_controller' => 'App\\Controller\\MessageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        209 => [[['_route' => 'app_message_delete', '_controller' => 'App\\Controller\\MessageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        254 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        279 => [[['_route' => 'app_user_showp', '_controller' => 'App\\Controller\\UserController::showp'], ['id'], ['GET' => 0], null, false, true, null]],
        300 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        323 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        365 => [[['_route' => 'app_validation_new', '_controller' => 'App\\Controller\\ValidationController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        377 => [[['_route' => 'app_validation_edit', '_controller' => 'App\\Controller\\ValidationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        386 => [
            [['_route' => 'app_validation_show', '_controller' => 'App\\Controller\\ValidationController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_validation_delete', '_controller' => 'App\\Controller\\ValidationController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        414 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['idv'], ['GET' => 0], null, false, true, null]],
        427 => [[['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['idv'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        435 => [[['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['idv'], ['POST' => 0], null, false, true, null]],
        473 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        512 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        532 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        578 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        592 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        612 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        625 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        635 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
