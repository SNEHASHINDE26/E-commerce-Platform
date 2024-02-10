<?php

include "authguard.php";  
include "../Shared/connection.php";  

$userid = $_SESSION['userid'];  


// Check if the order was successfully placed
if (isset($_SESSION['order_placed']) && $_SESSION['order_placed']) {
    
    // Retrieve product quantity and payment amount from the session
    $product_quantity = $_SESSION['product_details']['quantity'];
    $payment_amount = $_SESSION['product_details']['amount'];
    
    
    // Display the product quantity and payment amount
    echo "<h3>Order submitted successfully!</h3>";
    echo "<h5>Product Quantity: " . $product_quantity . "</h5>";
    echo "<h5>Payment Amount: Rs. " . $payment_amount . "</h5>";
    
      unset($_SESSION['order_placed']);
      unset($_SESSION['product_details']);

} else {
    echo "<h3>Please place an order first.</h3>";
}
?>
