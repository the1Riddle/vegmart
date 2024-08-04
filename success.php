<?php 

    include("functions/include.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- title -->
  <title>Vegmart | About</title>
  <?php
    include("functions/head.php");
  ?>

</head>
<body>
  
  <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
  
  <!-- header -->
  <?php
    include("functions/navbar.php");
  ?>
  <!-- end header -->
  
  <!-- breadcrumb-section -->
  <div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="breadcrumb-text">
            <p>Thanks</p>
            <?php 
              if (empty($_GET["msg"])){
                  echo "<h1 class=heading2><b>Payment <span>Success</spam></b></h1><br><br><p style='text-align: center;'>You have purchased a product, then please check your spam in email for the receipt.</p>";
              }else{
                  echo "<h1>Attention</h1><p>". $_GET["msg"] ."</p>";
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end breadcrumb section -->

    <!-- footer -->
    <?php
        include("functions/footer.php");
    ?>
    <!-- end footer -->

    <!-- js files -->
    <?php
        include("functions/js.php");
    ?>
    <!-- end js files -->

</body>
</html>