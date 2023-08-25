<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style3.css">
    <title>Register form</title>
</head>
<body>
    <div class="fc">
        <form action="register_post.php" method="POST">
            <h3>Register now</h3>
            
            <!-- same user starts -->
            <?php 
            if(isset($_SESSION['same'])){
            ?>

            <strong style="color:#ff3636; font-size: large;"><?=$_SESSION['same']?></strong>

            <?php } ?>
            <!-- same user ends -->



             <!-- name starts -->
             <?php 
            if(isset($_SESSION['name'])){
            ?>

            <strong style="color: antiquewhite;"><?=$_SESSION['name']?></strong>

            <?php } ?>
            <input type="text" name="name" placeholder="name"
            value="<?=(isset($_SESSION['name_value'])?$_SESSION['name_value'] :'')?>">

           
              <!-- name ends -->
               


              <!-- email starts -->
              <?php 
            if(isset($_SESSION['email'])){
            ?>

            <strong style="color: antiquewhite;"><?=$_SESSION['email']?></strong>

            <?php } ?>
            <input type="email" name="email" placeholder="email" 
            value="<?=(isset($_SESSION['email_value'])?$_SESSION['email_value'] : '')?>">

            
            <!-- email ends -->



            <!-- phone starts -->
            <?php 
            if(isset($_SESSION['phone'])){
            ?>

            <strong style="color: antiquewhite;"><?=$_SESSION['phone']?></strong>

            <?php } ?>
            <input type="text" name="phone" 
            value="<?=(isset($_SESSION['phone_value'])?$_SESSION['phone_value'] :'')?>" placeholder="phone number">
           
            <!-- phone ends -->

            <!-- password starts -->
            <?php 
            if(isset($_SESSION['password'])){
            ?>

            <strong style="color: antiquewhite;"><?=$_SESSION['password']?></strong>

            <?php } ?>
           
            <input type="password" name="password" placeholder="password">
           





            <!-- confirm password -->
            
            <?php 
            if(isset($_SESSION['cpassword'])){
            ?>

            <strong style="color: antiquewhite;"><?=$_SESSION['cpassword']?></strong>

            <?php } ?>
            <input type="password" name="cpassword" placeholder="confirm password">

            <!-- password ends -->




            <!-- user type starts-->
           
            <select name="user_type">
                <option value="user">User</option>
                <option hidden="hidden" value="admin">Admin</option>
            </select>
            <!-- user type ends-->

            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>Already have an account? <a href="login_form.php">Login now</a></p>
            <?php 
            if(isset($_SESSION['success'])){
            ?>

            <strong style="color: antiquewhite;"><?=$_SESSION['success']?></strong>

            <?php } ?>
        </form>
    </div>
</body>
<?php

unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['phone']);
unset($_SESSION['password']);
unset($_SESSION['cpassword']);
unset($_SESSION['success']);
unset($_SESSION['same']);
unset($_SESSION['name_value']);
unset($_SESSION['email_value']);
unset($_SESSION['phone_value']);

?>
</html>
