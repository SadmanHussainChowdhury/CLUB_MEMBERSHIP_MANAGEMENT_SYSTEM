
<?php
session_start();
require 'login_check.php';
require 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$userid = $_POST['id'];


if(empty($password)){
    $update = "UPDATE users SET name='$name',email='$email',phone='$phone' WHERE id=$userid";
    mysqli_query($db_connection,$update);
    header('location:user_profile.php');
}
else{
    $update = "UPDATE users SET name='$name',
    email='$email',
    phone='$phone',password='$password'WHERE id=$userid ";
    mysqli_query($db_connection,$update);
    header('location:user_profile.php');
}


  


?>
