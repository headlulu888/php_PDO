<?php
$user = 'root';
$pass = '';
$host = 'localhost';
$dbname = 'blog';
$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

if(!$db) { print "Не подключено!"; } else { print 'Connect<br>'; }
$sql = "DELETE FROM test WHERE name='rodion'";
$db->exec($sql);
$db = null;
?>
