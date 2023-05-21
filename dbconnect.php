<?php

$servername = 'localhost';
$username = 'root';
$password = "";
$db_name = "payment";

$connection = mysqli_connect($servername, $username, $password, $db_name);

if (!$connection) {
    die("connection to the database failed" . mysqli_connect_error());
}
echo "secessfully connected to the database";


?>