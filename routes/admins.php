<?php

    use Ekolo\Component\Routing\Router;
    use Ekolo\Framework\Http\Response;
    use Ekolo\Framework\Http\Request;
    
    $router = new Router;

    $router->post('/login', 'AdminsController@login');
    $router->get('/logout', 'AdminsController@logout');
    $router->get('/create', 'AdminsController@create');

    return $router;