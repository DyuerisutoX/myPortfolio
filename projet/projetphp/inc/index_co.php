<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/test.css">
        <title>AFPAR</title>
    </head>

    <header>

        <?php include ('inc/header_prof.php'); ?>

    </header>

    <body>

        <div class="box">

            <main>

                <nav class="liseré">

                    <?php include('inc/nav_prof.php'); ?>

                </nav>

                <div id="corps">

                    <?php

                        if(isset($_GET['corps'])) {

                            $corps = $_GET['corps'];

                            switch ($_GET['corps']){

                            case ('profil'):
                            include('inc/profil.php');
                            break;

                            case ('accueil'):
                            include('inc/accueil.php');
                            break;

                            case ('centres'):
                            include('inc/centres.php');
                            break;

                            case ('formations'):
                            include('inc/formations.php');
                            break;
                        }

                        }

                    ?>

                </div>

            </main>

        </div>
        
    </body>

</html>