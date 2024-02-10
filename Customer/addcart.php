
<?php

include "authguard.php";

$userid = $_SESSION['userid'];
$pid = $_GET['pid'];

include "../Shared/connection.php";

// Check if the product already exists in the cart
$check_query = "SELECT * FROM cart WHERE userid = $userid AND pid = $pid";
$check_result = mysqli_query($conn, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    echo "Product already exists in the cart";
} else {
    
    // Insert the product into the cart
    $insert_query = "INSERT INTO cart(userid, pid) VALUES ($userid, $pid)";
    $status = mysqli_query($conn, $insert_query);

    if ($status) {
        echo "Added to cart successfully";
    } else {
        echo mysqli_error($conn);
    }
}

?>




















