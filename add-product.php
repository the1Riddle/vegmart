<?php

    include("functions/include.php");

if(!isset($_SESSION["username"])) {
  header("location:index.php");
}

if($_SESSION["type"] == "user") {
  header("location:index.php");
}

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $target_dir = "./products/";
    $img_dir = "products/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        
        if($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        
        if ($uploadOk) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $name = $_POST["name"];
                $code = strtoupper($name);
                $type = $_POST["type"];
                $qty = $_POST["quantity"];
                $price = $_POST["price"];
                $img = basename($_FILES["fileToUpload"]["name"]);
                $img_path = $img_dir . $img; // Append directory path to image name
                
                $q = "INSERT INTO PRODUCTS (product_code, product_name, product_type, product_image, qty, product_price) 
                      VALUES ('$code', '$name', '$type', '$img_path', '$qty', '$price')";
                
                if ($mysqli->query($q)) {
                    header("location: shop.php");
                    exit;
                } else {
                    $msg = "Database error: " . $mysqli->error;
                    header("location: success.php?msg=". urlencode($msg));
                    exit;
                }
            } else {
                $msg = "Sorry, there was an error uploading your file.";
                header("location: success.php?msg=". urlencode($msg));
                exit;
            }
        } else {
            $msg = "File is not an image or upload failed.";
            header("location: success.php?msg=". urlencode($msg));
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- title -->
  <title>Vegmart - Add</title>
  <?php
    include("functions/head.php");
  ?>
    <link rel="stylesheet" href="assets/css/login/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
            <h1>Add Products</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end breadcrumb section -->

  <!-- hero area -->
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <div class="wrapper">
                              <form method="POST" action="add-product.php" enctype="multipart/form-data">
                                <h1>Add Product</h1>
                                  <div class="two-columns">
                                    <div class="column">
                                      <div class="input-box">
                                        <input type="text" id="right-label" placeholder="Add Product Name:" name="name">
                                      </div>
                                      <div class="input-box">
                                        <input type="text" id="right-label" placeholder="Products type: vegetables or fruits" name="type">
                                      </div>
                                    </div>
                                    <div class="column">
                                      <div class="input-box">
                                          <input type="text" id="right-label" placeholder="Add Quantity: eg, 11" name="quantity">
                                      </div>
                                      <div class="input-box">
                                          <input type="text" id="right-label" placeholder="Add Price: eg, 99" name="price">
                                      </div>
                                    </div>
                                  </div>
                                    <div class="remember-forgot">
                                      <label for="right-label" class="right inline"><strong>Add Image</strong></label>
                                      <input type="file" name="fileToUpload" id="fileToUpload">
                                    </div>
                                    <button type="submit" id="right-label" name="submit" class="btn" value="Add Product" >Add Item</button>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- end hero area -->
    
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