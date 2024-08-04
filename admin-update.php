<?php
include("functions/include.php");

if($_SESSION["type"] != "admin") {
  header("location:index.php");
  exit;
}

include 'config.php';

// Validate inputs
if (!isset($_POST['product_id']) || !isset($_POST['quantity'])) {
  die("Invalid request"); // Handle error gracefully
}

// Prepare query to update product quantities
$updateStmt = $mysqli->prepare("UPDATE products SET qty = ? WHERE id = ?");
$updateStmt->bind_param("ii", $newqty, $productId);

// Loop through each product and update its quantity
for ($i = 0; $i < count($_POST['product_id']); $i++) {
  // Validate product ID and quantity
  $productId = (int)$_POST['product_id'][$i];
  $newQty = (int)$_POST['quantity'][$i];

  // Fetch current quantity from database
  $result = $mysqli->query("SELECT qty FROM products WHERE id = $productId");

  if ($result && $result->num_rows > 0) {
    $obj = $result->fetch_object();
    $currentQty = $obj->qty;

    // Calculate new quantity
    $newqty = $currentQty + $newQty;
    if ($newqty < 0) $newqty = 0; // Prevent negative quantity

    // Execute update query
    $updateStmt->execute();

    // Check if update was successful
    if ($updateStmt->affected_rows > 0) {
      echo "Updated quantity for product ID $productId to $newqty<br>";
    } else {
      echo "Failed to update quantity for product ID $productId<br>";
    }
  } else {
    echo "Product with ID $productId not found<br>";
  }
}

// Close prepared statement
$updateStmt->close();

// Redirect to success page
header("Location: admin.php");
exit;
?>
