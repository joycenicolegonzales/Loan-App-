<?php

error_reporting(0);

$host ="localhost";
$user ="root";
$password ="";
$db ="loanapp";

$con = mysqli_connect("localhost","root","","loanapp");

if (!$con) {
	echo "Connection Failed!";
	exit();
}

?>