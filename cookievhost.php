<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3 Partie 8 PHP</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?= $_COOKIE['login']; ?>
            <?= $_COOKIE['password']; ?>
        </div>
    </body>
</html>
