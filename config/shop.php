<?php

return [

    'routes' => [
        // 'login' => ['middleware' => ['web']],
        // 'jqadm' => ['prefix' => 'admin/{site}/jqadm', 'middleware' => ['web', 'auth']],
        // 'extadm' => ['prefix' => 'admin/{site}/extadm', 'middleware' => ['web', 'auth']],
        // 'jsonadm' => ['prefix' => 'admin/{site}/jsonadm', 'middleware' => ['web', 'auth']],
        // 'jsonapi' => ['prefix' => 'jsonapi', 'middleware' => ['api']],
        // 'account' => ['middleware' => ['web', 'auth']],
        // 'default' => ['middleware' => ['web']],
        // 'confirm' => ['middleware' => ['web']],
        // 'update' => [],
    ],

    'page' => [
        // 'account-index' => array( 'account/profile','account/history','account/favorite','account/watch','basket/mini','catalog/session' ),
        // 'basket-index' => array( 'basket/standard','basket/related' ),
        // 'catalog-count' => array( 'catalog/count' ),
        // 'catalog-detail' => array( 'basket/mini','catalog/stage','catalog/detail','catalog/session' ),
        // 'catalog-list' => array( 'basket/mini','catalog/filter','catalog/stage','catalog/lists' ),
        // 'catalog-stock' => array( 'catalog/stock' ),
        // 'catalog-suggest' => array( 'catalog/suggest' ),
        // 'checkout-confirm' => array( 'checkout/confirm' ),
        // 'checkout-index' => array( 'checkout/standard' ),
        // 'checkout-update' => array( 'checkout/update'),
    ],

    /*
	'resource' => array(
		'db' => array(
			'adapter' => env('DB_CONNECTION', 'mysql'),
			'host' => env('DB_HOST', 'localhost'),
			'port' => env('DB_PORT', ''),
			'socket' => '',
			'database' => env('DB_DATABASE', 'laravel'),
			'username' => env('DB_USERNAME', 'root'),
			'password' => env('DB_PASSWORD', ''),
			'stmt' => array( "SET NAMES 'utf8'", "SET SESSION sql_mode='ANSI'" ),
		),
	),
	*/

    'admin' => [],

    'client' => [
        'html' => [
            'common' => [
                'content' => [
                    // 'baseurl' => '/',
                ],
                'template' => [
                    // 'baseurl' => 'packages/aimeos/shop/themes/elegance',
                ],
            ],
        ],
    ],

    'controller' => [
    ],

    'i18n' => [
    ],

    'madmin' => [
    ],

    'mshop' => [
    ],


    'command' => [
    ],

    'frontend' => [
    ],

    'backend' => [
    ],
];
