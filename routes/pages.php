<?php

    use Ekolo\Component\Routing\Router;
    use Ekolo\Framework\Http\Response;
    use Ekolo\Framework\Http\Request;
    
    $router = new Router;


    $router->get('/', function (Request $request, Response $response) {

		$response->render('pages.index', [
            'title' => 'Connexion',
            'page' => 'connexion'
        ]);
    	
    });

    $router->get('/dashboard', function (Request $request, Response $response) {

        $response->render('pages.dashboard', [
            'title' => 'Tableau de board',
            'page' => 'dashboard'
        ]);
        
    });

    return $router;