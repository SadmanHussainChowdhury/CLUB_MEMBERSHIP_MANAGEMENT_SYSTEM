<?php
//session_start();
// if(!isset($_SESSION)) 
// { 
//     session_start(); 
// } 
session_status() === PHP_SESSION_ACTIVE ?: session_start();



require 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

//Associative arrays are arrays that use named keys that you assign to them. 
//mysqli_fetch_assoc(); Fetch a result row as an associative array


//check if this mail has in database
$select1 = "SELECT COUNT(*) as gotit FROM users WHERE email='$email'";
$select_res1 = mysqli_query($db_connection,$select1);
$after_assoc1 = mysqli_fetch_assoc($select_res1);

//if yes then verify
if($after_assoc1['gotit']==1){
    $select2 ="SELECT * FROM users WHERE email='$email'";
    $select2_res = mysqli_query($db_connection, $select2);
    $after_assoc2 = mysqli_fetch_assoc($select2_res);


    if($after_assoc2['user_type']=='admin'){
        $_SESSION['admin'] = 'admin';

        ////
        if(password_verify($password,$after_assoc2['password'])){
            $_SESSION['login'] = 'loged in';
            $_SESSION['id'] = $after_assoc2['id'];
            header('location:dashboard_user.php');
        }else{
            $_SESSION['wrong_pass'] = 'Wrong password';
            header('location:login_form.php');
        }
    }else if($after_assoc2['user_type']=='user'){
        $_SESSION['user'] = 'user';
        ////
        if(password_verify($password,$after_assoc2['password'])){
            $_SESSION['login'] = 'loged in';
            $_SESSION['id'] = $after_assoc2['id'];//for displaying profile pic in nav
            header('location:event_user.php');
        }else{
            $_SESSION['wrong_pass'] = 'Wrong password';
            header('location:login_form.php');
        }
    }


}else{
    $_SESSION['invalid'] = 'Invalid email!!';
    header('location:login_form.php');
}



?>