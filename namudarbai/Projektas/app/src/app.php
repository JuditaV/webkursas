<?php
    if(isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        if(!empty($name) && !empty($email) && !empty($message)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $from = "$email";
                $to = "judita_f@yahoo.com";
                $subject = "new message";
                $author = 'From ' . $name . ', ' . $email;
                $clientMessage = htmlspecialchars($message);
                mail($to, $subject, $author, $clientMessage, $from);

        echo "<script>alert('Thank You. Your message received.');</script>";
//        header("Location: ../public/filledForm.php");
//        exit();
        }
    }
    include('db.php');
}
