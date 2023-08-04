<?php
require 'db.php';
session_start();
//logo
$logo_select = "SELECT*FROM logo WHERE status=1";
$logo_select_res = mysqli_query($db_connection,$logo_select);
$logo_after_assoc = mysqli_fetch_assoc($logo_select_res);
//image
$image = "SELECT*FROM image";
$image_result = mysqli_query($db_connection,$image);
//text
$text_select = "SELECT*FROM text WHERE status=1";
$text_select_res = mysqli_query($db_connection,$text_select);
$text_after_assoc = mysqli_fetch_assoc($text_select_res);
//about
$about_select = "SELECT*FROM about WHERE status=1";
$about_select_res = mysqli_query($db_connection,$about_select);
$about_after_assoc = mysqli_fetch_assoc($about_select_res);
//CLUB INFO
$club_select = "SELECT*FROM club WHERE status=1";
$club_select_res = mysqli_query($db_connection,$club_select);
$club_after_assoc = mysqli_fetch_assoc($club_select_res);
//social
$social = "SELECT*FROM social WHERE status=1";
$social_res = mysqli_query($db_connection, $social);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@600&family=Montserrat+Subrayada:wght@400;700&family=Secular+One&family=Source+Code+Pro:wght@700&family=Zen+Dots&display=swap"
        rel="stylesheet">
 <!-- fonts ends -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLUB MEMBERSHIP MANAGEMENT SYSTEM</title>

    
    <!-- css link starts  -->
    <link rel="stylesheet" href="./style.css">
    <!-- css link starts  -->


    <!-- iconscout cdn link starts  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- iconscout cdn linkends  -->

    <!-- image slider swiper js starts   -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- image slider swiper js ends -->
</head>

<body>
    <!-- start of nav bar -->
    <nav>
        <div class="container nav__container">
            <!-- logo goes here -->
            <a href="index.html" class="nav__logo"><img width="60px" height="60px" src="./uploads/logo/<?=$logo_after_assoc['logo']?>" alt=""></a>
            <!-- <a href="index.html" class="nav__logo">Tasu</a> -->

            <!-- navs -->
            <ul class="nav__items">
                <!-- <li><a href="blog.html"><b>EVENTS</b></a></li> -->
                <li><a href="#about"><b>ABOUT</b></a></li>
                <li><a href="#contact"><b>CONTACT</b></a></li>
                <li><a href="login_form.php"><b>LOG IN</b></a></li>
                <!-- <li class="nav__profile">
                    <div class="avater">
                        <img src="./images/a1.webp">
                    </div>

                    <ul>
                        <li><a href="dashboard.html">DASHBOARD</a></li>
                        <li><a href="logout.html">LOG OUT</a></li>
                    </ul>


                </li> -->
            </ul>
            <!-- small screen -->
            <!-- <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button> -->
        </div>
    </nav>
    <!-- end of nav bar -->



    <!-- banner starts  -->
    <div class="container" id="joinus">
        <div class="card">
            <div class="card-h">
                <!-- <h1>"If everyone is moving forward together, then success takes care of itself." - Henry Ford</h1> -->
                <h1><span class="auto-type"></span></h1>
            </div>

        </div>

    </div>
    <!-- banner ends -->

    
    </div>





    <!-- about us starts -->

    <div class="container">

        <div class="about" id="about">

            <div class="para">
                <h2>Our Club</h2>
                <p><?=$club_after_assoc['club']?></p>

            </div>



            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php foreach ($image_result as $img) { ?>

                    <div class="swiper-slide">
                    <img src="./uploads/image/<?=$img['image']?>" alt="">
                    </div>

                    <!-- <div class="swiper-slide"><img src="./images/a2.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./images/a3.jpg" alt=""></div> -->
                    <?php } ?>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>


    <!-- about us ends -->

    <footer id="contact">
        <div class="footer__social">
            
        <?php foreach($social_res as $s){?>
        <a href="<?=$s['link']?>" target="_blank"><i class="<?=$s['icon']?>"></i></a>
      <?php }?>
            
        </div>
        <div class="container footer__container">



            <div class="dead">

                <div class="part-one">
                    <section class="contact" >
                        <h2>Contact us</h2>
                        <h5>Address: <span><?=$about_after_assoc['address']?></span></h5>
                        <h5>Email: <span><?=$about_after_assoc['email']?></span></h5>
                        <h5>Phone: <span><?=$about_after_assoc['phone']?></span></h5>
                    </section>
                    <article class="cat">
                        <h3>.......................................</h3>
                        <ul>
                            <li><a href="#about">ABOUT</a></li>
                            <li><a href="login_form.php">LOG IN</a></li>
                        

                        </ul>
                    </article>
                </div>


               


                <div class="part-two">

                <?php
                //session_start();
                if(isset($_SESSION['msg'])){?>
                <h3 style="padding-left: 4rem; color: darkgoldenrod;"><?=$_SESSION['msg']?></h3>
                <?php }unset($_SESSION['msg'])?>


                   

                   

                    
                </div>

            </div>



        </div>
        <div class="footer__copyright">
            <small>Copyright &copy;2055 FAT</small>
        </div>
    </footer>

    <!-- ////////////////  Footer ends   /////////////////////////////// -->






    <!-- auto type banner script  starts-->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script>
        var typed = new Typed(".auto-type", {
            // strings: ["“Alone we can do so little, together we can do so much.”"],
            strings: ["<?=$text_after_assoc['text']?>"],
            typeSpeed: 40,
            backSpeed: 10,
            loop: true
        })
    </script>

    <!-- auto type banner script ends-->


    <!-- image slider swiper js starts  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },

            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },


        });
    </script>
    <!-- image slider swiper js ends-->
</body>

</html>