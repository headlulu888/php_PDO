<?php
$user = 'root';
$pass = '';
$host = 'localhost';
$dbname = 'blog';

$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
if(!$db) { print "Не подключено!"; } else { print 'Connect<br>'; }
$sql = "INSERT INTO test (name, last_name, email) values ('rodion', 'rodionov', 'solid@ya.ru')";
$db->exec($sql);
$db = null;
?>
