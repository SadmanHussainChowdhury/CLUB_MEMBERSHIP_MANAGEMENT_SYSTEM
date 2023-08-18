<?php
//session_start();
require 'header_one.php';
require 'login_check.php';
require 'db.php';
//  $_SESSION['id'] is user id
// $current_user_id = $_SESSION['id'];
// $query = "SELECT id,title,category_id FROM event_posts WHERE admin_id=$current_user_id ORDER BY id DESC";
// $ev =  mysqli_query($db_connection,$query);
// $e = mysqli_fetch_assoc($ev);
///////////////////////////////
$select_event = "SELECT * FROM event_posts";
$select_event_res = mysqli_query($db_connection, $select_event);


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


                   <!-- <li><a href="add_logo.php" class="active"><i class="uil uil-pen"></i>
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

            </ul>
        </aside>
        <main>
            <h2>Manage Events</h2>
            <?php
            if (isset($_SESSION['delete'])) {
            ?>

                <strong style="color:#ff3636; font-size: large;"><?= $_SESSION['delete'] ?></strong>

            <?php } ?>
            <table>
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Thumbnail</th>
                        <th>Category</th>
                        <th>Date-Time</th>
                        <th>Admin</th>
                        <th>Edit</th>
                        <th>Delete</th>


                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($select_event_res as $key => $event) { ?>

                        <!-- category title -->
                        <!-- < ?php $category_id = $e['category_id'];
                    $category_qu = "SELECT title FROM category WHERE id=$category_id";
                    $r = mysqli_query($db_connection, $category_qu);
                    $category_assoc = mysqli_fetch_assoc($r);
                    ?> -->
                        <!-- category title -->




                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $event['title'] ?></td>
                            <td><?= $event['description'] ?></td>
                            <td><img width="100px" height="100px" src="./uploads/thumb/<?= $event['thumbnail'] ?>" alt=""></td>

                            <!-- query to fetch the category title -->
                            <?php
                            $cat = $event['category_id'];
                            $c = "SELECT title FROM category WHERE category.id=$cat";
                            $cc = mysqli_query($db_connection, $c);
                            $ca = mysqli_fetch_assoc($cc);
                            ?>
                            <!-- query to fetch the category title -->
                            <td><?= $ca['title'] ?></td>
                            <!-- <td>< ?=$category_assoc['title']?></td> -->

                            <td><?= $event['date_time'] ?></td>

                            <!-- query to fetch the admin name -->
                            <?php
                            $admin = $event['admin_id'];
                            $admin_query = "SELECT name FROM users WHERE users.id=$admin";
                            $admin_res = mysqli_query($db_connection, $admin_query);
                            $aaa = mysqli_fetch_assoc($admin_res);
                            ?>
                            <!-- query to fetch the admin name -->
                            <td><?= $aaa['name'] ?></td>



                            <td><a href="edit_event.php?id=<?= $event['id'] ?>" class="btn sm">Edit</a></td>
                            <td><a href="delete_event.php?id=<?= $event['id'] ?>" class="btn danger">Delete</a></td>


                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>
    </div>
</section>
<!-- /////////////////////////////////////////// -->
<!-- ////////////////  Footer  starts  /////////////////////////////// -->

<?php
unset($_SESSION['delete']);
?>