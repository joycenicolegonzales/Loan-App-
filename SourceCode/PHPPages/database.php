<?php

<<<<<<< HEAD
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "loanapp";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
=======
error_reporting(0);

$host ="localhost";
$user ="root";
$password ="";
$db ="loanapp";

$con = mysqli_connect("localhost","root","","loanapp");

if (!$con) {
	echo "Connection Failed!";
	exit();
>>>>>>> aa9a6e4c820b98b95297502cece72eed1ead8f11
}

?>