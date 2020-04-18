<?php

    namespace App\Controllers;

    use Ekolo\Framework\Bootstrap\Controller;
    use Ekolo\Framework\Http\Request;
    use Ekolo\Framework\Http\Response;
    use Ekolo\Components\EkoRequest\APIRequest;

    /**
     * Controlleur pour les médias
     */
    class MediasController extends Controller {

        /**
         * Permet de faire l'upload des médias
         * @param Request $request instance de Ekolo\Framework\Http\Request
         * @param Response $response instance de Ekolo\Framework\Http\Response
         */
        public function upload(Request $request, Response $response)
        {
            $vars = [
                'request' => $request,
                'response' => $response
            ];

            APIRequest::postFile(API_URL.'/medias/upload', 'media', $vars, function ($results, $vars) {
                \extract($vars);

                $response->json($results);
            });

        }
    }