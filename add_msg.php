<?php 

include "db.php";
session_start();

$msg = $_GET['msg'];
$email = $_SESSION['email'];

$query = "SELECT * from users where email = '$email'";
if($res = mysqli_query($db_connection,$query))
{
    if(mysqli_num_rows($res)==1)
    {
       $q = "INSERT INTO `message` (`email`, `msg`) VALUES ('$email', '$msg')";
       $res2 = mysqli_query($db_connection, $q);
    }
}

?>