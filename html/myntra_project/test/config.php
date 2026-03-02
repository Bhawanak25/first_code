<?php
session_start();

$dbhost ="localhost";
$dbuser = "root";
$dbpass = "";
$dbname ="project";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn) {
	die("Database Error Please connect!");
}
//echo "database Connected successfully";
?>