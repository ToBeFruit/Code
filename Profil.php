<?php
/**
 * Created by PhpStorm.
 * User: Marine
 * Date: 14/05/15
 * Time: 21:26
 */
require('config.php');

?>

<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" src="style.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>To Be Fruit</title>

</head>
<header>
    <?php
    include('header.php');
    include('nav.php');
    ?>

</header>
<body>
<div class="principal">
<form action="Profil.php" method="post">

    <table>

        <tr>

            <td><label for="login"><strong>Nom d'utilisateur :</strong></label></td>
            <td><input type="text" name="login" id="login"/></td>

        </tr>

        <tr>

            <td><label for="pass"><strong>Mot de passe :</strong></label></td>
            <td><input type="password" name="pass" id="pass"/></td>

        </tr>

        <tr>

            <td><label for="pass2"><strong>Confirmez le mot de passe :</strong></label></td>
            <td><input type="password" name="pass2" id="pass2"/></td>
        </tr>

        <tr>
            <td><label for="Email"><strong>Email :</strong></label></td>
            <td><input type="email" name="Email" id="Email"/></td>
        </tr>

    </table>

    <input type="submit" name="register" value="S'inscrire"/>

</form>
    <?php

    if(isset($_POST['register'])){

        if($_POST["pass"] == $_POST["pass2"]){

            $sql="INSERT INTO Users VALUES ('','".$_POST['login']."','".md5($_POST['pass'])."','".$_POST['Email']."')";
            $requet=$bdd->query($sql);

            echo "votre inscription à été prise en compte";

        }

        else{
            echo "les mots de passes ne sont pas les mêmes";

        }
    }
    ?>
</div>

</body>
<footer>

</footer>
</html>

