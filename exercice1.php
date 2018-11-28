<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1 PHP Partie 8</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">     
            <ul>
                <li><?= sprintf('L\'User agent est: %s', $_SERVER['HTTP_USER_AGENT']); ?></li>
                <li><?= sprintf('L\'Adresse ip est: %s', $_SERVER['REMOTE_ADDR']); ?></li>
                <li><?= sprintf('Le nom du serveur est: %s', $_SERVER['SERVER_NAME']); ?></li>
            </ul>
        </div>
    </body>
</html>