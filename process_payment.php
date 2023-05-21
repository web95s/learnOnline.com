<?php

include 'dbconnect.php';

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

if (isset($_POST['payment_id']) && isset($_POST['amount']) && isset($_POST['name']) && isset($_POST['className']) && isset($_POST['subjectName'])) {


    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $pay_id = $_POST['payment_id'];
    $className = $_POST['className'];
    $subjectName = $_POST['subjectName'];

    $sql=  "INSERT INTO `received` (`name`, `amount`, `pay_id`, `pay_status`, `date`, `className`, `subjectName`) VALUES ('$name', '$amount', '$pay_id', 'Success', current_timestamp(), '$className', '$subjectName')";


    // $sql = "INSERT INTO `received` (`name`, `amount`, `pay_id`, `pay_status`, `date`, 'className', 'subjectName') VALUES ('$name', '$amount', '$pay_id', 'Success', current_timestamp(),$className, $subjectName)";

    // Perform a query, check for error
    if (!mysqli_query($connection, $sql)) {
        echo ("Error description: " . mysqli_error($con));
    }

    $mysqli->close();

} else {
    die(" throw error");
}


?>