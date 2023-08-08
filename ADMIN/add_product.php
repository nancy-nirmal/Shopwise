<?php
$con = mysqli_connect("localhost", "root", "", "ecommerce");
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
  // require("adminproduct.php");
  //retreival code
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRODUCT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="../Css/add1.css">
</head>
<body>
<header>
    <h1>PRODUCT</h1>
    <nav>
      <ul>
        <li><a href="../index.php">USER FRAME</a></li>
        <li><a href="Userinfo.php">USER INFO</a></li>
        <li><a href="report.html">REPORT</a></li>
        <li><a href="adminproduct.php">Logout</a></li>
      </ul>
    </nav> 
    <div class="d-flex justify-content-center">
        <div class="col-md-6 my-0 table-responsive p-3">
            <table class="table table-striped table-bordered table-hover">
                <?php
                $sql = "SELECT * FROM products WHERE Price!=0";
                $result = $con->query($sql);
                if (mysqli_num_rows($result) >= 1) {
                ?>
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "</tr>";
                    }
                    $con->close();
                    ?>
                </tbody>
                <?php
                } else {
                    echo "<tr><td colspan='3'>No products found.</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>
</header>
</body>
</html>
