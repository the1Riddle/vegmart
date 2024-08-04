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
            <h1>Admin Settings</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end breadcrumb section -->


  <div class="product-section mt-150 mb-150">
        <div class="container">
          <div class="row">
                <div class="col-lg-12 text-center">
          <?php 
            if ($_SESSION["type"] == "admin"){
                echo '<a href="add-product.php" class="button [secondary success alert]"><button type="submit" class="btn btn-primary">Add products</button></a>
              <br>';
            }
          ?>
          <br><br>
        <a href="edit-product.php" class="button [secondary success alert]"><button type="reset" class="btn btn-outline-warning">Edit Product-Quantity</button></a>
          <br><br><br>
          <a href="delete-product.php" class="button [secondary success alert]"><button type="submit" class="btn btn-danger">Delete products</button></a>
          <br>
        </div>
      </div>
    </div>
  </div>

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