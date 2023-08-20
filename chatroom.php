<?php

require 'db.php';
session_start();



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ChatRoom</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="chatroom.css?<?php echo time(); ?>" />
  
</head>
<body>

<?php include 'navbar_chatroom.php' ?>

<!-- ----------------- -->


  <h1>ChatRoom</h1>
  <div class="chat">
    <h2 style="color:azure">Welcome to <span><?= $_SESSION['name']?></span>'s room</h2>
    <div class="msg">
      


    </div>
    <div class="input_msg">
      <input  type="text" placeholder="Write msg Here" id="input_msg">
      <button style="background-color:green" onclick="update()">Send</button>
    </div>
  </div>
</body>
<script src="js/classroom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>

