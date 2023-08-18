<?php
//session_start();
require 'header_one.php';
require 'db.php';



$sel_cat = "SELECT*FROM category ORDER BY title";
$sc = mysqli_query($db_connection,$sel_cat);

?>

<!-- ////////////////////// FOrm ////////////////////////////////// -->



<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Event</h2>

        <?php
        if (isset($_SESSION['success'])) {
        ?>
            <div class="alert__message success">
                <p><?= $_SESSION['success'] ?></p>
            </div>

        <?php } ?>
        <?php
        if (isset($_SESSION['img_error'])) {
        ?>
            <div class="alert__message error">
                <p><?= $_SESSION['img_error'] ?></p>
            </div>

        <?php } ?>
        <?php
        if (isset($_SESSION['extension'])) {
        ?>
            <div class="alert__message error">
                <p><?= $_SESSION['extension'] ?></p>
            </div>

        <?php } ?>


        <form action="add_events_post.php" method="POST" enctype="multipart/form-data">
           
            <input name="title" type="text" placeholder="Title">
            <textarea name="description" rows="10" placeholder="Description"></textarea>

           
            <select name="category" id="">
            <?php foreach ($sc as $key => $cat) { ?>
                <option value="<?=$cat['id']?>">
                 <?=$cat['title']?>
                 </option>
                <?php }?>
            </select>
          

             <!-- <div class="form__control inline">
                <input type="checkbox" name="is_featured" value="1" checked>
                <label for="is_featured">Featured</label>
            </div>  -->

            <div class="form__control">
           <label for="thumbnail">Add thumbnail</label>
           <input type="file" name="thumbnail" id="thumbnail">
          </div>


            <button type="submit" class="btn">Add event</button>
            
        </form>
        

         
          
         
      
    </div>
</section>


<!-- /////////////////////////////////// -->



<?php 
unset($_SESSION['success']);
unset($_SESSION['img_error']);
unset($_SESSION['extension']);


?>