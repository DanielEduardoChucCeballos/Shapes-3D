<?php
$dsn = 'mysql:dbname=impresora;host=localhost';
$user = 'root';
$password = 'mariadatabase';

try
{
	$pdo = new PDO($dsn,$user,$password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	
}
catch(PDOException $e)
{
	echo "PDO error".$e->getMessage();
	die();
}
?>