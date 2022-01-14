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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/profile/nurse' => [[['_route' => 'account_nurse', '_controller' => 'App\\Controller\\AccountController::renderAccountNurse'], null, null, null, false, false, null]],
        '/profile/surgeon' => [[['_route' => 'account_surgeon', '_controller' => 'App\\Controller\\AccountController::renderAccountSurgeon'], null, null, null, false, false, null]],
        '/profile/nusre/active' => [[['_route' => 'account_nurse_active', '_controller' => 'App\\Controller\\AccountController::FunctionName'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/availability' => [[['_route' => 'availability', '_controller' => 'App\\Controller\\AvailabilityController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/cps_check' => [[['_route' => 'cps_check', '_controller' => 'App\\Controller\\CpsCheckController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/about_us' => [[['_route' => 'about_us', '_controller' => 'App\\Controller\\InformationsController::aboutUs'], null, null, null, false, false, null]],
        '/informations' => [[['_route' => 'informations', '_controller' => 'App\\Controller\\InformationsController::informations'], null, null, null, false, false, null]],
        '/credits' => [[['_route' => 'credits', '_controller' => 'App\\Controller\\InformationsController::credits'], null, null, null, false, false, null]],
        '/donate' => [[['_route' => 'donate', '_controller' => 'App\\Controller\\InformationsController::donate'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\SearchController::index'], null, null, null, false, false, null]],
        '/search/availability' => [[['_route' => 'search_availability', '_controller' => 'App\\Controller\\SearchController::searchAvailability'], null, null, null, false, false, null]],
        '/search/surgery' => [[['_route' => 'search_surgery', '_controller' => 'App\\Controller\\SearchController::searchSurgery'], null, null, null, false, false, null]],
        '/surgery/notification' => [[['_route' => 'surgery_notification', '_controller' => 'App\\Controller\\SurgeryNotificationController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/admin/(?'
                    .'|user/([^/]++)(*:191)'
                    .'|delete(?'
                        .'|User/([^/]++)(*:221)'
                        .'|Availability/([^/]++)(*:250)'
                        .'|Surgery/([^/]++)(*:274)'
                    .')'
                .')'
                .'|/profile/(?'
                    .'|d(?'
                        .'|isplay_availability/([^/]++)(*:328)'
                        .'|elete_user_availability/([^/]++)(*:368)'
                    .')'
                    .'|user_edit_availability/([^/]++)(*:408)'
                .')'
                .'|/surgery/(?'
                    .'|edit_user_notification/([^/]++)(*:460)'
                    .'|notification_display/([^/]++)(*:497)'
                .')'
                .'|/Surgery/delete_user_surgery/([^/]++)(*:543)'
                .'|/update_user/([^/]++)(*:572)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        191 => [[['_route' => 'admin_edit_user', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, true, null]],
        221 => [[['_route' => 'admin_delete_user', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, true, null]],
        250 => [[['_route' => 'admin_delete_availability', '_controller' => 'App\\Controller\\AdminController::deleteAvailability'], ['id'], null, null, false, true, null]],
        274 => [[['_route' => 'admin_delete_surgery', '_controller' => 'App\\Controller\\AdminController::deleteSurgery'], ['id'], null, null, false, true, null]],
        328 => [[['_route' => 'display_availability', '_controller' => 'App\\Controller\\AvailabilityController::displayAvailability'], ['id'], null, null, false, true, null]],
        368 => [[['_route' => 'user_delete_availability', '_controller' => 'App\\Controller\\AvailabilityController::deleteUserAvailability'], ['id'], null, null, false, true, null]],
        408 => [[['_route' => 'user_edit_availability', '_controller' => 'App\\Controller\\AvailabilityController::editAvailability'], ['id'], null, null, false, true, null]],
        460 => [[['_route' => 'edit_surgery_notification', '_controller' => 'App\\Controller\\SurgeryNotificationController::editSurgeryNotification'], ['id'], null, null, false, true, null]],
        497 => [[['_route' => 'display_user_surgery', '_controller' => 'App\\Controller\\SurgeryNotificationController::displaySurgeryNotification'], ['id'], null, null, false, true, null]],
        543 => [[['_route' => 'delete_surgery_notification', '_controller' => 'App\\Controller\\SurgeryNotificationController::deleteUserAvailability'], ['id'], null, null, false, true, null]],
        572 => [
            [['_route' => 'update_user', '_controller' => 'App\\Controller\\UpdateUserController::index'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
