<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Contacts</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../app/css/styles.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.4.0.min.js" type="text/javascript">
        </script>
    </head>

    <body>
        <?php
        include('../app/views/header.php');
        ?>
        <div id="backgroundStyle">
            <div class="filledForm">
                <h4>Thank you for contacting us, we will reach you shortly</h3>
                <h5> Come To Visit Us</h4>
                <div class="map">
                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                    <div class="elfsight-app-2a8a5ad2-0234-4f6e-96ef-155f888f2106"></div>
                </div>
            </div>
        </div>
        <div class="footer">
			<?php
               include('../app/views/footer.php');
            ?>
		</div>
    </body>

</html>
