<?php
require("../includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin Product</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../Css/admin1.css">

</head>

<body>
  <header>
  <div class=navbar>
    <h1>ADMIN PRODUCT</h1>
    <!-- <nav> -->
      <ul>
        <li><a href="../index.php">USER FRAME</a></li>
        <li><a href="Userinfo.php">USER INFO</a></li>
        <li><a href="report.html">REPORT</a></li>
        <li><a href="login.php">Logout</a></li>
      </ul>
    <!-- </nav> -->
  </div>
    

    <form action="" method="POST">
      <nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color:rgba(0,0,0,0.5)">
        <div class="container">
          <a class="navbar-brand" style="font-family: 'Delius Swash Caps'"></a> <span class="navbar-toggler-icon"></span>
          <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
           
          </button>-->
          <div class="p1"> 
            <label for="proid">Product ID:</label>
            <input type="text" id="proid" name="proid" require>
          </div>

          <div class="p2">
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" require>
          </div>

          <div class="p3">
            <label for="price">Product Price:</label>
            <input type="text" id="price" name="price" require>
          </div>
          <div><input type="submit" class="button" name="submit" value="Add Product">
        <input type="button" class="button" name="products" value="Products" onclick="location.href='add_product.php'">
          </div>
    </form>
    <?php
    if (isset($_POST['submit'])) {
      $prodid = mysqli_real_escape_string($con, $_REQUEST['proid']);
      $prodname = mysqli_real_escape_string($con, $_REQUEST['name']);
      $prodprice = mysqli_real_escape_string($con, $_REQUEST['price']);

      // Check if the required fields are not empty
      if (!empty($prodid) && !empty($prodname) && !empty($prodprice)) {
        $sql = "INSERT INTO products (id, name, price)
              VALUES ('$prodid', '$prodname', '$prodprice')";
        if (mysqli_query($con, $sql)) {
          echo "New record created successfully";
        } else {
        print "Product id already exist";
        }
      } else {
        echo "Name and/or price cannot be empty";
      }
    }
    ?>
 </header>
</body>
</html>

