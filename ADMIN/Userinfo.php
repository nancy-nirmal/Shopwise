<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Css/userinfo1.css">
  </head>
    <body>
    <header>
    <h1>USER INFO</h1>
   <nav>
    <ul>
      <li><a href="report.html">REPORT</a></li> 
      <li><a href="adminproduct.php">Back</a></li> 
    </ul>
    
  </nav>
</header>  

    <table class="table table-dark">
        <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">ITEM ID</th>
        <th scope="col">EMAIL ID</th>
        <th scope="col">FIRST NAME</th>
        <th scope="col">LAST NAME</th>
        <th scope="col">STATUS</th>
        </tr>
        </thead>
<?php
$con=mysqli_connect("localhost","root","","ecommerce");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
/*<table>
    <tr>
        <th>ID</th>
        <th>Item ID</th>
        <th>Email ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Quantity</th>
        <th>Status</th>
    </tr>*/

    // Check connection
        /*if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
        }

        /*$sql = "SELECT * from user WHERE Price!=0";*/
        

        $sql = "SELECT * FROM users JOIN users_products ON users.id=users_products.user_id";
        /*$result = $con->query($sql);*/
        $result=mysqli_query($con,$sql);

        //fetch rows from result
        $data=array();
        if (mysqli_num_rows($result) > 0) {
        while($row=mysqli_fetch_assoc($result)){
          $data[]=$row;
        }
      }
       /* echo"<table>";
        echo "<tr><th>ID</th>
        <th>Item ID</th>
        <th>Email ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Status</th></tr>";*/ 

        foreach($data as $row){
          echo"<tr>";
          echo "<td>".$row['user_id']."</td>";
          echo "<td>".$row['item_id']."</td>";
          echo "<td>".$row['email_id']."</td>";
          echo "<td>".$row['first_name']."</td>";
          echo "<td>".$row['last_name']."</td>";
          echo "<td>".$row['status']."</td>";
          echo"</tr>";
        }
        echo"</table>";
        mysqli_close($con);
        /*if ($result = $con->query($sql)) 
        {
         
        }*/
        /*while($result && $row = mysqli_fetch_assoc($result)) 
        {
          //echo "id: " . $row["id"]. " Name: " . $row["name"]. " " . $row["price"]. "<br>";
          echo  "<tr>";
          echo  "<td>".$row['id']."</td>";
          echo  "<td>".$row['item_id']."</td>";
          echo  "<td>".$row['email_id']."</td>";
          echo  "<td>".$row['first_name']."</td>";
          echo  "<td>".$row['last_name']."</td>";
          echo  "<td>".$row['registration_time']."</td>";
          /*echo  "<td>".$row['quantity']."</td>";
          echo  "<td>".$row['status']."</td>";
          echo"</tr>";
        }*/
       /* $con->close();*/
       /* <li><a href="#">PREDICTION</a></li> */
  ?>
      
  </table>
</body>
</html>