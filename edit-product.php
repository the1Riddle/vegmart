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
            <h1>Edit Products</h1>
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
            <h3><span class="orange-text">Products to</span> Edit</h3>
            <p>Here are the available products that can be Edited.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
          $result = $mysqli->query("SELECT * from products order by id asc");
          if ($result) {
              while ($obj = $result->fetch_object()) {
                  echo '<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">';
                  echo '<div class="single-product-item">';
                  echo '<div class="product-image">';
                  echo '<a href="shop.php"><img src="' . $obj->product_image . '" alt=""></a>';
                  echo '</div>';?>
                  <form method="post" action="admin-update.php">
                    <div class="product-item">
                      <input type="hidden" name="product_id[]" value="<?php echo $obj->id; ?>">
                      <h3><?php echo $obj->product_name; ?></h3>
                      <p class="product-price"><span>Units Available</span> <?php echo $obj->qty; ?></p>
                      <label for="quantity">New Qty:</label>
                      <input type="number" name="quantity[]" id="quantity" value="0" min="0">
                    </div>
                    <!-- Repeat this block for each product -->
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form><?php
                  echo '</div>';
                  echo '</div>';
                  echo '<br><br>';
              }
          }
          ?>
      </div>
    </div>
  </div>
  <!-- end product section -->
  <br><br>

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