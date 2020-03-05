<!DOCTYPE html>
<html lang="fr">

<body>

    <div class="login">
                    
        <?php

            echo $_SESSION['login'];

            // On affiche un lien pour fermer notre session
            echo '<form action="logout.php">

            <input type="submit" value="Deconnexion">

        </form>';

        ?>

    </div>

    <div class="link">
        <ul>
            <li><a href="#">Cantine</a></li>
            <li><a href="#">Commande</a></li>
            <li><a href="#">Link</a></li>
        </ul>
    </div>
    
</body>
</html>