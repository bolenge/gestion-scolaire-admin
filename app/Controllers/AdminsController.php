<?php

    namespace App\Controllers;

    use Ekolo\Framework\Bootstrap\Controller;
    use Ekolo\Framework\Http\Request;
    use Ekolo\Framework\Http\Response;
    use Ekolo\Components\EkoRequest\APIRequest;

    use App\Utils\AdminsUtil;

    class AdminsController extends Controller {

        use AdminsUtil;

        /**
         * Permet de faire connecter un admin
         * @param Request $request instance de Ekolo\Framework\Http\Request
         * @param Response $response instance de Ekolo\Framework\Http\Response
         */
        public function login(Request $request, Response $response)
        {
            $vars = [
                'request' => $request,
                'response' => $response
            ];

            if ($request->ajax()) {
                APIRequest::post(API_URL.'/admins/login', $request->body()->all(), $vars, function ($results, $vars) {
                    \extract($vars);

                    if (!empty($results)) {
                        if ($results->success) {
                            $admin = $results->results;

                            session()->set('admin', [
                                'role' => $admin->role,
                                'id_admin' => $admin->id,
                                'username' => $admin->username,
                                'is_logged' => true
                            ]);
                        }
                    }else {
                        $results = [
                            'success' => false,
                            'message' => '',
                            'errors' => [
                                'warning' => "Une erreur est survenue lors de la connexion (si cette erreur persiste veuillez contacter l'équipe du développement UHTEC"
                            ],
                            'results' => null
                        ];
                    }
                    
                    $response->json($results);
                });
            }
        }

        /**
         * Permet de faire déconnecter un admin
         * @param Request $request instance de Ekolo\Framework\Http\Request
         * @param Response $response instance de Ekolo\Framework\Http\Response
         */
        public function logout(Request $request, Response $response)
        {
            \session()->replace([]);
            $response->redirect('/');
        }

        /**
         * Renvoi à la page de la création d'un admin
         * @param Request $request instance de Ekolo\Framework\Http\Request
         * @param Response $response instance de Ekolo\Framework\Http\Response
         */
        public function create(Request $request, Response $response)
        {
            $response->render('admins.create', [
                'title' => "Création d'un utilisateur",
                'page' => 'create_user'
            ]);
        }

        /**
         * Renvoi à la page de la liste des admins admin
         * @param Request $request instance de Ekolo\Framework\Http\Request
         * @param Response $response instance de Ekolo\Framework\Http\Response
         */
        public function liste(Request $request, Response $response)
        {
            $response->render('pages.dashboard', [
                'title' => 'Tableau de board',
                'page' => 'dashboard'
            ]);
        }
    }