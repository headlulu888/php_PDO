<?php
$user = 'root';
$pass = '';
$host = 'localhost';
$dbname = 'blog';
$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

if(!$db) { print "Не подключено!"; } else { print 'Connect<br>'; }
$sql = 'SELECT name, last_name, email FROM test';
foreach($db->query($sql) as $row) {
  echo $row['name']."--".$row['last_name']."--".$row['email']."<br>";
}
$db = null;
?>
