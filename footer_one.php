<?php
require 'db.php';
$social = "SELECT*FROM social";
$social_res = mysqli_query($db_connection, $social);
 
?>
<!-- ////////////////  Footer  starts  /////////////////////////////// -->
<footer>
    <div class="footer__social">
        <?php foreach($social_res as $s){?>
        <a href="<?=$s['link']?>" target="_blank"><i class="<?=$s['icon']?>"></i></a>
      <?php }?>
    </div>
    <div class="container footer__container">

        <!-- <article>
            <h4>categories</h4>
            <ul>
                <li><a href="">Science</a></li>
                <li><a href="">Science</a></li>
                <li><a href="">Science</a></li>
            </ul>
        </article>

         <article>
            <h4>Permalink</h4>
            <ul>
                <li><a href="">blog</a></li>
                <li><a href="">services</a></li>
                <li><a href="">Science</a></li>
            </ul>
        </article> -->
    </div>
    <div class="footer__copyright">
        <small>Copyright &copy;2022 FAHMIDA ALAM TASMIM</small>
    </div>
</footer>

<!-- ////////////////  Footer ends   /////////////////////////////// -->

<script src="./main.js"></script>
</body>

</html>