<?php

    include("functions/include.php");
    include ("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- title -->
    <title>Vegmart | Cart</title>
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
                        <h1>Cart</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- cart -->
    <div class="cart-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr class="table-head-row">
                                    <th class="product-remove"></th>
                                    <th class="product-image">Product Image</th>
                                    <th class="product-name">Name</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                            if (isset($_SESSION['cart'])) {
                                $total = 0;
                                $_SESSION['total'] = 0;
                            foreach ($_SESSION['cart'] as $product_id => $quantity) {
                                $result = $mysqli->query("SELECT product_image, product_name, qty, product_price FROM products WHERE id = " . $product_id);

                                if ($result) {
                                    while ($obj = $result->fetch_object()) {
                                        $cost = $obj->product_price * $quantity; // Work out the line cost
                                        $total += $cost; // Add to the total cost
                                        $_SESSION['total'] = $total; // Store the total in session
                                        ?>
                                        <tr class="table-body-row">
                                            <td class="product-remove"><?php echo "<a href='update-cart.php?action=clear&id=" . $product_id . "'>"; ?><i class="far fa-window-close"></i></a></td>
                                            <td class="product-image"><img src="<?php echo $obj->product_image; ?>" alt=""></td>
                                            <td class="product-name"><?php echo $obj->product_name; ?></td>
                                            <td class="product-price">Ksh <?php echo $obj->product_price; ?></td>
                                            <?php echo '<td class="product-quantity">' . $quantity . '&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id=' . $product_id . '">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id=' . $product_id . '">-</a></td>'; ?>
                                            <td class="product-total"><?php echo $cost; ?></td>
                                        </tr>
                                        <?php
                                        }
                                    }
                                }
                            }
                            ?>
                            </tbody>
                            </table>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="total-section">
                        <table class="total-table">
                            <thead class="total-table-head">
                                <tr class="table-total-row">
                                    <th>Total</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="total-data">
                                    <td><strong>Subtotal: </strong></td>
                                    <td>Ksh <?php
                                    if (isset($_SESSION['total'])) {
                                        $total = $_SESSION['total'];
                                    }
                                    if (!isset($_SESSION['cart'])) {
                                        $total = 0;
                                    }
                                     echo $total 
                                    ?></td>
                                </tr>
                                <tr class="total-data">
                                    <td><strong>Discount: </strong></td>
                                    <td>Ksh <?php 

                                    if ($total > 500 && $total < 1000) {
                                        $fast = 10;
                                        echo "-$fast";
                                    }else if ($total > 1000 && $total < 5000) {
                                        $second = 75;
                                        echo "-$second";
                                    }else if ($total > 5000){
                                        $third = 200;
                                        echo "-$third";
                                    }else{
                                        echo 0;
                                    }
                                    ?></td>
                                </tr>
                                <tr class="total-data">
                                    <td><strong>Total: </strong></td>
                                    <td>Ksh <?php 

                                    if ($total > 500 && $total < 1000) {
                                        $fast = 10;
                                        echo $total - $fast;
                                    }else if ($total > 1000 && $total < 5000) {
                                        $second = 75;
                                        echo $total - $second;
                                    }else if ($total > 5000){
                                        $third = 200;
                                        echo $total - $third;
                                    }else{
                                        echo $total;
                                    }
                                    ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="cart-buttons">
                            <a href="shop.php" class="boxed-btn">Update Cart</a>
                            <a href='checkout.php' class="boxed-btn black">Check Out</a>
                        </div>
                    </div>

                    <div class="coupon-section">
                        <h3>Apply Coupon</h3>
                        <div class="coupon-form-wrap">
                            <form method="post">
                                <p><input type="text" placeholder="Coupon: xY587wZpRQU"></p>
                                <p><input type="submit" value="Apply"></p>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end cart -->

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