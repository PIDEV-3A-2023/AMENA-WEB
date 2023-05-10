<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], [], []],
    'app_admin_colis_index' => [[], ['_controller' => 'App\\Controller\\AdminColisController::index'], [], [['text', '/admin/colis/']], [], [], []],
    'app_admin_colis_new' => [[], ['_controller' => 'App\\Controller\\AdminColisController::new'], [], [['text', '/admin/colis/new']], [], [], []],
    'app_admin_colis_show' => [['id'], ['_controller' => 'App\\Controller\\AdminColisController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/colis']], [], [], []],
    'app_admin_colis_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminColisController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/colis']], [], [], []],
    'app_admin_colis_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminColisController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/colis']], [], [], []],
    'app_admin_index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/']], [], [], []],
    'app_admin_new' => [[], ['_controller' => 'App\\Controller\\AdminController::new'], [], [['text', '/admin/new']], [], [], []],
    'app_admin_show' => [['id'], ['_controller' => 'App\\Controller\\AdminController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin']], [], [], []],
    'app_admin_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin']], [], [], []],
    'app_admin_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin']], [], [], []],
    'app_annonces_index' => [[], ['_controller' => 'App\\Controller\\AnnoncesController::index'], [], [['text', '/annonces/']], [], [], []],
    'app_annonces_new' => [[], ['_controller' => 'App\\Controller\\AnnoncesController::new'], [], [['text', '/annonces/new']], [], [], []],
    'app_annonces_show' => [['id'], ['_controller' => 'App\\Controller\\AnnoncesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/annonces']], [], [], []],
    'app_annonces_edit' => [['id'], ['_controller' => 'App\\Controller\\AnnoncesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/annonces']], [], [], []],
    'app_annonces_delete' => [['id'], ['_controller' => 'App\\Controller\\AnnoncesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/annonces']], [], [], []],
    'app_colis_index' => [[], ['_controller' => 'App\\Controller\\ColisController::index'], [], [['text', '/colis/']], [], [], []],
    'app_colis_new' => [[], ['_controller' => 'App\\Controller\\ColisController::new'], [], [['text', '/colis/new']], [], [], []],
    'app_colis_show' => [['id'], ['_controller' => 'App\\Controller\\ColisController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/colis']], [], [], []],
    'app_colis_edit' => [['id'], ['_controller' => 'App\\Controller\\ColisController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/colis']], [], [], []],
    'app_colis_delete' => [['id'], ['_controller' => 'App\\Controller\\ColisController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/colis']], [], [], []],
    'app_terms' => [[], ['_controller' => 'App\\Controller\\ColisController::terms'], [], [['text', '/colis/terms']], [], [], []],
    'app_competition_index' => [[], ['_controller' => 'App\\Controller\\CompetitionController::index'], [], [['text', '/competition/']], [], [], []],
    'app_competition_new' => [[], ['_controller' => 'App\\Controller\\CompetitionController::new'], [], [['text', '/competition/new']], [], [], []],
    'app_competition_show' => [['id'], ['_controller' => 'App\\Controller\\CompetitionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/competition']], [], [], []],
    'app_competition_edit' => [['id'], ['_controller' => 'App\\Controller\\CompetitionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/competition']], [], [], []],
    'app_competition_delete' => [['id'], ['_controller' => 'App\\Controller\\CompetitionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/competition']], [], [], []],
    'app_documentexpedition_index' => [[], ['_controller' => 'App\\Controller\\DocumentexpeditionController::index'], [], [['text', '/documentexpedition/']], [], [], []],
    'app_documentexpedition_new' => [[], ['_controller' => 'App\\Controller\\DocumentexpeditionController::new'], [], [['text', '/documentexpedition/new']], [], [], []],
    'app_documentexpedition_show' => [['id'], ['_controller' => 'App\\Controller\\DocumentexpeditionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/documentexpedition']], [], [], []],
    'app_documentexpedition_edit' => [['id'], ['_controller' => 'App\\Controller\\DocumentexpeditionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/documentexpedition']], [], [], []],
    'app_documentexpedition_delete' => [['id'], ['_controller' => 'App\\Controller\\DocumentexpeditionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/documentexpedition']], [], [], []],
    'app_front_competition' => [[], ['_controller' => 'App\\Controller\\FrontCompetitionController::index'], [], [['text', '/front/competition']], [], [], []],
    'app_front_cadeaucompetition' => [[], ['_controller' => 'App\\Controller\\FrontCompetitionController::afficherCadeaux'], [], [['text', '/front/competition/cadeaux']], [], [], []],
    'app_reservation_annuler' => [['id'], ['_controller' => 'App\\Controller\\FrontReservationController::annuler'], [], [['text', '/#'], ['variable', '/', '[^/]++', 'id', true], ['text', '/front/reservation/MesReservations']], [], [], []],
    'app_reservation_download' => [['id'], ['_controller' => 'App\\Controller\\FrontReservationController::usersDataDownload'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/front/reservation/MesReservations']], [], [], []],
    'app_front_reservation' => [[], ['_controller' => 'App\\Controller\\FrontReservationController::index'], [], [['text', '/front/reservation']], [], [], []],
    'app_interface_Mesreservation' => [[], ['_controller' => 'App\\Controller\\FrontReservationController::mesRes'], [], [['text', '/front/reservation/MesReservations']], [], [], []],
    'app_reservation_new' => [[], ['_controller' => 'App\\Controller\\FrontReservationController::new'], [], [['text', '/new']], [], [], []],
    'app_interface_reservation' => [['idV'], ['_controller' => 'App\\Controller\\FrontReservationController::detaille'], [], [['variable', '/', '[^/]++', 'idV', true], ['text', '/front/reservation']], [], [], []],
    'app_gifts_index' => [[], ['_controller' => 'App\\Controller\\GiftsController::index'], [], [['text', '/gifts/']], [], [], []],
    'app_gifts_new' => [[], ['_controller' => 'App\\Controller\\GiftsController::new'], [], [['text', '/gifts/new']], [], [], []],
    'app_gifts_show' => [['id'], ['_controller' => 'App\\Controller\\GiftsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/gifts']], [], [], []],
    'app_gifts_edit' => [['id'], ['_controller' => 'App\\Controller\\GiftsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/gifts']], [], [], []],
    'app_gifts_delete' => [['id'], ['_controller' => 'App\\Controller\\GiftsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/gifts']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'app_message_index' => [[], ['_controller' => 'App\\Controller\\MessageController::index'], [], [['text', '/message/']], [], [], []],
    'app_message_new' => [[], ['_controller' => 'App\\Controller\\MessageController::new'], [], [['text', '/message/new']], [], [], []],
    'app_message_show' => [['id'], ['_controller' => 'App\\Controller\\MessageController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/message']], [], [], []],
    'app_message_edit' => [['id'], ['_controller' => 'App\\Controller\\MessageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/message']], [], [], []],
    'app_message_delete' => [['id'], ['_controller' => 'App\\Controller\\MessageController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/message']], [], [], []],
    'app_message_recu' => [[], ['_controller' => 'App\\Controller\\MessageController::mrecu'], [], [['text', '/message/']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_json_intervalle' => [[], ['_controller' => 'App\\Controller\\ReservationController::returnIntervalleDays'], [], [['text', '/reservation/daysintervalle']], [], [], []],
    'app_json_new' => [[], ['_controller' => 'App\\Controller\\ReservationController::add'], [], [['text', '/reservation/newJson']], [], [], []],
    'list5' => [[], ['_controller' => 'App\\Controller\\ReservationController::getreservations'], [], [['text', '/reservation/Allreservation']], [], [], []],
    'app_reservation_terminer' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::terminer'], [], [['text', '/#'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], [], []],
    'app_reservation_index' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation/']], [], [], []],
    'app_reservation_confirme' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::confirmer'], [], [['text', '/c'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], [], []],
    'app_reservation_show' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], [], []],
    'app_reservation_edit' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], [], []],
    'app_reservation_delete' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'app_security' => [[], ['_controller' => 'App\\Controller\\SecurityController::index'], [], [['text', '/security']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'app_user_show' => [[], ['_controller' => 'App\\Controller\\UserController::show'], [], [['text', '/user/profil']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_validation_index' => [[], ['_controller' => 'App\\Controller\\ValidationController::index'], [], [['text', '/validation/']], [], [], []],
    'app_validation_new' => [['id'], ['_controller' => 'App\\Controller\\ValidationController::new'], [], [['text', '/new'], ['variable', '/', '[^/]++', 'id', true], ['text', '/validation']], [], [], []],
    'app_validation_show' => [['id'], ['_controller' => 'App\\Controller\\ValidationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/validation']], [], [], []],
    'app_validation_edit' => [['id'], ['_controller' => 'App\\Controller\\ValidationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/validation']], [], [], []],
    'app_validation_delete' => [['id'], ['_controller' => 'App\\Controller\\ValidationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/validation']], [], [], []],
    'list' => [[], ['_controller' => 'App\\Controller\\VehiculeController::getVehicules'], [], [['text', '/vehicule/AllVehicule']], [], [], []],
    'app_vehicule_index' => [[], ['_controller' => 'App\\Controller\\VehiculeController::index'], [], [['text', '/vehicule/']], [], [], []],
    'app_vehicule_new' => [[], ['_controller' => 'App\\Controller\\VehiculeController::new'], [], [['text', '/vehicule/new']], [], [], []],
    'app_vehicule_show' => [['idV'], ['_controller' => 'App\\Controller\\VehiculeController::show'], [], [['variable', '/', '[^/]++', 'idV', true], ['text', '/vehicule']], [], [], []],
    'app_vehicule_edit' => [['idV'], ['_controller' => 'App\\Controller\\VehiculeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idV', true], ['text', '/vehicule']], [], [], []],
    'app_vehicule_delete' => [['idV'], ['_controller' => 'App\\Controller\\VehiculeController::delete'], [], [['variable', '/', '[^/]++', 'idV', true], ['text', '/vehicule']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
