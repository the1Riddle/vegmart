<?php

    include("functions/include.php");

if(!isset($_SESSION["username"])) {
  header("location:index.php");
}

if($_SESSION["type"] == "user") {
  header("location:index.php");
}

include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- title -->
  <title>Vegmart | Receipt</title>

  <?php
    include("functions/head.php");
  ?>
    <link rel="stylesheet" href="assets/css/login/styles.css">

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
            <p>Admin Section</p>
            <h1>Delete Products</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end breadcrumb section -->

  <!-- product section -->
  <div class="product-section mt-150 mb-150">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="section-title"> 
            <h3><span class="orange-text">Products to</span> Delete</h3>
            <p>Here are the available products that can be deleted.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
          $result = $mysqli->query("SELECT * from products order by id asc");
          if($result) {
            while($obj = $result->fetch_object()) {
              ?>
        <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
          <div class="single-product-item">
            <div class="product-image">
              <a href="shop.php"><img src="<?php echo $obj->product_image; ?>" alt=""></a>
            </div>
            <h3><?php echo $obj->product_name; ?></h3>
            <p class="product-price"><span>Units Available</span> <?php echo $obj->qty; ?> </p>
            <?php echo '<a href="delete.php?product_id='. $obj->id .'" class="cart-btn">'; ?> Delete this</a>
          </div>
        </div>
      <?php 
          }
        }
      ?>
      </div>
    </div>
  </div>
  <!-- end product section -->

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