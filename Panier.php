<?php
/**
 * Created by PhpStorm.
 * User: Marine
 * Date: 14/05/15
 * Time: 21:26
 */

?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
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
<div id="panier">
    <table>
        <tr>
            <td colspan="3">Echanges</td>
        </tr>
        <tr>
            <td><img class="imagepanier" src="cerises.png" </td>
            <td><p>Description Annonce</p></td>
            <td></td>
        </tr>
        <tr>
            <td><img class="imagepanier" src="Haricot.png"><input type="submit" value="charger image"></td>
            <td>
                <ul><li>Quantité<select></select></li>
                    <li>Prix<select></select></li>
                    <li>Date<select></select></li>
                </ul>
            </td>
            <td> <input type="submit" value="Proposer l'échange" ></td>
        </tr>
        <tr>
            <td colspan="3">Achats</td>
        </tr>
        <tr>
            <td><img class="imagepanier" src="Pomme_de_terre.png" </td>
            <td>
                <ul><li>Quantité<select></select></li>
                    <li>Prix<select></select></li>
                    <li>Date<select></select></li>
                </ul>
            </td>
            <td><input type="submit" value="valider"> </td>
        </tr>
        <tr>
            <td><img class="imagepanier" src="Carottes.png" </td>
            <td>
                <ul><li>Quantité<select></select></li>
                    <li>Prix<select></select></li>
                    <li>Date<select></select></li>
                </ul>
            </td>
            <td><input type="submit" value="valider"> </td>
        </tr>
    </table>
</div>

</body>
<footer>

</footer>
</html>