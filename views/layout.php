<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= !empty($title) ? $title . ' | ' . config('app.APP_NAME') : config('app.APP_NAME') ?>
        </title>
        <link rel="stylesheet" href="/public/vendor/snackbar/snackbar.css" />
        <link rel="stylesheet" href="/public/css/style.css" />
        <script>
            
        </script>
    </head>
    <body>

    	<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    		<div class="app-main pt-0">
                <?php $page !== "connexion" ? require 'pages/sidebar.php' : '' ?>
        		<?= $content ?>
    		</div>
        </div>
        <script type="text/javascript" src="/public/js/jquery-3.3.1.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="/public/vendor/snackbar/snackbar.js"></script>
        <script type="text/javascript" src="/public/js/main.js"></script>
        <script type="text/javascript" src="/public/js/init.js"></script>
        <script type="module" src="/public/js/router.js" ></script>
        <script>
            
        </script>
    </body>
</html> 