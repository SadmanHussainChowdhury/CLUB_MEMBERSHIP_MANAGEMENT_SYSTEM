<?php
//session_start();
require 'header_one.php';
require 'login_check.php';


?>

<!-- ////////////////////// FOrm ////////////////////////////////// -->



<section class="form__section">
    <div class="container form__section-container">
        <h2>Add User</h2>
        <!-- success starts-->
        <?php
        if (isset($_SESSION['success'])) {
        ?>
            <div class="alert__message success">
                <p><?= $_SESSION['success'] ?></p>
            </div>

        <?php } ?>
        <!-- success ends-->
        <!-- same user starts -->
        <?php
        if (isset($_SESSION['same'])) {
        ?>
         <div class="alert__message error">
                <p><?= $_SESSION['same'] ?></p>
            </div>

        <?php } ?>
        <!-- same user ends -->
        <!-- name starts  -->
        <?php
        if (isset($_SESSION['name'])) {
        ?>
         <div class="alert__message error">
                <p><?= $_SESSION['name'] ?></p>
            </div>

        <?php } ?>
        <!-- name ends -->
        <!-- email starts -->
        <?php
        if (isset($_SESSION['email'])) {
        ?>
         <div class="alert__message error">
                <p><?= $_SESSION['email'] ?></p>
            </div>

        <?php } ?>
        <!-- email ends -->
        <!-- phone starts -->
        <?php
        if (isset($_SESSION['phone'])) {
        ?>
         <div class="alert__message error">
                <p><?= $_SESSION['phone'] ?></p>
            </div>

        <?php } ?>
        <!-- phone ends -->



        <!-- password s -->
        <?php
        if (isset($_SESSION['password'])) {
        ?>
         <div class="alert__message error">
                <p><?= $_SESSION['password'] ?></p>
            </div>

        <?php } ?>
        <!-- password ends -->
        
        <?php
        if (isset($_SESSION['cpassword'])) {
        ?>
         <div class="alert__message error">
                <p><?= $_SESSION['cpassword'] ?></p>
            </div>

        <?php } ?>





        <form action="add_user_post.php" method="POST">

            <input type="text" placeholder="name" name="name">
            <input type="email" placeholder="Email" name="email">
            <input type="text" placeholder="phone" name="phone">
            <input type="password" placeholder="Password" name="password">
            <input type="password" placeholder="Confirm Password" name="cpassword">

            <select name="user_type" id="">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <!-- <div class="form__control">
            <label for="avater">Add avater</label>
            <input type="file" name="" id="avater">
           </div> -->

            <button type="submit" class="btn">Add user</button>

        </form>
    </div>
</section>


<!-- /////////////////////////////////// -->

<?php
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['phone']);
unset($_SESSION['password']);
unset($_SESSION['cpassword']);
unset($_SESSION['success']);
unset($_SESSION['same']);
?>