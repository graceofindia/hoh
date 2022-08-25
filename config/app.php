<?php
$username = "root";
$password = "";
$hostname = "localhost"; 
$dbname   = "goi"; 

//connection to the database
$con = mysqli_connect($hostname, $username, $password,$dbname) 
  or die("Unable to connect to MySQL");
?>