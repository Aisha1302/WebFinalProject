<?php
require("includes/common.php");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $quantity = 1; // Default quantity is 1
    if(isset($_POST['quantity']) && is_numeric($_POST['quantity']) && $_POST['quantity'] > 0) {
        $quantity = $_POST['quantity']; // Set the quantity to the value selected by the user
    }
    $user_id = $_SESSION['user_id'];

    // Check if the item is already in the cart
    $query = "SELECT * FROM user_item WHERE user_id='$user_id' AND item_id='$item_id' AND status=1";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    if(mysqli_num_rows($result) > 0) {
        // If the item is already in the cart, update the quantity
        $row = mysqli_fetch_assoc($result);
        $new_quantity = $row['quantity'] + $quantity; // Add the new quantity to the existing quantity
        $query = "UPDATE user_item SET quantity=$new_quantity WHERE user_id='$user_id' AND item_id='$item_id' AND status=1";
    } else {
        // If the item is not in the cart, insert a new row
        $query = "INSERT INTO `user_item`(`user_id`, `item_id`, `quantity`, `status`) VALUES ($user_id, $item_id, $quantity, 1)";
    }
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: cart.php'); // Redirect to products page after adding to cart
    exit(); // Stop further execution
}
?>
