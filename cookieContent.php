<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 5 Partie 8</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <form method="post" action="cookieContent.php">
                <input type="text" placeholder="Login" name="id" />
                <input type="password" placeholder="Mot de passe" name="password" />
                <input type="submit" name="submitBtn" value="Mettre à jour le cookie" />
            </form>
            <?php
            echo sprintf('Bonjour %s, après mise à jour, ton mot de passe est: %s', $_COOKIE['login'], $_COOKIE['password']);
            setcookie('login', $_POST['id'], time() + 365 * 24 * 3600, '/');
            setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, '/');
            ?>
        </div>
    </body>
</html>
