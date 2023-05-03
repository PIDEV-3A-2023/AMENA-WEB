<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/activate' => [[['_route' => 'activate_account', '_controller' => 'App\\Controller\\ActivateAccountController::activate'], null, null, null, false, false, null]],
        '/admin/colis' => [[['_route' => 'app_admin_colis_index', '_controller' => 'App\\Controller\\AdminColisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/colis/new' => [[['_route' => 'app_admin_colis_new', '_controller' => 'App\\Controller\\AdminColisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/search' => [[['_route' => 'app_admin_search', '_controller' => 'App\\Controller\\AdminController::searchStudentx'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/new' => [[['_route' => 'app_admin_new', '_controller' => 'App\\Controller\\AdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/annonces' => [[['_route' => 'app_annonces_index', '_controller' => 'App\\Controller\\AnnoncesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/annonces/new' => [[['_route' => 'app_annonces_new', '_controller' => 'App\\Controller\\AnnoncesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/annonces/annonces/search' => [[['_route' => 'app_annonces_search', '_controller' => 'App\\Controller\\AnnoncesController::search'], null, ['GET' => 0], null, false, false, null]],
        '/colis' => [[['_route' => 'app_colis_index', '_controller' => 'App\\Controller\\ColisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/colis/new' => [[['_route' => 'app_colis_new', '_controller' => 'App\\Controller\\ColisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/documentexpedition' => [[['_route' => 'app_documentexpedition_index', '_controller' => 'App\\Controller\\DocumentexpeditionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/documentexpedition/new' => [[['_route' => 'app_documentexpedition_new', '_controller' => 'App\\Controller\\DocumentexpeditionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/error' => [[['_route' => 'app_error', '_controller' => 'App\\Controller\\ErrorController::index'], null, null, null, false, false, null]],
        '/evaluation' => [[['_route' => 'evaluation', '_controller' => 'App\\Controller\\EvaluationController::evaluation'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/message' => [
            [['_route' => 'app_message_index', '_controller' => 'App\\Controller\\MessageController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'app_message_recu', '_controller' => 'App\\Controller\\MessageController::mrecu'], null, ['GET' => 0], null, true, false, null],
        ],
        '/message/new' => [[['_route' => 'app_message_new', '_controller' => 'App\\Controller\\MessageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamations' => [[['_route' => 'app_reclamations_index', '_controller' => 'App\\Controller\\ReclamationsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamations/new' => [[['_route' => 'app_reclamations_new', '_controller' => 'App\\Controller\\ReclamationsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/security' => [[['_route' => 'app_security', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UsermobilController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/search' => [[['_route' => 'app_user_search', '_controller' => 'App\\Controller\\UsermobilController::searchStudentx'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UsermobilController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/profil' => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UsermobilController::show'], null, ['GET' => 0], null, false, false, null]],
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
                        .'|colis/([^/]++)(?'
                            .'|(*:37)'
                            .'|/edit(*:49)'
                            .'|(*:56)'
                        .')'
                        .'|([^/]++)(*:72)'
                        .'|edit/([^/]++)(*:92)'
                        .'|([^/]++)(?'
                            .'|(*:110)'
                            .'|/block(*:124)'
                        .')'
                    .')'
                    .'|nnonces/([^/]++)(?'
                        .'|(*:153)'
                        .'|/edit(*:166)'
                        .'|(*:174)'
                    .')'
                .')'
                .'|/colis/([^/]++)(?'
                    .'|(*:202)'
                    .'|/edit(*:215)'
                    .'|(*:223)'
                .')'
                .'|/documentexpedition/([^/]++)(?'
                    .'|(*:263)'
                    .'|/edit(*:276)'
                    .'|(*:284)'
                .')'
                .'|/message/([^/]++)(?'
                    .'|(*:313)'
                    .'|/edit(*:326)'
                    .'|(*:334)'
                .')'
                .'|/re(?'
                    .'|clamations/([^/]++)(?'
                        .'|(*:371)'
                        .'|/edit(*:384)'
                        .'|(*:392)'
                    .')'
                    .'|set\\-password/reset(?:/([^/]++))?(*:434)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(*:460)'
                    .'|edit/([^/]++)(*:481)'
                    .'|delete/([^/]++)(*:504)'
                .')'
                .'|/v(?'
                    .'|alidation/([^/]++)(?'
                        .'|/(?'
                            .'|new(*:546)'
                            .'|edit(*:558)'
                        .')'
                        .'|(*:567)'
                    .')'
                    .'|ehicule/([^/]++)(?'
                        .'|(*:595)'
                        .'|/edit(*:608)'
                        .'|(*:616)'
                    .')'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:654)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:693)'
                    .'|wdt/([^/]++)(*:713)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:759)'
                            .'|router(*:773)'
                            .'|exception(?'
                                .'|(*:793)'
                                .'|\\.css(*:806)'
                            .')'
                        .')'
                        .'|(*:816)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'app_admin_colis_show', '_controller' => 'App\\Controller\\AdminColisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        49 => [[['_route' => 'app_admin_colis_edit', '_controller' => 'App\\Controller\\AdminColisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        56 => [[['_route' => 'app_admin_colis_delete', '_controller' => 'App\\Controller\\AdminColisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        72 => [[['_route' => 'app_admin_show', '_controller' => 'App\\Controller\\AdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        92 => [[['_route' => 'app_admin_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        110 => [[['_route' => 'app_admin_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        124 => [[['_route' => 'app_admin_block_user', '_controller' => 'App\\Controller\\AdminController::blockUser'], ['id'], ['GET' => 0], null, false, false, null]],
        153 => [[['_route' => 'app_annonces_show', '_controller' => 'App\\Controller\\AnnoncesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        166 => [[['_route' => 'app_annonces_edit', '_controller' => 'App\\Controller\\AnnoncesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        174 => [[['_route' => 'app_annonces_delete', '_controller' => 'App\\Controller\\AnnoncesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        202 => [[['_route' => 'app_colis_show', '_controller' => 'App\\Controller\\ColisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        215 => [[['_route' => 'app_colis_edit', '_controller' => 'App\\Controller\\ColisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        223 => [[['_route' => 'app_colis_delete', '_controller' => 'App\\Controller\\ColisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        263 => [[['_route' => 'app_documentexpedition_show', '_controller' => 'App\\Controller\\DocumentexpeditionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        276 => [[['_route' => 'app_documentexpedition_edit', '_controller' => 'App\\Controller\\DocumentexpeditionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        284 => [[['_route' => 'app_documentexpedition_delete', '_controller' => 'App\\Controller\\DocumentexpeditionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        313 => [[['_route' => 'app_message_show', '_controller' => 'App\\Controller\\MessageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        326 => [[['_route' => 'app_message_edit', '_controller' => 'App\\Controller\\MessageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        334 => [[['_route' => 'app_message_delete', '_controller' => 'App\\Controller\\MessageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        371 => [[['_route' => 'app_Reclamations_show', '_controller' => 'App\\Controller\\ReclamationsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        384 => [[['_route' => 'app_reclamations_edit', '_controller' => 'App\\Controller\\ReclamationsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        392 => [[['_route' => 'app_reclamations_delete', '_controller' => 'App\\Controller\\ReclamationsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        434 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        460 => [[['_route' => 'app_user_showp', '_controller' => 'App\\Controller\\UsermobilController::showp'], ['id'], ['GET' => 0], null, false, true, null]],
        481 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UsermobilController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        504 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UsermobilController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        546 => [[['_route' => 'app_validation_new', '_controller' => 'App\\Controller\\ValidationController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        558 => [[['_route' => 'app_validation_edit', '_controller' => 'App\\Controller\\ValidationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        567 => [
            [['_route' => 'app_validation_show', '_controller' => 'App\\Controller\\ValidationController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_validation_delete', '_controller' => 'App\\Controller\\ValidationController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        595 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['idv'], ['GET' => 0], null, false, true, null]],
        608 => [[['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['idv'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        616 => [[['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['idv'], ['POST' => 0], null, false, true, null]],
        654 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        693 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        713 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        759 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        773 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        793 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        806 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        816 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
