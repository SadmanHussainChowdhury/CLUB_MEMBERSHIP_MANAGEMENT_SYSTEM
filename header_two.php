<?php
require 'db.php';
//session start causes some problems
session_start();

//user
$profile_id = $_SESSION['id'];
$select_loggedin_user = "SELECT * FROM users WHERE id=$profile_id";
$select_loggedin_user_result = mysqli_query($db_connection,$select_loggedin_user);
$select_loggedin_user_result_after_assoc = mysqli_fetch_assoc($select_loggedin_user_result);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMMS</title>
    <!-- css link starts  -->
    <link rel="stylesheet" href="./style2.css">
    <!-- css link starts  -->
    <!-- iconscout cdn link starts  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> 
    <!-- iconscout cdn linkends  -->
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@600&family=Montserrat+Subrayada:wght@400;700&family=Secular+One&family=Source+Code+Pro:wght@700&family=Zen+Dots&display=swap"
        rel="stylesheet">
</head>

<body>
 <!-- start of nav bar -->
 <nav>
    <div class="container nav__container">
        <!-- logo goes here -->
        <a href="index.html" class="nav__logo"><?=$select_loggedin_user_result_after_assoc['name']?></a>
        <ul class="nav__items">
            
            
            <li><a href="schedule_user.php"><b>SCHEDULE</b></a></li>
            

            <li class="nav__profile">
                <div class="avater">
                    <?php 
                    if($select_loggedin_user_result_after_assoc['photo']==null){?>
                    <img src="./images/photo.jpg">
                    <?php }else{?>
                        <img width="60px" height="60px" src="./uploads/profile_pic/<?=$select_loggedin_user_result_after_assoc['photo'] ?>" alt="">
                    <?php }?>
                    
                </div>

                <ul>
                    <li><a href="profile.php">PROFILE</a></li>
                    
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>


            </li>
        </ul>
        <!-- small screen -->
        <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
        <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
    </div>
</nav>
<!-- end of nav bar -->