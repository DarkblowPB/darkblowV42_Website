<?php
try
{
	$dbuser = 'postgres';
	$dbpass = '123456';
	$host = '127.0.0.1';
	$dbname='darkblowproject';
	$connec = new PDO("pgsql:host=$host;dbname=$dbname", $dbuser, $dbpass);
}
catch (PDOException $e)
{
	echo "Error : " . $e->getMessage() . "<br/>";
	die();
} 
?>