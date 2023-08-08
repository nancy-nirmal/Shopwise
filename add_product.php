
<table>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Price</th>
        </tr>
<?php
 require("adminproduct.php");
        //retreival code
        $con=mysqli_connect("localhost","root","","ecommerce");
        if (!$con) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        if(isset($_POST['submit']))
        {
        $prodid =  mysqli_real_escape_string($con,$_REQUEST['proid']);
        $prodname =  mysqli_real_escape_string($con,$_REQUEST['name']);
        $prodprice =  mysqli_real_escape_string($con,$_REQUEST['price']);
        /*$prodname= $_POST['name'];
        $prodprice =  $_POST['price'];*/
        $sql = "INSERT INTO products (id,name, price)
        VALUES ('$prodid', '$prodname', '$prodprice') ";
        if(mysqli_query($con,$sql))
        {
          echo "New record created successfully";
        }
        else{
          echo "Error";
          mysqli_error($con);
        }
      }
      
      
       
        
// Check connection
        if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
        }

        $sql = "SELECT * from products WHERE Price!=0";
        $result = $con->query($sql);
        /*if ($result = $con->query($sql)) 
        {
         
        }*/
        while($row = mysqli_fetch_assoc($result)) 
        {
          //echo "id: " . $row["id"]. " Name: " . $row["name"]. " " . $row["price"]. "<br>";
          echo  "<tr>";
          echo  "<td>".$row['id']."</td>";
          echo  "<td>".$row['name']."</td>";
          echo  "<td>".$row['price']."</td>";
          echo"</tr>";
        }
        $con->close();
  ?>
</table>

<?php
/*
  // Code to connect to the database
  require("adminproduct.php");

  $servername="localhost";
  $username="username";
  $pass="password";
  $dbname = "ecommerce";
  // Create connection
  $conn = new mysqli($servername, $username, $pass, $dbname);

  $con=mysqli_connect("localhost","root","","ecommerce");
  if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
  }
  else{


// Check connection
/*if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}*/
/*if(()*/
// Taking all 5 values from the form data(input)
  /*$prodid =  $_REQUEST['proid'];
  $prodname= $_REQUEST['name'];
  $prodprice =  $_REQUEST['price'];

  $sql = "INSERT INTO products (id,name, price)
  VALUES ('$prodid', '$prodname', '$prodprice')";
  }
  if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }

  $con->close();*/

/*$con=mysqli_connect("localhost","root","","ecommerce");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $id=$_POST["proid"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    
    // Code to insert the product data into the database
  }
   /*
        if ($con->query($sql) === TRUE) {
          /*echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $con->error;
        }
        
  
  $query = "INSERT into products(id,name,price) Values($id,$name,$price);
  $result = mysqli_query($con, $query);
  $con->query($query);
  $con->close();*/

?>