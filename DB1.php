<?php

$servername = "localhost";
$dbUsername = "ictatjcu_elites";
$dbPassword = "123zxc";
$dbName = "ictatjcu_elites";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
	die("connection failed: ".mysqli_connect_error());	
}  

?>