<?php
//session_start();
require 'header_one.php';
require 'login_check.php';
require 'db.php';

?>

<!-- ////////////////////// FOrm ////////////////////////////////// -->



<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit Icon</h2>
      <?php
      $icons = array(
        "uil uil-facebook",
        "uil uil-facebook-f",
        "uil uil-instagram-alt",
        "uil uil-instagram",
        "uil uil-telegram-alt",
        "uil uil-telegram",
        "uil uil-youtube",
        "uil uil-linkedin",
        "uil uil-linkedin-alt",
        "uil uil-twitter",
        "uil uil-twitter-alt",
        "uil uil-google-hangouts",
        "uil uil-medium-m",
        "uil uil-google-drive-alt"

    
    );
      
      ?>
       
        <form action="social_post.php" method="POST">

        <div class="form__control" style="background-color: black; display: inline;">
           <?php foreach ($icons as $icon) { ?>
            <i style="color: white; font-size: 30px;" class="uil <?=$icon?>"></i>
            <?php }?>
           </div>
           
           <div class="form__control">
            <input type="text" name="icon" placeholder="Icon class" id="icon">
           </div>

           <div class="form__control">
            <input type="text" name="link" placeholder="Link">
           </div>

           
           
            <button type="submit" class="btn">Update icon</button>
            
        </form>
    </div>
</section>


<!-- /////////////////////////////////// -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$('.uil').click(function(){
        var icon_class = $(this).attr('class');
        $('#icon').attr('value', icon_class);
    })
</script>
<!-- < ?php
unset($_SESSION['error']);

?> -->