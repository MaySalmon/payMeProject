<?php


 $servername = "localhost";

$username = "root";

$password = "";

$dbname = "payme";


// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}


$product_name=$_POST['productname'];
$sale_price=$_POST['price'];
$currency=$_POST['currency'];

$sql = "INSERT INTO sales(product_name, sale_price, currency) VALUES ('$product_name', '$sale_price', '$currency')";

 

if ($conn->query($sql) === TRUE) {

  echo "New record created successfully";

} else {

  echo "Error: " . $sql . "<br>" . $conn->error;

}

 

$conn->close(); 

?>
