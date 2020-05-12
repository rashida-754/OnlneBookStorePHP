<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookshare";

// Create connection
$conn1 = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn1) 
{
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
include 'page1.php';
?>