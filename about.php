<?php
//session_start();

require 'db.php';



?>
<!DOCTYPE html>
<html lang="en">
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 19.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<head>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@600&family=Montserrat+Subrayada:wght@400;700&family=Secular+One&family=Source+Code+Pro:wght@700&family=Zen+Dots&display=swap"
        rel="stylesheet">
 <!-- fonts ends -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLUB MEMBERSHIP MANAGEMENT SYSTEM</title>

    
    <!-- css link starts  -->
    <link rel="stylesheet" href="./style.css">
    <!-- css link starts  -->


    <!-- iconscout cdn link starts  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- iconscout cdn linkends  -->

    <!-- image slider swiper js starts   -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- image slider swiper js ends -->
</head>

<body>

    <!-- start of nav bar -->
    <nav>
        <div class="container nav__container">
            <!-- logo goes here -->
            <a href="index.php" class="nav__logo"><img width="60px" height="60px" src="./uploads/logo/18.png" alt=""></a>


            <!-- navs -->
            <ul class="nav__items">
              <!--<li><a href="payment.php"><b>PAYMENT</b></a></li> -->
                <li><a href="about.php"><b>ABOUT</b></a></li>
               
                <li><a href="login_form.php"><b>LOG IN</b></a></li>

            </ul>
  
        </div>
    </nav>
    <!-- end of nav bar -->

    
    <h1><br></h1>
<h2>Our Committee Members</h2>

<h4>Our membership team is there to help bring members together for meets and events. 
    We host regular club meetings every Thursday evening, and at least one meeting per week</h4>
    <h2><br></h2>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="Yasin.jpg">
      <img src="images/yasin.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Md Yasin</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="Efty.jpg">
      <img src="images/efty.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Efty Shan Abid</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="Sadman.jpg">
      <img src="images/iftikher.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Md. Iftikher Hossain</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="Sadman.jpg">
      <img src="images/sadman.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Sadman Hussain Chowdhury</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="Sakib.jpg">
      <img src="images/sakib.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Sakib Nayan</div>
  </div>
</div>


</body>

</html>









   



