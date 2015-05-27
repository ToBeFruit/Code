<!DOCTYPE html>
<html>
<head lang="en">
    <link rel="stylesheet" type="text/css" href="Transaction.css">
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

<div id="annonce">

    <table>
        <tr>
            <td colspan="3"> Annonce 1</td>
        </tr>
        <tr>
            <td><img class="imageannonce" src="cerises.png"></td>
            <td>
            <p> Je vend des tomates cerises pas très chere ceuillis dams mon jardin mardi dernier. Mon cerisier est
                exposé plein sud tout au long de l'année ce qui rend mes cerises plus sucrée que d'origine</p>
            </td>
            <td> <input type="submit" value="ajouter au panier"/></td>
        </tr>
        <tr>
            <td colspan="3"> Annonce 2</td>
        </tr>
        <tr>
            <td><img class="imageannonce" src="Cerises.png"></td>
            <td>
                <p> Je vend des cerises pas très chere ceuillis dams mon jardin mardi dernier. Elles sont fermes et
                    goutue. Penser à les préparer en salade, c'est une affaire</p>
            </td>
            <td> <input type="submit" value="ajouter au panier"</td>
        </tr>
        <tr>
            <td colspan="3"> Annonce 3</td>
        </tr>
        <tr>
            <td><img class="imageannonce" src="Cerises.png"></td>
            <td>
                <p> Je vend des carottes pas très chere ceuillis dams mon jardin mardi dernier. Elles ont été
                dévorés par les oiseaux et ont des vers mais j'ai besoin de tunes achetez les !</p>
            </td>
            <td> <input type="submit" value="ajouter au panier"</td>
        </tr>
    </table>
</div>

<?php include('footer.html') ?>

</body>
</html>