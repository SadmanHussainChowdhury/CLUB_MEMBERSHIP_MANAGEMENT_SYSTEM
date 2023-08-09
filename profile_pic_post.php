
<?php
session_start();
require 'login_check.php';
require 'db.php';


$userid = $_POST['id'];
$photo = $_FILES['photo'];
//print_r($_FILES['photo']);


$after_explode = explode('.', $photo['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'gif', 'webp', 'PNG', 'JPG');
if (in_array($extension, $allowed_extension)) {
    if ($photo['size'] <= 3000000) {
        //delete previous img starts
        $select_img = "SELECT * FROM users WHERE id=$userid";
        $img_res = mysqli_query($db_connection, $select_img);
        $img_after_assoc = mysqli_fetch_assoc($img_res);
        $delete_from = 'E:\xmpppp\htdocs\dbms\uploads\profile_pic/' . $img_after_assoc['photo'];
        unlink($delete_from);
        //delete previous img ends

        $file_name = $userid . '.' . $extension;
        //echo $file_name;
        // die();

        $new_location = 'E:\xmpppp\htdocs\dbms\uploads\profile_pic/' . $file_name;
        move_uploaded_file($photo['tmp_name'], $new_location);
        $update = "UPDATE users SET photo='$file_name' WHERE id=$userid";
        mysqli_query($db_connection, $update);
        header('location:profile.php');
    } else {
        $_SESSION['img_error'] = 'File size exceed';
        header('location:profile.php');
    }
} else {
    $_SESSION['extension'] = 'Invalid extension';
    header('location:profile.php');
}







?>
