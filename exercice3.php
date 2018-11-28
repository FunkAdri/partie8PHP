<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3 PHP Partie 8</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <form method="post">
                <input type="text" name="id" placeholder="Pseudo" />
                <input type="password" name="password" placeholder="Mot de passe" />
                <input type="submit" name="submitbtn" value="Valider" />
            </form>
            <?php var_dump($_COOKIE) ?>
        </div>
    </body>
</html>