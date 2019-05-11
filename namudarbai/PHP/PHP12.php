<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP12 | namu darbai</title>
</head>

<body>
    <?php
    if(isset($_POST['submit'])) {
        if($_POST['name'] && $_POST['lastName']){
            echo 'Sveiki ' .$_POST['name'] . ' ' . $_POST['lastName'];
        } else {
        echo 'Who are you?';
        }
    } else { ?>

    <form action="<?php $_PHP_SELF; ?>" method="post">
        Name: <input type="text" name="name"/>
        lastName: <input type="text" name="lastName"/>
        <input type="submit" name="submit"/>
    </form>
   <?php } ?>
</body>
</html>
