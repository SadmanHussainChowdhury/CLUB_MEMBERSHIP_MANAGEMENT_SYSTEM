<?php
//session_start();
require 'header_one.php';
require 'db.php';

?>

<!-- ////////////////////// FOrm ////////////////////////////////// -->



<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Image</h2>
        <?php
        if (isset($_SESSION['error'])) {
        ?>
            <div class="alert__message error">
                <p><?= $_SESSION['error'] ?></p>
            </div>

        <?php } ?>
       
        <form action="add_home_image_post.php" method="POST" enctype="multipart/form-data">
           
           <div class="form__control">
            <!-- <label for="logo">Add Image</label> -->
            <input type="file" name="image">
           </div>
           
            <button type="submit" class="btn">Add Image</button>
            
        </form>
    </div>
</section>


<!-- /////////////////////////////////// -->


<?php
unset($_SESSION['error']);

?>