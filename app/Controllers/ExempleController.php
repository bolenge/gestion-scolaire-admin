<?php

    namespace App\Controllers;

    use Ekolo\Framework\Bootstrap\Controller;
    use Ekolo\Framework\Http\Request;
    use Ekolo\Framework\Http\Response;

    class ExempleController extends Controller {

        /**
         * Renvoi à la page d'accueil (de connexion de l'admin)
         * @param Request $request instance de Ekolo\Framework\Http\Request
         * @param Response $response instance de Ekolo\Framework\Http\Response
         */
        public function index(Request $request, Response $response)
        {
            $response->render('pages.index', [
                'title' => 'Connexion',
                'page' => 'connexion'
            ]);
        }
    }