<?php
session_start();

require 'db.php';
$admin_id = $_POST['id'];
$file = $_FILES['file'];
$after_explode = explode('.',$file['name']);
$extension = end($after_explode);
$allowed_extension = array('png','jpg','gif','PNG','JPG','webp','pdf','xlsx','docx','pptx');
$lname = $file['name'];

if(in_array($extension,$allowed_extension)){
    if($file['size']<=70000000){
        $insert = "INSERT INTO file (file,admin_id)VALUES('$lname',$admin_id)";
        mysqli_query($db_connection,$insert);
        $last_id = mysqli_insert_id($db_connection);
        
        //file naming
        $file_name = $file['name'];
        $new_location ='./uploads/file/'.$file_name;
        move_uploaded_file($file['tmp_name'],$new_location);
        $update = "UPDATE file SET file='$file_name' WHERE id=$last_id";
        mysqli_query($db_connection,$update);
        header('location:chat.php'); 

    }else{
        $_SESSION['error']='File size exceed';
        header('location:chat.php'); 
    }

}else{
    $_SESSION['error']='Invalid Extension';
    header('location:chat.php');
}

?>