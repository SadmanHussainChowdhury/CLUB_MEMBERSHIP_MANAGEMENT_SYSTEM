<?php
//require 'header_two.php';


    require 'header_one.php';

require 'db.php';
require 'login_check.php';


?>

  <!-- ========================= start of post ======================================== -->
<section class="singlepost">
    <div class="container singlepost__container">
        <h1>Profile</h2>
        <div class="post__author">
           
            <div class="post__author-info">
                <h2 style="color: coral;"><?=$select_loggedin_user_result_after_assoc['name']?></h2> 
            </div>
        </div>
        <div class="singlepost__thumbnail">
        <?php 
                    if($select_loggedin_user_result_after_assoc['photo']==null){?>
                    <img src="./images/photo.jpg">
                    <?php }else{?>
                        <img src="./uploads/profile_pic/<?=$select_loggedin_user_result_after_assoc['photo'] ?>" alt="">
                    <?php }?>



            <!-- <img src="./uploads/profile_pic/<?=$select_loggedin_user_result_after_assoc['photo'] ?>" alt=""> -->
        </div>

        <?php 
            if(isset($_SESSION['img_error'])){
            ?>

            <strong style="color:#ff3636; font-size: large;"><?=$_SESSION['img_error']?></strong>

            <?php } ?>
            
            <?php 
            if(isset($_SESSION['extension'])){
            ?>

            <strong style="color:#ff3636; font-size: large;"><?=$_SESSION['extension']?></strong>

            <?php } ?>

             <!-- form  -->
      
    
        <h2>UPDATE YOUR INFORMATION</h2>
      
        <form action="user_profile_post.php" method="POST" enctype="multipart/form-data">

        <input style="background: #665B50;" type="hidden"  name="id" value="<?=$select_loggedin_user_result_after_assoc['id']?>">

            <input style="background: #665B50;" type="text"name="name" value="<?=$select_loggedin_user_result_after_assoc['name']?>">

            <input style="background: #665B50;" type="email"  name="email" value="<?=$select_loggedin_user_result_after_assoc['email']?>">

            <input style="background: #665B50;" type="text" name="phone" value="<?=$select_loggedin_user_result_after_assoc['phone']?>">

            <input style="background: #665B50;" type="password" placeholder="Password" name="password">

            <!-- <input style="background: #665B50;" type="password" placeholder="Confirm Password" name="cpassword"> -->

          

            <button type="submit" class="btn">UPDATE</button>

        </form>
   
<div>
<form action="user_profile_pic_post.php" method="POST" enctype="multipart/form-data">

        <input style="background: #665B50;" type="hidden"  name="id" value="<?=$select_loggedin_user_result_after_assoc['id']?>">

            <div class="form__control">
            <label for="photo">Add Photo</label>
            <input style="background: #665B50;" type="file" name="photo">
           </div>
           
            <button type="submit" class="btn">UPDATE</button>

        </form>
</div>


      <!-- form -->
    </div>
</section>
    </div>
       
 
  <!-- =========================End of post ======================================== -->

  <!-- < ?php require 'footer_one.php';?> -->
  <?php 
  unset($_SESSION['img_error']);
  unset($_SESSION['extension']);
  ?>










