<?php
session_start();
if (isset($_POST['shipping_address'])) {
    $_SESSION['shipping_address'] = $_POST['shipping_address'];
    header("Location: checkout.php"); // Redirect back to the checkout page
    exit();
} else {
    header("Location: checkout.php?error=missing_address");
    exit();
}
?>
