<?php
//session_start();
require 'header_one.php';
require 'login_check.php';


?>

<!-- ////////////////////// FOrm ////////////////////////////////// -->



<section class="form__section">
    <div class="container form__section-container">
        <h2>Add SCHEDULE</h2>
        
        <!-- name starts  -->
        <?php
        if (isset($_SESSION['success'])) {
        ?>
         <div class="alert__message success">
                <p><?= $_SESSION['success'] ?></p>
            </div>

        <?php } ?>
        <!-- name ends -->
    
        <form action="schedule_post.php" method="POST">

            <input type="text" placeholder="Room" name="room">
            <input type="text" placeholder="Topic" name="topic">
            <input type="text" placeholder="Time" name="time">
       
            <button type="submit" class="btn">Add Schedule</button>

        </form>
    </div>
</section>


<!-- /////////////////////////////////// -->
<!-- < ?php require 'footer_one.php'; ?> -->
<?php
unset($_SESSION['success']);
?>