
<?php
//session_start();
require 'header_one.php';
require 'login_check.php';
require 'db.php';

$text = "SELECT * FROM text";
$st= mysqli_query($db_connection,$text);

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
                    
                <li><a href="dashboard_logo.php"><i class="uil uil-clipboard-notes"></i>
                        <h5>Manage Logo</h5>
                    </a></li>

                    <!-- <li><a href="add_home_image.php"><i class="uil uil-pen"></i>
                        <h5>Add image</h5>
                    </a></li> -->

                    <li><a href="dashboard_image.php"><i class="uil uil-clipboard-notes"></i>
                        <h5>Manage Image</h5>
                    </a></li>

                    <!-- <li><a href="add_text.php"><i class="uil uil-pen"></i>
                        <h5>Add text</h5>
                    </a></li> -->

                    <li><a href="dashboard_text.php"><i class="uil uil-clipboard-notes"></i>
                        <h5>Manage text</h5>
                    </a></li>

                    <!-- contact -->
                    <!-- <li><a href="about.php"><i class="uil uil-pen"></i>
                        <h5>Add contact</h5>
                    </a></li> -->

                    <li><a href="dashboard_about.php"><i class="uil uil-clipboard-notes"></i>
                        <h5>Manage contact</h5>
                    </a></li>
                     <!-- contact ends -->
                      <!-- about club info -->
                <!-- <li><a href="about-club.php"><i class="uil uil-pen"></i>
                        <h5>Add club info</h5>
                    </a></li> -->

                    <li><a href="about-club_dashboard.php"><i class="uil uil-clipboard-notes"></i>
                        <h5>Manage club info</h5>
                    </a></li>
                <!-- about club info -->
                <!-- social -->
                <li><a href="dashboard_social.php"><i class="uil uil-clipboard-notes"></i>
                        <h5>Manage social icons</h5>
                    </a></li>
                <!-- social -->

                <!-- <li><a href="dashboard_messages.php"><i class="uil uil-clipboard-notes"></i>
                        <h5>See Messages</h5>
                    </a></li>
                    -->
                   
                    <!-- class="active" -->
            </ul>
        </aside>
        <main>
            <h2>Manage Text</h2>
            <?php
        if (isset($_SESSION['delete'])) {
        ?>
            <div class="alert__message success">
                <p><?= $_SESSION['delete'] ?></p>
            </div>

        <?php } ?>

        <?php
        if (isset($_SESSION['c'])) {
        ?>
            <div class="alert__message success">
                <p><?= $_SESSION['c'] ?></p>
            </div>

        <?php } ?>




            <table>
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Text</th>
                        <th>Status</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($st as $key => $text) { ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$text['text']?></td>
                       
                        <td>
                            <a class="stn <?=($text['status']==1)?'s1':'s2'?>" href="add_text_status.php?id=<?=$text['id']?>" 
                            >
                         <?=($text['status']==1)?'Active':'Deactive'?>
                        </a></td>


                        <td><a href="delete_text.php?id=<?=$text['id']?>" class="btn danger">Delete</a></td>
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
unset($_SESSION['c']);
?>