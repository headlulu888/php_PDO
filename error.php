<?php
error_reporting(0);
$host   = 'localhost';
$dbname = 'blog';
$user   = 'root';
$pass   = '';
try {
  $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "У нас проблемы!!!<br>";
  file_put_contents('PDOErrors.txt', $e->getMessage()."\n", FILE_APPEND);
}
$sql = "SELECT name, last_name, email FROM test";
foreach($db->query($sql) as $row) {
  echo $row['name'].' => '.$row['last_name'].' => '.$row['email']."<br>";
}
$db = null;
?>
