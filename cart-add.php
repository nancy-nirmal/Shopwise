<?php
require("includes/common.php");
session_start();



if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $quantity = intval($_POST['quantity'][$item_id]); // Retrieve quantity value from the form submission
    if ($quantity > 0) { // Validate quantity value to ensure it's a positive integer
        // Update the quantity in the database
        $user_id = $_SESSION['user_id'];
        $query = "INSERT INTO users_products(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";

        $query = "UPDATE users_products SET quantity = $quantity WHERE user_id = '$user_id' AND item_id = '$item_id'";
        mysqli_query($con, $query) or die(mysqli_error($con));
    // $user_id = $_SESSION['user_id'];
    // $quantities = $_POST['quantity'];
    // $query = "INSERT INTO users_products(user_id, item_id, status, quantity) VALUES('$user_id', '$item_id', 'Added to cart', 1)"; // Update the query to include the 'quantity' column with a value of 1
    // mysqli_query($con, $query) or die(mysqli_error($con));
    // $query = "ALTER TABLE users_products ADD COLUMN quantity INT DEFAULT 0"; // Add a new column 'quantity' with data type INT and default value 0
    //mysqli_query($con, $query) or die(mysqli_error($con));
    // Loop through quantities and update database
    // foreach ($quantities as $id => $quantity) {
    //     // Validate quantity value to ensure it's a positive integer
    //     $quantity = intval($quantity);
    //     if ($quantity <= 0) {
    //         // Invalid quantity, skip to next iteration
    //         continue;
    //     }
        // Update the 'quantity' column for the specific row with the item_id and user_id
        // $update_query = "UPDATE users_products SET quantity = quantity + $quantity WHERE user_id = '$user_id' AND item_id = '$item_id'";
        // mysqli_query($con, $update_query) or die(mysqli_error($con));
        header('location: products.php');
    }
 }
