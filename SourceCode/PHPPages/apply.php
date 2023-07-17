<?php 
session_start();
require 'dbcon.php';

if(isset($_POST['save_member']))
{
   $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
   $middlename = mysqli_real_escape_string($con, $_POST['middlename']);
   $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
   $presentaddress = mysqli_real_escape_string($con, $_POST['presentaddress']);
   $department  = mysqli_real_escape_string($con, $_POST['department']);
   $employeestatus = mysqli_real_escape_string($con, $_POST['employeestatus']);
   $position   = mysqli_real_escape_string($con, $_POST['position']);
   $age = mysqli_real_escape_string($con, $_POST['age']);
   $monthlysalary = mysqli_real_escape_string($con, $_POST['monthlysalary']);
   $dateofbirth  = mysqli_real_escape_string($con, $_POST['dateofbirth']);
   $civilstatus  = mysqli_real_escape_string($con, $_POST['civilstatus']);
   $tinnumber = mysqli_real_escape_string($con, $_POST['tinnumber']);
   $contactno = mysqli_real_escape_string($con, $_POST['contactno']);

   $query = "INSERT INTO member (firstname,middlename,lastname,presentaddress, department, employeestatus, position, age, monthlysalary, dateofbirth, civilstatus, tinnumber, contactno	
   ) VALUES ('$firstname',  '$middlename', '$lastname', '$presentaddress', '$department', '$employeestatus', '$position', '$age',  '$monthlysalary', '$dateofbirth', '$civilstatus', '$tinnumber', '$contactno')";

   $query_run = mysqli_query($con, $query);
   if($query_run)
   {
      $_SESSION['message'] = "Inserted Successfully";
      header("Location: ApplicationTest.php");
      exit(0);
   }
   else
   {
      $_SESSION['message'] = "Not Inserted.";
      header("Location: ApplicationTest.php");
      exit(0);
   }
}

?>