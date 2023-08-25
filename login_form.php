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
    <title>Login form</title>
</head>

<body>
    <div class="fc">
        <form action="login_post.php" method="POST">
            <h3>Login now</h3>
            <!-- email -->
            <?php
            if (isset($_SESSION['invalid'])) {
            ?>

                <strong style="color:#ff3636; font-size: large;"><?= $_SESSION['invalid'] ?></strong>

            <?php } ?>
            <!-- email -->
            <input type="email" name="email"  placeholder="Enter your email">


            <!-- password -->
            <?php
            if (isset($_SESSION['wrong_pass'])) {
            ?>

                <strong style="color:#ff3636; font-size: large;"><?= $_SESSION['wrong_pass'] ?></strong>

            <?php } ?>
            <!-- password -->

            <input type="password" name="password"  placeholder="Enter your password">



            <input type="submit" name="submit" value="login now" class="form-btn">
             <p>Don't have an account? <a href="pay_info.php">Register now</a></p>


            
        </form>
    </div>
</body>

<?php 

unset($_SESSION['invalid']);
unset($_SESSION['wrong_pass']);

?>
</html>
