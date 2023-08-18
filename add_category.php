<?php require 'header_one.php';?>

<!-- ////////////////////// FOrm ////////////////////////////////// -->



<section class="form__section">
    <div class="container form__section-container">
        <h2>Add category</h2>
        
        <?php
        if (isset($_SESSION['success'])) {
        ?>
         <div class="alert__message success">
                <p><?= $_SESSION['success'] ?></p>
            </div>

        <?php } ?>

        <form action="add_category_post.php" method="POST">
           
            <input type="text" placeholder="Title" name="title">
            <textarea rows="4" placeholder="Description" name="description"></textarea>
           
            <button type="submit" class="btn">Add category</button>
            
        </form>
    </div>
</section>


<!-- /////////////////////////////////// -->
<!-- < ?php require 'footer_one.php';?> -->
<?php
unset($_SESSION['success']);
?>