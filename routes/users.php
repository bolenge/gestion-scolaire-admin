<?php

    use Ekolo\Component\Routing\Router;
    use Ekolo\Framework\Http\Response;
    use Ekolo\Framework\Http\Request;
    
    $router = new Router;

    $router->get('/creation', function (Request $request, Response $response) {

		$response->render('users.creation', [
            'title' => "Création d'un utilisateur",
            'page' => 'create_user'
        ]);
    	
    });

    $router->get('/liste', function (Request $request, Response $response) {

        $response->render('pages.dashboard', [
            'title' => 'Tableau de board',
            'page' => 'dashboard'
        ]);
        
    });

    return $router;