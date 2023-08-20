
<?php
//session_start();
require 'header_one.php';
require 'login_check.php';
require 'db.php';

$select = "SELECT * FROM users";
$select_users = mysqli_query($db_connection,$select);

?>

<!-- /////////////////////////////////////////// -->
<section class="dashboard">
    <div class="container dashboard__container">
        <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-arrow-circle-right"></i></button>
        <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-arrow-circle-left"></i></button>
        <aside>
            <ul>
                
            
                    

                

                <li><a href="add_user.php"><i class="uil uil-pen"></i>
                        <h5>Add users</h5>
                    </a></li>

                <li><a href="dashboard_user.php"><i class="uil uil-users-alt"></i>
                        <h5>Manage users</h5>
                    </a></li>

                

                

                   
               
 
                    

                    

                  
                    

                    
                  

                   
                
                
                
             
            </ul>
        </aside>
        <main>
            <h2>Manage Users</h2>

            <?php 
            if(isset($_SESSION['delete'])){
            ?>

            <strong style="color:#ff3636; font-size: large;"><?=$_SESSION['delete']?></strong>

            <?php } ?>

            <table>
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Type</th>   
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Photo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($select_users as $key => $user) { ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$user['name']?></td>
                        <td><?=$user['email']?></td>
                        <td><?=$user['phone']?></td>
                        <td><?=$user['user_type']?></td>
                        <td><a href="edit_user.php?id=<?=$user['id']?>" class="btn sm">Edit</a></td>
                        <td><a href="delete_user_post.php?id=<?=$user['id']?>" class="btn danger">Delete</a></td>
                        <td><img width="100px" height="100px" src="./uploads/profile_pic/<?=$user['photo']?>" alt=""></td>
                    </tr>
                 <?php }?>
                   
                   
                 
                   
                </tbody>
            </table>
        </main>
    </div>
</section>
<!-- /////////////////////////////////////////// -->




<?php 
unset($_SESSION['delete']);
?>




