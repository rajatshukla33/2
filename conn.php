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
$servername = "vrk7xcrab1wsx4r1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "u8ja13onqqtl7vd6";
$password = "zvoa5die2xzaicw6";
$db   = "e86pfr6st0rbwyyh";

// Create connection
$conn = new mysqli($servername,$db, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
