<?php

$servername = "localhost";
$dbname = "esolar07_family";
$username = "esolar07_dbeddie";
$password = "kate3481";

// conecting to db
try{
	$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch(Exception $e){
	echo $e->getMessage();
	die();
}

?>