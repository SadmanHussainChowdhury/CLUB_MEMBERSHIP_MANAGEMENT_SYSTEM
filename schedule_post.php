<?php
session_start();
require 'db.php';
//$name = mysqli_real_escape_string (db_connection,$_POST['name']);
//escapes special char

//grabing inputs

$room = $_POST['room'];
$topic = $_POST['topic'];
$time = $_POST['time'];


 //insert starts
    $insert = "INSERT INTO schedule(room,topic,time)VALUES('$room','$topic','$time')";
    mysqli_query($db_connection,$insert);
    $_SESSION['success'] = 'Schedule Created Successfully';
    header('location:schedule_dashboard.php');



?>