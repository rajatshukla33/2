<?php 

$host = "remotemysql.com";
$user = "X8ozUyo9ED";
$pass = "xZv0XXr2NT";
$db   = "X8ozUyo9ED";
$charset="utf8mb4";
//$conn = null;
$dsn="mysql:host=$host;dbname=$db;charset=$charset";
try
{
  $pdo=new($dsn,$user,$pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
  throw new PDOExceptiom($e->getMessage());}
require_once=crud.php;
$crud=new crud($pdo);



/*
try {
  $conn = new PDO("mysql:$user,$pass,host={$host};dbname={$db};");
} catch (Exception $e) {
  
}


 ?>
/*
<?php
$servername = "us-cdbr-east-02.cleardb.com";
$username = "b49b490714a0d5";
$password = "zebe1fd7a";
$db   = "heroku_fa2b7ae7ff461f8";

// Create connection
$conn = new mysqli($servername,$db, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}*/
echo "Connected successfully";
?>
*/
