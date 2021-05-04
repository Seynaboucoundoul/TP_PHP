<<<<<<< HEAD
<!DOCTYPE html>

<html>

    <head>

        <title> Ma page </title>

        <meta charset="utf-8">

    </head>

    <body>

      <h1> Bienvenue </h1>

        <?php

            echo 'Bonjour à tous !<br>';
            print 'Bonjour à tous !<br>';

        ?>

    </body>
</html>
=======
<?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
>>>>>>> 58c62f2dbdeba52be2a20fe315226300ac6037ee
