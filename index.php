<?php
    $app = require __DIR__.'/bootstrap/app.php';

    use Ekolo\Framework\Bootstrap\Middleware;

    // Required des routes
    $pages  = require './routes/pages.php';
    $ecoles = require './routes/ecoles.php';
    $admins = require './routes/admins.php';
    
    // Middleware gérant les erreurs (A ne pas enlever ce code)
    $app->middleware('errors', function (Middleware $middleware) {
        $middleware->getError();
    });

    $app->middleware('authAdmin', function (Middleware $middleware) {
        $middleware->check();
    });
    

    // Appel des routes
    $app->use('/', $pages);
    $app->use('/ecoles', $ecoles);
    $app->use('/admins', $admins);