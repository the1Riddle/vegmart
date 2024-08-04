<?php
// if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {session_start();}

include 'config.php';

if (isset($_SESSION['cart'])) {
    if (isset($_SESSION['total'])) {
        $total = $_SESSION['total'];

        foreach ($_SESSION['cart'] as $product_id => $quantity) {
            $result = $mysqli->query("SELECT * FROM products WHERE id = ".$product_id);

            if ($result) {
                if ($obj = $result->fetch_object()) {
                    $cost = $obj->product_price * $quantity;
                    $user = $_SESSION["username"];
                    $shipping_destination = $_SESSION['shipping_address'];

                    $query = $mysqli->query("INSERT INTO orders (product_code, product_name, shipping_destination, price, units, total, email) VALUES ('$obj->product_code', '$obj->product_name', '$shipping_destination', $obj->product_price, $quantity, $cost, '$user')");

                    if ($query) {
                        $newqty = $obj->qty - $quantity;
                        if ($mysqli->query("UPDATE products SET qty = ".$newqty." WHERE id = ".$product_id)) {
                            // Successfully updated the product quantity
                        }
                    }
                }
            }
        }
    }
}

unset($_SESSION['cart']);
header("location:success.php");
?>
