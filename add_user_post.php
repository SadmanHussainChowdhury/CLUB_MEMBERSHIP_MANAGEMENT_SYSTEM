<?php
session_start();
require 'db.php';
//$name = mysqli_real_escape_string (db_connection,$_POST['name']);
//escapes special char

//grabing inputs

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$user_type = $_POST['user_type'];
  
//flag to check errors
$flag = true;

//password hash 
$after_hash = password_hash($password,PASSWORD_DEFAULT);

//preg_match: creates criteria
//preg_match() function returns whether a match was found in a string
$upper = preg_match('@[A-Z]@',$password);
$lower = preg_match('@[a-z]@',$password);
$number = preg_match('@[0-9]@',$password);
// $special_char = preg_match('@[#,(,),%,^,&,$]@',$password);

//name 
if(empty($name)){
    $_SESSION['name'] = 'Enter your name';
    $flag = false;
    header('location:add_user.php');
}
//email
if(empty($email)){
   
    $_SESSION['email'] = 'Enter your email';
    $flag = false;
    header('location:add_user.php');
}
else{
    //email format check
    //filter_var() function filters a variable with the specified filter.
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $flag = false;
        $_SESSION['email'] = 'Format did not match';
        header('location:add_user.php');
    }
}
//phone
if(empty($phone)){
    $flag = false;
    $_SESSION['phone'] = 'Enter your phone number';
    header('location:add_user.php');
}

//password
if(empty($password)){
    $flag = false;
    $_SESSION['password'] = 'Enter your password';
    header('location:add_user.php');
}else{
    //password check
    if(!$upper || !$lower || !$number || strlen($password)<4){
       
        $_SESSION['password'] = 'Password must contain 1 uppercase,1 lowercase and length should be greater than or equal 4';
        $flag = false;
        header('location:add_user.php');
    }
}
//confirm password
if($password!=$cpassword){
    $flag = false;
    $_SESSION['cpassword'] = 'Password did not match!!';
    header('location:add_user.php');
}

//if all are good then it will enter if clause
if($flag){

    //same user exists or not
    $check_email = mysqli_query($db_connection, "SELECT email FROM users where email = '$email' ");
if(mysqli_num_rows($check_email) > 0){
        $_SESSION['same'] = 'User already exists';
        header('location:add_user.php');
    // echo('Email Already exists');
    //     die();
}
 //same user exists or not ends

 
 //insert starts
    $insert = "INSERT INTO users(name,email,phone,password,user_type)VALUES('$name','$email','$phone','$after_hash','$user_type')";
    mysqli_query($db_connection,$insert);
    $_SESSION['success'] = 'Registered successfully';
    header('location:add_user.php');
}else{
    //if any field error occurs , it will enter else clause
    $_SESSION['name_value'] = $name;
    $_SESSION['email_value'] = $email;
    $_SESSION['phone_value'] = $phone;
    header('location:add_user.php');

}


?>