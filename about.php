<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">About</span> us
      </div>
      <p class="nero__text"> 
      </p>
    </div>
  </main>

<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->

<div class="col-md-12" ><!-- col-md-12 Starts -->

<div class="box" ><!-- box Starts -->

<?php

$get_about_us = "select * from about_us";

$run_about_us = mysqli_query($con,$get_about_us);

$row_about_us = mysqli_fetch_array($run_about_us);

$about_heading = $row_about_us['about_heading'];

$about_short_desc = $row_about_us['about_short_desc'];

$about_desc = $row_about_us['about_desc'];

?>

<h1> <?php echo $about_heading; ?> </h1>

<p class="lead"> <?php echo "<p>Keerthi S , Neha J J , Reshmika K S</p>" ; ?> </p>

<p> <?php echo "Welcome to ShopMate, where passion meets purpose. Founded in 2023, we embarked on a mission to redefine the fashion experience. More than just an eCommerce store, we're a community driven by our love for fashion and technology. What sets us apart? It's not just about selling; it's a commitment to quality, a dedication to customers, and a promise to make every purchase count. Meet the faces behind: Neha, Keerthi and Reshmika, a family united by our shared enthusiasm. With every click, you're not just buying a product; you're joining us on a journey to make a difference. Welcome to a shopping experience that transcends the transaction—welcome to ShopMate."?> </p>

</div><!-- box Ends $about_short_desc $about_desc;  -->

</div><!-- col-md-12 Ends -->



</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
