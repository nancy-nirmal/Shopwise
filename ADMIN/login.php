<!doctype html>
<html>

<head>
    <script src="https://kit.fontawesome.com/b86cae5acc.js" crossorigin="anonymous"></script>
    <title>Walmart Login</title>
    <link rel="stylesheet" href="../Css/login1.css">
</head>
<form action="" method="POST">
<body>
    <div class="header">
        <h1>ShopWise</h1>
    </div>
    <div class="container">
        
        <div class="box">
            <i class="fa-sharp fa-solid fa-user"></i>
            <input type="username" name="username" id="username" placeholder="Enter your username">
        </div>

        <div class="box">
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Enter your password">
        </div>
        <!--<input type="submit" name="submit" value="LOGIN">-->
        <br>
        <input type="submit" class="button" name="submit">
    </div>
    </form>

    
<?php
if (isset($_POST['submit'])) { // Checking if form is submitted
    
    $username = $_POST['username'];
    $pass = $_POST['password'];
    if ($username == "admin" && $pass == 1234) {
        header('Location: adminproduct.php'); // Redirect to adminproduct.php
        exit; // Exit the script to prevent further execution
    } else {
        echo "Invalid username or password"; // Display error message
    }
}
?>
</body>
</html>