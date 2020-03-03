<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Erreur <?= !empty($status) ? $status : '' ?></title>
    </head>
    <body>
        <?php if (!empty($content)) : ?>
            <?= $content ?>
        <?php else : ?>
            Une erreur est survenue lors du chargment de la page
        <?php endif ?>
    </body>
</html>