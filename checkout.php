<?php 

    include("functions/include.php");
    include 'config.php';
    if (!isset($_SESSION['cart'])) {
    	header("location:cart.php");
    }
    if (isset($_SESSION['total'])) {
	    $total = $_SESSION['total'];
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- title -->
	<title>Check Out</title>
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
						<p>Fresh and Organic</p>
						<h1>Check Out Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Billing Address
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form action="index.html">
						        		<p><input type="text" placeholder="Name" required></p>
						        		<p><input type="email" placeholder="Email" required></p>
						        		<p><input type="text" placeholder="Address" required></p>
						        		<p><input type="tel" placeholder="Phone" required></p>
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div>
						  <div class="card single-accordion">
						    <div class="card-header" id="headingTwo">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Shipping Destination
						        </button>
						      </h5>
						    </div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							    <div class="card-body">
							        <form action="set_shipping_address.php" method="POST">
							            <div class="shipping-address-form">
							                <label for="shipping_address">Enter your location:</label>
							                <input type="text" id="shipping_address" name="shipping_address" placeholder="Enter your location" required>
							            </div>
							            <button type="submit" class="btn btn-primary">Confirm Location</button>
							        </form>
							    </div>
							</div>
						  </div>
						  <div class="card single-accordion">
							<div class="card-header" id="headingThree">
							  <h5 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								  Card Details
								</button>
							  </h5>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							  <div class="payment-form card border-secondary mb-3">
							    <div class="card-body">
							        <br><br>
							        <form action="process_payment.php" method="POST">
							            <div class="form-group">
							                <label for="card_number">Card Number</label>
							                <input type="text" class="form-control" id="card_number" name="card_number" placeholder="1111 2222 3333 4444" required>
							            </div>
							            <div class="form-group">
							                <label for="expiration">Expiration</label>
							                <input type="text" class="form-control" id="expiration" name="expiration" placeholder="MM/YY" required>
							            </div>
							            <div class="form-group">
							                <label for="security">Security</label>
							                <input type="text" class="form-control" id="security" name="security" placeholder="***" required>
							            </div>
							            <div class="form-group">
							                <label for="zip_code">Zip / Postal Code</label>
							                <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="0020" required>
							            </div>
							        </form>
							        <div class="mt-3">
							            <h6>Other payment option</h6>
							            <button class="paypal-button">PayPal</button>
							        </div>
							    </div>
							</div>
							</div>
						  </div>
						</div>

					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Your order Details</th>
									<th>Price</th>
								</tr>
							</thead>
							<?php
								if(isset($_SESSION['cart'])) {

					            ?>
							<tbody class="order-details-body">
								<tr>
									<td>Product</td>
									<td>Total</td>
								</tr>
								<?php
								foreach($_SESSION['cart'] as $product_id => $quantity) {

					            $result = $mysqli->query("SELECT product_code, product_name, qty, product_price FROM products WHERE id = ".$product_id);


					            if($result){

					              while($obj = $result->fetch_object()) {
					                $cost = $obj->product_price * $quantity;
					                ?>
								<tr>
									<td><?php echo $obj->product_name; ?></td>
									<td><?php echo $cost; ?></td>
								</tr>
								<?php
										}
									}
								}
								?>
							</tbody>
							<tbody class="checkout-details">
								<tr>
									<td>Subtotal</td>
									<td>Ksh <?php echo $total ?></td>
								</tr>
								<tr>
									<td>Shipping</td>
									<td>Ksh 
										<?php
										$shipfee = 0;
										if ($total < 12000) {
											$shipfee = 200;
											echo $shipfee;
										}else{
											echo $shipfee;
										}
										?>
									</td>
								</tr>
								<tr>
									<td>Total</td>
									<td>Ksh <?php 
									if ($total == 0) {
										echo 0;
									}else{
										echo $total + $shipfee;
									}
									?></td>
								</tr>
							</tbody>
						</table>
						<?php
						if(isset($_SESSION['username'])) {
				            echo '<a href="orders-update.php" class="boxed-btn" type="submit" onclick="return validateForm()">Place Order</a>';
				          }

				          else {
				          	echo '<div class="cart-buttons">';
				          	echo '<a href="cart.php" class="boxed-btn" type="submit">Back to Cart</a>';
				            echo '<a href="login.php" class="boxed-btn" type="submit">LogIn</a>';
				            echo '</div>';
				          }
				    	}
				        ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

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
	<script>
        function validateForm() {
            var name = document.getElementById('card_number').value;
            var address = document.getElementById('expiration').value;
            var phone = document.getElementById('security').value;
            var mpesa = document.getElementById('zip_code').checked;

            if (!name || !address || !phone || !date || !mpesa) {
                alert("Please fill in all the details before proceeding to checkout.");
                return false;
            }
            return true;
        }
  </script>
	<!-- end js files -->

</body>
</html>