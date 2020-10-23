<?php 

$host = "us-cdbr-east-02.cleardb.com";
$user = "b72ef57090ca66";
$pass = "708d1cd0";
$db   = "heroku_fcd20689d46b3ac";
$conn = null;


try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>
