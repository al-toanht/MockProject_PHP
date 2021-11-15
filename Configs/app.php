<?php
$config['app'] = [
    'routeMiddleware' => [
        'admin-category' =>AuthMiddleware::class,
        'admin-news' => AuthMiddleware::class,
        'admin-changepassword' => AuthMiddleware::class,
        'login' => LoginMiddleware::class,
    ],
    'boot' => [
        AppServiceProvider::class,
    ],
];
?>