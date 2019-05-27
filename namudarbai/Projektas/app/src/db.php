<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "projectforma");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if($mysqli->connect_error) {
    echo "Sorry, page faces some issues.\n";
    echo 'Error: ' . $mysqli->connect_error . '\n';
    exit();
}

mysqli_query($mysqli, "INSERT INTO clients (name, email, message) VALUES('$_POST[name]', '$_POST[email]', '$_POST[message]')");

//$sql = "SELECT * FROM clients";
//$result = $mysqli->query($sql);
//$array = $result->fetch_assoc();
//var_dump($array);
