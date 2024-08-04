<?php

    include("functions/include.php");
    include('config.php');
    if(!isset($_SESSION['username'])) {
      header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- title -->
  <title>Vegmart | Shop</title>
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
  
  <!-- breadcrumb-section -->
  <div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="breadcrumb-text">
            <p>Fresh and Organic</p>
            <h1>Shop</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end breadcrumb section -->

  <!-- products -->
  <div class="product-section mt-150 mb-150">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <div class="product-filters">
            <ul>
              <li class="active" data-filter="*">All</li>
              <li data-filter=".vegetables">Vegetables</li>
              <li data-filter=".fruits">Fruits</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row product-lists">
        <?php
          $i = 0;
          $product_id = array();
          $product_quantity = array();

          $result = $mysqli->query('SELECT * FROM products');
          if ($result === FALSE) {
              die($mysqli->error);
          }

          if ($result) {
              while ($obj = $result->fetch_object()) {
                  echo '<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center ' . $obj->product_type . '">';
                  echo '<div class="single-product-item">';
                  echo '<div class="product-image">';
                  echo '<a href="index.php"><img src="' . $obj->product_image . '" alt=""></a>';
                  echo '</div>';
                  echo '<h3>' . $obj->product_name . '</h3>';
                  echo '<p class="product-price"><span> Per Kg </span>Ksh ' . number_format($obj->product_price, 0, ',', '.') . '</p>';

                  if (!isset($_SESSION["type"]) || ($_SESSION["type"] == "user")) {
                      if ($obj->qty > 0) {
                          echo '<a href="update-cart.php?action=add&id=' . $obj->id . '" class="cart-btn"><i type="submit" class="fas fa-shopping-cart"></i> Add to Cart</a>';
                      } else {
                          echo '<a class="cart-btn"><i class="fas fa-shopping-cart"></i> Out Of Stock!</a>';
                      }
                  }

                  echo '</div>';
                  echo '</div>';

                  $product_id[] = $obj->id;
                  $i++;
              }
          }

          $_SESSION['product_id'] = $product_id;
          ?>
      </div>

      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="pagination-wrap">
            <ul>
              <li><a href="#">Prev</a></li>
              <li><a href="#">1</a></li>
              <li><a class="active" href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end products -->

  <!-- logo carousel -->
  <div class="logo-carousel-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="logo-carousel-inner">
            <div class="single-logo-item">
              <img src="assets/img/company-logos/1.png" alt="">
            </div>
            <div class="single-logo-item">
              <img src="assets/img/company-logos/2.png" alt="">
            </div>
            <div class="single-logo-item">
              <img src="assets/img/company-logos/4.png" alt="">
            </div>
            <div class="single-logo-item">
              <img src="assets/img/company-logos/2.png" alt="">
            </div>
            <div class="single-logo-item">
              <img src="assets/img/company-logos/3.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end logo carousel -->

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