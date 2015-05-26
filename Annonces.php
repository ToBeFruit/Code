<?php

require('config.php');

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" src="style.css" type="text/css" />
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

<?php

    $sql='SELECT * FROM annonce';
    $requet=$bdd->query($sql);

    while ($ann=$requet->fetch()){
        ?> <p style="color:white;"><?= $ann['Product']?>;
        <?= $ann['Description']; ?>
        <?= $ann['Prix']; ?></p>
    <?php
    }


?>


</div>
</body>
<footer>

</footer>
</html>