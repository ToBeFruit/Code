<!DOCTYPE html>
<html>
<head lang="en">
    <link rel="stylesheet" type="text/css" href="Vente.css">
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>

<?php include("BaseSite.php"); ?>


<div id="orga">

    <table>

        <tr>
            <td> Région : <select name="region">
                    <option>Bordeaux</option>
                    <option>Paris</option>
                </select>
            </td>

            <td> Produit : <select name="produit">
                    <option>Cerise</option>
                </select>
            </td>

            <td> Transaction : <select name="transaction">
                    <option>Vendre</option>
                    <option>Acheter ou Echanger</option></select>
            </td>
        </tr>

    </table>

</div>

<div id="misevente">

    <table>

        <tr>
            <td> <img class="imagevente" src="cerises.png">
                <input type="submit" value="Charger photo">
            </td>
            <td>
                <ul>
                    <li>Quantitée <input type="text"></li><br />
                    <li>Prix<input type="text"></li><br />
                    <li>Date<input type="text"></li><br />
                </ul>
            </td>
            <td> <p> Espace commentaire ou les gens pourront expliquer ce qu il vende et venter les merites de
                    leurs produits </p></td>
        </tr>
        <tr>
            <td colspan="3"> <input type="submit" value="Mettre en vente"</td>
        </tr>
    </table>
</div>



<?php include('footer.html') ?>

</body>
</html>