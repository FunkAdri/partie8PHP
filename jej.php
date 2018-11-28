<!-- On remet le session_start() ici pour accéder aux variables de session -->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2 Partie 8 PHP</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="oui">
            <!-- On affiche les variables de session -->
            <p><?= sprintf('Bonjour %s %s', $_SESSION['firstName'], $_SESSION['lastName']); ?></p>
    </body>
</html>
<?php session_write_close(); ?>
