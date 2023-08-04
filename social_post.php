<?php
require 'db.php';

$icon = $_POST['icon'];
$link = $_POST['link'];
$t = "INSERT INTO social(icon,link)VALUES('$icon','$link')";
mysqli_query($db_connection, $t);

header('location:dashboard_social.php');


?>