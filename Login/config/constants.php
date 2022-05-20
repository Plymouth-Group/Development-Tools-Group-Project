<?php
//start session
session_start();



//create constants to store non repeating values
define('SITEURL','http://localhost/Rasika_Sir/Login/admindash.php');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','accitex');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accitex";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$conn = mysqli_connect('localhost','root','') or die (mysqli_connect_error());//Database Connection
$db_select=mysqli_select_db($conn,'accitex')or die(mysqli_connect_error());//Selecting Database
?>