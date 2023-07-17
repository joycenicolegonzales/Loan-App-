<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_mem']))
{
    $mem_id = mysqli_real_escape_string($con, $_POST['delete_mem']);

    $query = "DELETE FROM member WHERE id='$mem_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Member Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Member Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_mem']))
{
    $mem_id = mysqli_real_escape_string($con, $_POST['mem_id']);
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
 

    $query = "UPDATE member SET firstname='$firstname', middlename='$middlename', lastname='$lastname', presentaddress='$presentaddress', department='$department', employeestatus='$employeestatus', position='$position', age='$age', monthlysalary='$monthlysalary',
    dateofbirth='$dateofbirth', civilstatus='$civilstatus', tinnumber='$tinnumber', contactno='$contactno' WHERE id='$mem_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Member Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Member Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_mem']))
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

    $query = "INSERT INTO member (firstname,middlename,lastname,presentaddress, department, employeestatus, position, age, monthlysalary, dateofbirth, civilstatus, tinnumber, contactno) 
    VALUES ($firstname',  '$middlename', '$lastname', '$presentaddress', '$department', '$employeestatus', '$position', '$age',  '$monthlysalary', '$dateofbirth', '$civilstatus', '$tinnumber', '$contactno')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Member Created Successfully";
        header("Location: ApplicationTest.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Member Not Created";
        header("Location: ApplicationTest.php");
        exit(0);
    }
}

?>