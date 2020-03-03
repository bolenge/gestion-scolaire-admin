<?php

    namespace Ekolo\App\Controllers;

    use Ekolo\Framework\Bootstrap\Controller;
    use Ekolo\Framework\Http\Request;
    use Ekolo\Framework\Http\Response;

    class PagesController extends Controller {

        public function index(Request $request, Response $response)
        {
            $response->render('users.liste', [
                'title' => 'Liste des utilisteurs',
                'users' => [
                    'liste' => [
                        'id' => 1,
                        'nom' => 'Bolenge',
                        'prenom' => 'Nancy'
                    ]
                ]
            ]);
        }

    }