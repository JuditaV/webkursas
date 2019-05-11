<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP11 | namu darbai</title>
</head>

<body>
    <?php
    function plotas ($a, $b) {
        $plotas = $a * $b;
        return $plotas;
    }
    if(isset($_POST['mygtukas'])) {
        if($_POST['ilgis'] && $_POST['plotis']) {
            echo 'staciakampio Plotas: ' .plotas($_POST['ilgis'], $_POST['plotis']);
    } else {
            echo ' iveskit visus skaicius';
        }
    } else { ?>

    <form action="<?php $_PHP_SELF; ?>" method="post">
       <p>ilgis: <input type="number" name="ilgis"/></p>
       <p>plotis: <input type="number" name="plotis"/></p>
        <input type="submit" value="send" name = "mygtukas"/>
    </form>
    <?php } ?>
</body>
</html>
