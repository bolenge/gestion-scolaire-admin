<?php

    namespace App\Middleware;

    use Ekolo\Framework\Bootstrap\Middleware;
    use Ekolo\Framework\Http\Request;
    use Ekolo\Framework\Http\Response;

    class AuthAdminMiddleware extends Middleware
    {
        /**
         * Gère la redirection de l'admin quand il est connecté ou pas
         * @return void
         */
        public function check()
        {
            if ($this->isLogged()) {
                if ($this->request->uri() === '/') {
                    $this->response->redirect('/dashboard');
                }
            }else {
                if ($this->request->uri() !== '/' && $this->request->uri() !== '/admins/login') {
                    $this->response->redirect('/');
                }
            }
        }

        /**
         * Détecte si l'admin est connecté ou pas
         * @return bool
         */
        public function isLogged()
        {
            return \session()->has('admin') ? !empty(\session()->get('admin')['is_logged']) : false;
        }
    }
    