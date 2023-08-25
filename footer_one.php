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


    </div>
    <div class="footer__copyright">
    <p>Copyright © 2023 CMMS. All rights reserved by CMMS</p>
    </div>
</footer>

<!-- ////////////////  Footer ends   /////////////////////////////// -->

<script src="./main.js"></script>
</body>

</html>
