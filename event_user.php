<?php
require 'header_two.php';
require 'db.php';
require 'login_check.php';
///show events
$select_event = "SELECT * FROM event_posts  ORDER BY id DESC";
$select_event_res = mysqli_query($db_connection, $select_event);
//category
$category = "SELECT*FROM category";
$category_res = mysqli_query($db_connection,$category);

?>


<section class="posts" style="margin-top: 8rem;">
    <div class="container posts__container">

        <!-- inside section there will be multiple articles -->


 <?php foreach ($select_event_res as $key => $event) { ?>
        <!-- article 1 starts -->
        <article class="post">
           
                <div class="post__thumbnail">
                    <img src="./uploads/thumb/<?= $event['thumbnail'] ?>" alt="">
                </div>

                <div class="post__info">
                    <!-- query to fetch the category title -->
                    <?php
                    $cat = $event['category_id'];
                    $c = "SELECT title FROM category WHERE category.id=$cat";
                    $cc = mysqli_query($db_connection, $c);
                    $ca = mysqli_fetch_assoc($cc);
                    ?>
                    <!-- query to fetch the category title -->

                   <!-- category btn -->
                 

                    <a href="category_event_user.php?id=<?=$event['category_id'] ?>" class="category__button"><?= $ca['title'] ?></a>


                    <!-- title -->

                    <!-- < ?php
                       $_SESSION['ccc'] = $event['id'];
                   ?> -->
                    <h3 class="post__title"><a href="single_event_user.php?id=<?=$event['id']?>"><?= $event['title'] ?></a></h3>

                    <!-- description -->
                    <!-- <p class="post__body">< ?= $event['description'] ?></p> -->
                    <p class="post__body"><?=substr($event['description'],0,30).'...'?></p>


                    <div class="post__author">
                        <!-- query to fetch the admin name -->
                        <?php
                        $admin = $event['admin_id'];
                        $admin_query = "SELECT name,photo FROM users WHERE users.id=$admin";
                        $admin_res = mysqli_query($db_connection, $admin_query);
                        $aaa = mysqli_fetch_assoc($admin_res);
                        ?>
                        <!-- query to fetch the admin name -->
                        <div class="post__author-avater">
                        <img width="40px" height="40px" src="./uploads/profile_pic/<?=$aaa['photo']?>" alt="">
                        </div>
                        <div class="post__author-info">
                            <h5>BY :<?= $aaa['name'] ?></h5>
                            <small><?= $event['date_time'] ?></small>
                        </div>
                    </div>
                </div>
        
        </article>
        <?php } ?>
        <!-- article 1 ends -->




        <!-- inside section there will be multiple articles -->
    </div>
</section>

<!-- //////////////// END OF POSTs /////////////////////////////// -->


<!-- //////////////// CATEGORY SECTION STARTS /////////////////////////////// -->


<section class="category__buttons">

    <div class="container category__buttons-container">
    <?php foreach ($category_res as $cati) { ?>

        <a href="category_event_user.php?id=<?=$cati['id'] ?>" class="category__button"><?=$cati['title']?></a>
        
        <?php } ?>
    </div>
   
</section>
















<!-- ////////////////  CATEGORY SECTION ENDS /////////////////////////////// -->

<?php require 'footer_one.php'; ?>
