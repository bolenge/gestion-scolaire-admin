<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?> -- Gestion des ecoles</title>
        <link rel="stylesheet" href="/public/css/main.css" />
        <script>
            
        </script>
    </head>
    <body>
    	<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    		<!-- <?php $page !== "connexion" ? require 'pages/nav.php' : '' ?> -->
    		<div class="app-main">
    			<?php $page !== "connexion" ? require 'pages/sidebar.php' : '' ?>
        		<?= $content ?>
    		</div>
        </div>
        <script type="text/javascript" src="/public/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="/public/js/main.js"></script>
        <script type="text/javascript" src="/public/js/init.js"></script>
    </body>
</html> 