<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item_id = $_POST['item_id']; // Retrieve item_id value from the hidden input field
    $quantity = intval($_POST['quantity'][$item_id]); // Retrieve quantity value from the form submission
    if ($quantity > 0) { // Validate quantity value to ensure it's a positive integer
        // Update the quantity in the database
        $user_id = $_SESSION['user_id'];
        $query = "UPDATE users_products SET quantity = $quantity WHERE user_id = '$user_id' AND item_id = '$item_id'";
        mysqli_query($con, $query) or die(mysqli_error($con));
        header('location: cart.php'); // Redirect back to the cart page
    }
}
?>
