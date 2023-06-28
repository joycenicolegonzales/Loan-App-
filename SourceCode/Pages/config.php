<?php
session_start();
$dbHost = 'localhost';
$dbName = 'coop';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>  