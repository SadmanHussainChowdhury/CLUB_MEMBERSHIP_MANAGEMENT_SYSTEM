<?php

require 'header_one.php';
require 'db.php';
require 'login_check.php';

//$cid = $_SESSION['catid'];
$cid = $_GET['id'];

$eve = "SELECT*FROM event_posts WHERE category_id=$cid";
$eve_res = mysqli_query($db_connection,$eve);
//  echo $eve;
//  die();

//category
$category = "SELECT*FROM category";
$category_res = mysqli_query($db_connection,$category);
?>


    <!-- =========================  POST starts  ======================================== -->
   

            
 
    <header class="category__title">
        <!-- query to fetch the category title -->
        <?php
                   
                    $c = "SELECT title FROM category WHERE id=$cid";
                    $cc = mysqli_query($db_connection, $c);
                    $ca = mysqli_fetch_assoc($cc);
                    ?>
                    <!-- query to fetch the category title -->
        <h2><?=$ca['title']?></h2>
    </header>

  
 
<section class="posts">

    <div class="container posts__container">
    <?php foreach ($eve_res as $key => $e) { ?>
        <!-- inside section there will be multiple articles -->

      
        <!-- article 1 starts -->
        <article class="post">
            <div class="post__thumbnail">
            <img src="./uploads/thumb/<?=$e['thumbnail']?>" alt="">
            </div>
            <div class="post__info">

            <div class="post__info">
                    <!-- query to fetch the category title -->
                    <?php
                    $cat = $e['category_id'];
                    $c = "SELECT title FROM category WHERE category.id=$cat";
                    $cc = mysqli_query($db_connection, $c);
                    $ca = mysqli_fetch_assoc($cc);
                    ?>
                    <!-- query to fetch the category title -->
                <a href="category_event.php?id=<?=$e['category_id']?>" 
                class="category__button"><?= $ca['title'] ?></a>





                <h3 class="post__title"><a href="single_event.php?id=<?=$e['id']?>"><?= $e['title'] ?></a></h3>

                <p class="post__body"><?=substr($e['description'],0,30).'...'?></p>



                  <!-- query to fetch the admin name -->
                  <?php
                        $admin = $e['admin_id'];
                        $admin_query = "SELECT name,photo FROM users WHERE users.id=$admin";
                        $admin_res = mysqli_query($db_connection, $admin_query);
                        $aaa = mysqli_fetch_assoc($admin_res);
                        ?>
                        <!-- query to fetch the admin name -->
                <div class="post__author">
                    <div class="post__author-avater">
                    <img width="40px" height="40px" src="./uploads/profile_pic/<?=$aaa['photo']?>" alt="">
                    </div>
                    <div class="post__author-info">
                        <h5>BY : <?= $aaa['name'] ?></h5>
                        <small><?= $e['date_time'] ?></small>
                    </div>
                </div>
            </div>
        </article>
        <!-- article 1 ends -->
        

      

     

       

        <?php } ?>
 <!-- inside section there will be multiple articles -->
    </div>
   
</section>

<!-- //////////////// END OF POSTs /////////////////////////////// -->


<!-- //////////////// CATEGORY SECTION STARTS /////////////////////////////// -->


<section class="category__buttons">

    <div class="container category__buttons-container">
    <?php foreach ($category_res as $cati) { ?>

        <a href="category_event.php?id=<?=$cati['id'] ?>" class="category__button"><?=$cati['title']?></a>
        
        <?php } ?>
    </div>
   
</section>

<!-- ////////////////  CATEGORY SECTION ENDS /////////////////////////////// -->



</body>

</html>
