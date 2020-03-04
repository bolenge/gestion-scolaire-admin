<?php

    namespace App\Controllers;

    use Ekolo\Framework\Bootstrap\Controller;
    use Ekolo\Framework\Http\Request;
    use Ekolo\Framework\Http\Response;

    class PagesController extends Controller {

        /**
         * Renvoi à la page d'accueil
         */
        public function index(Request $request, Response $response)
        {
            $response->render('pages.index', [
                'title' => 'Liste des utilisteurs'
            ]);
        }

        public function contact 

    }