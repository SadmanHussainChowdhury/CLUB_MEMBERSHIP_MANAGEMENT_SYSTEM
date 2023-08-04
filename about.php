<?php
//session_start();
require 'header_one.php';
require 'login_check.php';
require 'db.php';

?>

<!-- ////////////////////// FOrm ////////////////////////////////// -->



<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Contact</h2>
        <?php
        if (isset($_SESSION['error'])) {
        ?>
            <div class="alert__message error">
                <p><?= $_SESSION['error'] ?></p>
            </div>

        <?php } ?>
       
        <form action="about_post.php" method="POST">
           
           <div class="form__control">
            <input type="text" name="address" placeholder="Address">
           </div>
           <div class="form__control">
            <input type="email" name="email" placeholder="Email">
           </div>
           <div class="form__control">
            <input type="number" name="phone" placeholder="Phone Number">
           </div>
           
            <button type="submit" class="btn">Add text</button>
            
        </form>
    </div>
</section>


<!-- /////////////////////////////////// -->

<?php
unset($_SESSION['error']);

?>