
<?php
//session_start();
require 'header_one.php';
require 'login_check.php';
require 'db.php';

$select = "SELECT * FROM category ORDER BY title";
$select_category = mysqli_query($db_connection,$select);

?>
<!-- /////////////////////////////////////////// -->
<section class="dashboard">
    <div class="container dashboard__container">
        <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-arrow-circle-right"></i></button>
        <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-arrow-circle-left"></i></button>
        <aside>
            <ul>
            <li><a href="add_events.php"><i class="uil uil-pen"></i>
                        <h5>Add event</h5>
                    </a></li>
                    

                <li><a href="dashboard_events.php"><i class="uil uil-postcard"></i>
                        <h5>Manage Event</h5>
                    </a></li>

                <li><a href="add_user.php"><i class="uil uil-pen"></i>
                        <h5>Add users</h5>
                    </a></li>

                <li><a href="dashboard_user.php"><i class="uil uil-users-alt"></i>
                        <h5>Manage users</h5>
                    </a></li>

                <li><a href="add_category.php"><i class="uil uil-pen"></i>
                        <h5>Add Category</h5>
                    </a></li>

                <li><a href="dashboard_category.php"><i class="uil uil-clipboard-notes"></i>
                        <h5>Manage Category</h5>
                    </a></li>
<!-- 
                   <li><a href="add_logo.php" class="active"><i class="uil uil-pen"></i>
                        <h5>Add Logo</h5>
                    </a></li>  -->

                    
                

                    <!-- <li><a href="add_home_image.php"><i class="uil uil-pen"></i>
                        <h5>Add image</h5>
                    </a></li> -->

                    

                    <!-- <li><a href="add_text.php"><i class="uil uil-pen"></i>
                        <h5>Add text</h5>
                    </a></li> -->

                    
                   

                    <!-- contact -->
                    <!-- <li><a href="about.php"><i class="uil uil-pen"></i>
                        <h5>Add contact</h5>
                    </a></li> -->

                  
                     <!-- contact ends -->
                      <!-- about club info -->
                <!-- <li><a href="about-club.php"><i class="uil uil-pen"></i>
                        <h5>Add club info</h5>
                    </a></li> -->

                 
                <!-- about club info -->
                <!-- social -->
               
                <!-- social -->

                <!-- <li><a href="dashboard_messages.php"><i class="uil uil-clipboard-notes"></i>
                        <h5>See Messages</h5>
                    </a></li> -->
                   
                    <!-- class="active" -->
            </ul>
        </aside>
        <main>
            <h2>Manage Categories</h2>
            <?php
        if (isset($_SESSION['delete'])) {
        ?>
            <div class="alert__message success">
                <p><?= $_SESSION['delete'] ?></p>
            </div>

        <?php } ?>
            <table>
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($select_category as $key => $cat) { ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$cat['title']?></td>
                        <td><?=$cat['description']?></td>
                        <td><a href="edit_category.php?id=<?=$cat['id']?>" class="btn sm">Edit</a></td>
                        <td><a href="delete_category_post.php?id=<?=$cat['id']?>" class="btn danger">Delete</a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </main>
    </div>
</section>
<!-- /////////////////////////////////////////// -->
<!-- < ?php require 'footer_one.php'?> -->
<?php 
unset($_SESSION['delete']);
?>