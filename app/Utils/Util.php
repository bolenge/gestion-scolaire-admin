<?php

    namespace App\Utils;

    use OpenApi\Annotations as OA;

    /**
     * Util principal
     */
    trait Util
    {
        /**
         * L'objet de retour
         * @var array
         */
        protected $objetRetour = [
            'success' => false,
            'message' => '',
            'errors' => null,
            'results' => null
        ];
    }
    
