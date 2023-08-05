<?php
session_start();
require 'db.php';
$id = $_GET['id'];


 //delete previous img starts
 $select_img = "SELECT * FROM users WHERE id=$id";
 $img_res = mysqli_query($db_connection, $select_img);
 $img_after_assoc = mysqli_fetch_assoc($img_res);
 $delete_from = 'E:\xmpppp\htdocs\dbms\uploads\profile_pic/' . $img_after_assoc['photo'];
 unlink($delete_from);
 //delete previous img ends


$delete = "DELETE FROM users WHERE id=$id";
mysqli_query($db_connection,$delete);
$_SESSION['delete'] = 'User deleted successfully';
header('location:dashboard_user.php');


?>