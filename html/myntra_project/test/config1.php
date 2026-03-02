<?php
// This should be the very first line to start the session before any output
session_start();

// Database connection details
$servername = "localhost"; // Your database server
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "password"; // CHANGE THIS TO YOUR ACTUAL DATABASE NAME        


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed ");
}
echo "database connected";
?>