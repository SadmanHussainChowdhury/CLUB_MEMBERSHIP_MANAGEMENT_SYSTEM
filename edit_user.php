<?php
require 'header_one.php';
require 'login_check.php';
require 'db.php';
$id = $_GET['id'];
$selectUser = "SELECT * FROM users WHERE id=$id";
$selectUser_user = mysqli_query($db_connection,$selectUser);
$after_assoc_single_user = mysqli_fetch_assoc($selectUser_user);

?>


<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit User</h2>
        
        <form action="edit_user_post.php" method="POST">
           
            <input type="hidden" name="id" value="<?=$after_assoc_single_user['id']?>">
            <input type="text" name="name" value="<?=$after_assoc_single_user['name']?>">
            <input type="text" name="email" value="<?=$after_assoc_single_user['email']?>">
            <input type="text" name="phone" value="<?=$after_assoc_single_user['phone']?>">
       

         
            <select name="user_type" value="<?=$after_assoc_single_user['user_type']?>">
                <option value="user">User</option>
                <option value="admin">Admin</option>   
            </select>
          
           
            <button type="submit" class="btn">Update user</button>
            
        </form>
    </div>
</section>


<!-- /////////////////////////////////// -->
<?php require 'footer_one.php'?>