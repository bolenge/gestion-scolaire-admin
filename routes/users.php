<?php

    use Ekolo\Framework\Bootstrap\Config;
    use Ekolo\Component\Routing\Router;
    use Ekolo\Framework\Http\Response;
    use Ekolo\Framework\Http\Request;
    
    $router = new Router;

    $router->get('/', 'PagesController@index');
    $router->get('/liste', function ($request, $response) {
        echo "Bonjour";
    });

    return $router;