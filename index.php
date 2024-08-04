<?php 

    include("functions/include.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- title -->
    <title>Vegmart - Home</title>
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

    <!-- home page slider -->
    <div class="homepage-slider">
        <!-- single home slider -->
        <div class="single-homepage-slider homepage-bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">Fresh & Organic</p>
                                <h1>Delicious Seasonal Fruits & vegetables</h1>
                                <div class="hero-btns">
                                    <a href="shop.php" class="boxed-btn">Vegetables Collection</a>
                                    <a href="contact.php" class="bordered-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single home slider -->
        <div class="single-homepage-slider homepage-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-center">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">Fresh Everyday</p>
                                <h1>100% Organic Collection</h1>
                                <div class="hero-btns">
                                    <a href="shop.php" class="boxed-btn">Visit Shop</a>
                                    <a href="contact.php" class="bordered-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single home slider -->
        <div class="single-homepage-slider homepage-bg-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-right">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">Mega Sale Going On!</p>
                                <h1>Get this comming July Discount</h1>
                                <div class="hero-btns">
                                    <a href="shop.php" class="boxed-btn">Visit Shop</a>
                                    <a href="contact.php" class="bordered-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end home page slider -->

    <!-- features list section -->
    <div class="list-section pt-80 pb-80">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="content">
                            <h3>Free Shipping</h3>
                            <p>When order over <br> Ksh 12000</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="content">
                            <h3>24/7 Support</h3>
                            <p>Get support all day</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="list-box d-flex justify-content-start align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <div class="content">
                            <h3>Refund</h3>
                            <p>Get refund within 3 days!</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end features list section -->

    <!-- product section -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title"> 
                        <h3><span class="orange-text">Our</span> Products</h3>
                        <p>Here is some examples of products we offer, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.php"><img src="assets/img/products/promo.jpg" alt=""></a>
                        </div>
                        <h3>Potatoes</h3>
                        <p class="product-price"><span>Per Kg</span> 850Ksh </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.php"><img src="assets/img/products/barries-2.jpg" alt=""></a>
                        </div>
                        <h3>Berry</h3>
                        <p class="product-price"><span>Per Kg</span> 700Ksh </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.php"><img src="assets/img/products/pumpkin.jpg" alt=""></a>
                        </div>
                        <h3>Pumpkin</h3>
                        <p class="product-price"><span>Per Kg</span> 350Ksh </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="shop.php" class="boxed-btn">More Products</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end product section -->

    <!-- cart banner section -->
    <section class="cart-banner pt-100 pb-100">
        <div class="container">
            <div class="row clearfix">
                <!--Image Column-->
                <div class="image-column col-lg-6">
                    <div class="image">
                        <div class="price-box">
                            <div class="inner-price">
                                <span class="price">
                                    <strong>30%</strong> <br> off per kg
                                </span>
                            </div>
                        </div>
                        <img src="assets/img/a.jpg" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
                    <h3><span class="orange-text">Deal</span> of the month</h3>
                    <h4>Hikan Strawberry</h4>
                    <div class="text">Strawberries are delicious and nutritious fruits that are packed with vitamins, minerals, and antioxidants. They are known for their sweet and tangy flavor, vibrant red color, and juicy texture. Whether eaten fresh, added to smoothies, or used in desserts, strawberries are a versatile and popular fruit. They are also a great source of vitamin C, fiber, and folate. Enjoy the refreshing taste of Hikan strawberries and indulge in their health benefits.</div>
                    <!--Countdown Timer-->
                    <div class="time-counter">
                        <div class="time-countdown clearfix" data-countdown="2024/09/09">
                            <div class="counter-column">
                                <div class="inner">
                                    <span class="count">20</span>Days
                                </div>
                            </div>
                            <div class="counter-column">
                                <div class="inner">
                                    <span class="count">10</span>Hours
                                </div>
                            </div>
                            <div class="counter-column">
                                <div class="inner">
                                    <span class="count">10</span>Mins
                                </div>
                            </div>
                            <div class="counter-column">
                                <div class="inner">
                                    <span class="count">30</span>Secs
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="shop.php" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Shop Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

    
    
    <!-- advertisement section -->
    <div class="abt-section mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="abt-bg">
                        <a href="https://www.youtube.com/watch?v=RMxt6Nj_EnY" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="abt-text">
                        <p class="top-sub">Since Year 2023</p>
                        <h2>We are <span class="orange-text">Vegmart</span></h2>
                        <p>Our produce section is a testament to freshness and quality. We work closely with local farmers and trusted suppliers to bring you the finest selection of vegetables, sourced at the peak of their freshness.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente facilis illo repellat veritatis minus, et labore minima mollitia qui ducimus.</p>
                        <a href="about.php" class="boxed-btn mt-4">know more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end advertisement section -->
    
    <!-- shop banner -->
    <section class="shop-banner">
        <div class="container">
            <h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
            <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
            <a href="shop.php" class="cart-btn btn-lg">Shop Now</a>
        </div>
    </section>
    <!-- end shop banner -->

    <!-- logo carousel -->
    <div class="logo-carousel-section list-section pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
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
                            <img src="assets/img/company-logos/1.png" alt="">
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
