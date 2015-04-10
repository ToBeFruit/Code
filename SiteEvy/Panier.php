/**
* Created by PhpStorm.
* User: AlexisUng
* Date: 07/04/15
* Time: 15:26
*/

<!DOCTYPE html>

<html>
<head>

    <title>Panier</title>
</head>
<body>
<?php include('BaseSite.php'); ?>

<div id="panier">
    <table>
       <tr>
           <td colspan="3">Echanges</td>
       </tr>
        <tr>
            <td><img class="imagepanier" src="Cerise.png" </td>
            <td><p>Description Annonce</p></td>
            <td></td>
        </tr>
        <tr>
            <td><img class="imagepanier" src="Cerise.png"><input type="submit" value="charger image"></td>
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
            <td><img class="imagepanier" src="Mangoustan.png" </td>
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
<?php include('footer.html'); ?>
</body>