/*<?php 

$host = "us-cdbr-east-02.cleardb.com";
$user = "b72ef57090ca66";
$pass = "708d1cd0";
$db   = "heroku_fcd20689d46b3ac";
//$conn = null;

/*
try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>
*/
<?php
$servername = "us-cdbr-east-02.cleardb.com";
$username = "b72ef57090ca66";
$password = "708d1cd0";
$db   = "heroku_fcd20689d46b3ac";

// Create connection
$conn = new mysqli($servername,$db, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
