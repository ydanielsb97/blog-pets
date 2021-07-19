<?php

use App\Controllers\HomeController;

$app->group("/api", function ($route) {
    $route->get('/', HomeController::class . ':index');
});

