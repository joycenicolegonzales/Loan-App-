<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'phpcrud');

if(isset($_POST['insertdata']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $birthdate = $_POST['birthdate'];
    $birthPlace = $_POST['birthPlace'];
    $civilstatus = $_POST['civilstatus'];
    $religion = $_POST['religion'];
    $occupation = $_POST['occupation'];
    $monthlyIncome = $_POST['monthlyIncome'];
    $otherIncome = $_POST['otherIncome'];
    $spouseName = $_POST['spouseName'];
    $numOfDependents = $_POST['numOfDependents'];
    $employedCompany = $_POST['employedCompany'];
    $presentEmp = $_POST['presentEmp'];
    $emergency = $_POST['emergency'];
    

    $query = "INSERT INTO student (`firstname`,`lastname`,`address`,`age`, `birthdate`, `birthPlace`, `civilstatus`, `religion`, `occupation`, `monthlyIncome`, `otherIncome`,`spouseName`, `numOfDependents`, `employedCompany`, `presentEmp`, `emergency`) 
    VALUES ('$firstname','$lastname','$address','$age','$birthdate','$birthPlace','$civilstatus','$religion','$occupation','$monthlyIncome', '$otherIncome', '$spouseName','$numOfDependents','$employedCompany','$presentEmp','$emergency')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>