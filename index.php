<?php
    $app = require __DIR__.'/bootstrap/app.php';

    use Ekolo\Framework\Bootstrap\Middleware;

    // Required des routes
    $users = require './routes/users.php';

    // Middleware gérant les erreurs (A ne pas enlever ce code)
    $app->middleware('errors', function (Middleware $middleware) {
        $middleware->getError();
    });
    

    // Appel des routes
    $app->use('/', $users);