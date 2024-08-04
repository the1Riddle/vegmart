<?php

include("functions/include.php");

if(!isset($_SESSION["username"])){
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
						<p>User Details</p>
						<h1>My Receipts</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
    <br><br>
	<div class="container light-style flex-grow-1 container-p-y">
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">Orders</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">My Receipt</label>
                                    <?php
          
                                      $result = null;
                                      if ($_SESSION["type"] == "user"){
                                            $user = $_SESSION["username"];
                                            $result = $mysqli->query("SELECT * from orders where email='".$user."'");
                                      }else {
                                          $result = $mysqli->query("SELECT * FROM ORDERS");
                                      }
                                      
                                      if($result) {
                                        while($obj = $result->fetch_object()) {
                                          //echo '<div class="large-6">';
                                          echo '<p><h4>Order ID ->'.$obj->id.'</h4></p>';
                                          echo '<p><strong>Date of Purchase</strong>: '.$obj->date.'</p>';
                                          echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
                                          echo '<p><strong>Product Name</strong>: '.$obj->product_name.'</p>';
                                          echo '<p><strong>Price Per Unit</strong>: '.$obj->price.'</p>';
                                          echo '<p><strong>Units Bought</strong>: '.$obj->units.'</p>';
                                          echo '<p><strong>Total Cost</strong>: '.$currency.$obj->total.'</p>';
                                          if ($_SESSION["type"] == "admin") echo '<p><strong>Customer Email Id</strong>: '.$obj->email.'</p>';
                                          //echo '</div>';
                                          //echo '<div class="large-6">';
                                          //echo '<img src="images/products/sports_band.jpg">';
                                          //echo '</div>';
                                          echo '<p><hr></p>';

                                        }
                                      }
                                    ?>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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