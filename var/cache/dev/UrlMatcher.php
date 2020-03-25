<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/order' => [[['_route' => 'order.index', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/order/basket' => [[['_route' => 'order.basket', '_controller' => 'App\\Controller\\OrderController::basket'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'pages.home', '_controller' => 'App\\Controller\\PageController::home'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'pages.about', '_controller' => 'App\\Controller\\PageController::about'], null, null, null, false, false, null]],
        '/products' => [[['_route' => 'products.index', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/products/add' => [[['_route' => 'products.add', '_controller' => 'App\\Controller\\ProductController::add'], null, null, null, false, false, null]],
        '/products/save' => [[['_route' => 'products.save', '_controller' => 'App\\Controller\\ProductController::save'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/order/(?'
                    .'|addToBasket/([^/]++)(*:72)'
                    .'|basket/delete/([^/]++)(*:101)'
                .')'
                .'|/products/(?'
                    .'|edit/([^/]++)(*:136)'
                    .'|update/([^/]++)(*:159)'
                    .'|delete/([^/]++)(*:182)'
                    .'|show/([^/]++)(*:203)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        72 => [[['_route' => 'order.tobasket', '_controller' => 'App\\Controller\\OrderController::addToBasket'], ['idProduct'], null, null, false, true, null]],
        101 => [[['_route' => 'order.delete', '_controller' => 'App\\Controller\\OrderController::deletefomBasket'], ['idProduct'], null, null, false, true, null]],
        136 => [[['_route' => 'products.edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['idProduct'], null, null, false, true, null]],
        159 => [[['_route' => 'products.update', '_controller' => 'App\\Controller\\ProductController::update'], ['idProduct'], null, null, false, true, null]],
        182 => [[['_route' => 'products.delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['idProduct'], null, null, false, true, null]],
        203 => [
            [['_route' => 'products.show', '_controller' => 'App\\Controller\\ProductController::show'], ['idProduct'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
