<?php
session_start();
include "db.php";

$q = "SELECT * FROM `message`";
if ($rq = mysqli_query($db_connection, $q)) {

  if (mysqli_num_rows($rq) > 0) {

    while ($data = mysqli_fetch_assoc($rq)) {
      if($data["email"]==$_SESSION["email"]){
        ?>
  <p class="sender">
    <span><?= $data["email"] ?></span>
    <?= $data["msg"] ?>
</p>

<?php
      }else{
?>
  <p>
    <span><?= $data["email"] ?></span>
    <?= $data["msg"] ?>
</p>

<?php
      }
    }
  } else {

    echo "<h3> Chat is empty at this moment!!</h3>";
  }
}




?>