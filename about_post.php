<?php

require 'db.php';

$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$t = "INSERT INTO about(address,email,phone)VALUES('$address','$email','$phone')";
mysqli_query($db_connection, $t);

header('location:dashboard_about.php');


?>