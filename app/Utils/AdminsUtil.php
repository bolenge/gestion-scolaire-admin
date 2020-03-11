<?php

    namespace App\Utils;

    use OpenApi\Annotations as OA;
    use App\Utils\Util;

    /**
     * Util principal
     */
    trait AdminsUtil
    {
        use Util;
        
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
    
