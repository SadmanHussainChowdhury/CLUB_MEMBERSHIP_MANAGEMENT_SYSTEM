<?php
session_start();
require 'db.php';
$id = $_GET['id'];

$delete = "DELETE FROM schedule WHERE id=$id";
mysqli_query($db_connection,$delete);
$_SESSION['delete'] = 'Schedule deleted successfully';
header('location:schedule_dashboard.php');


?>