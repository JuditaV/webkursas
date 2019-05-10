<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP14</title>
</head>

<body>
    <?php
        $metai = 2015;
        $dabar = date('Y');

        if($metai < $dabar) {
            echo "&copy; $metai - $dabar ";

        } else {
            echo "&copy; $dabar";
        }
    ?>
</body>
</html>
