<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}

include('config.php');

$pid = $_GET['product_id'];

$sql = "DELETE FROM products WHERE id=" . $pid;

if ($mysqli->query($sql)) {
    // Check the number of affected rows directly after the query
    if ($mysqli->affected_rows > 0) {
        header("location: admin.php");
        exit; // Always exit after header redirection
    } else {
        $msg = "Product not available";
        header("location: success.php?msg=" . urlencode($msg));
        exit; // Always exit after header redirection
    }
} else {
    // Error in query execution
    die('Error: ' . $mysqli->error);
}
?>
