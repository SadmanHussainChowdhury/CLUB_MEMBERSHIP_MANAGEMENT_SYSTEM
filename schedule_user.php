
<?php
//session_start();
require 'header_two.php';
require 'login_check.php';
require 'db.php';

$select = "SELECT * FROM schedule";
$select_s = mysqli_query($db_connection,$select);

?>

<!-- /////////////////////////////////////////// -->
<section class="dashboard" style="padding: 50px;">
    <!-- <div class="container dashboard__container"> -->
        <!-- <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-arrow-circle-right"></i></button>
        <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-arrow-circle-left"></i></button> -->
       
        <main>
            <h2>Todays Schedule</h2>

            <?php 
            if(isset($_SESSION['delete'])){
            ?>

            <strong style="color:#ff3636; font-size: large;"><?=$_SESSION['delete']?></strong>

            <?php } ?>

            <table>
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Room</th>
                        <th>Topic</th>
                        <th>Time && Date</th>   
                       
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($select_s as $key => $user) { ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$user['room']?></td>
                        <td><?=$user['topic']?></td>
                        <td><?=$user['time']?></td>
                      
                      
                       
                       
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




