<?php
//session_start();
require 'header_one.php';
require 'db.php';



?>
<!DOCTYPE html>
<html>
<head>
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
</head>
<body>
   
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


