<?php
    require __DIR__ . '/../app/src/app.php';
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact form</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../app/css/styles.css" rel="stylesheet" type="text/css">

        <script src="https://code.jquery.com/jquery-3.4.0.min.js" type="text/javascript"></script>
    </head>

    <body>
        <?php
            include('../app/views/header.php');
        ?>
        <div id="backgroundStyle">
        <?php
            include('../app/views/content.php');
        ?>
        </div>
        <div class="footer">
			<?php
               include('../app/views/footer.php');
            ?>
		</div>
    </body>

</html>
