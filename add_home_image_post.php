<?php
session_start();

require 'db.php';

$image = $_FILES['image'];
$after_explode = explode('.',$image['name']);
$extension = end($after_explode);
$allowed_extension = array('png','jpg','gif','PNG','JPG','webp');
$lname = $image['name'];

if(in_array($extension,$allowed_extension)){
    if($image['size']<=1000000){
        $insert = "INSERT INTO image (image)VALUES('$lname')";
        mysqli_query($db_connection,$insert);
        $last_id = mysqli_insert_id($db_connection);
        
        //file naming
        $file_name = $last_id.'.'.$extension;
        $new_location ='./uploads/image/'.$file_name;
        move_uploaded_file($image['tmp_name'],$new_location);
        $update = "UPDATE image SET image='$file_name' WHERE id=$last_id";
        mysqli_query($db_connection,$update);
        header('location:dashboard_image.php'); 

    }else{
        $_SESSION['error']='File size exceed';
        header('location:dashboard_image.php'); 
    }

}else{
    $_SESSION['error']='Invalid Extension';
    header('location:dashboard_image.php');
}

?>