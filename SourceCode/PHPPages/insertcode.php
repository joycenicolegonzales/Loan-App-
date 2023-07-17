<?php

$con = mysqli_connect("localhost","root","","loanapp");

if(isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $cellphoneNum = $_POST['cellphoneNum'];
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
    $image = $_POST['image'];
    $signature = $_POST['signature'];

    $query = "INSERT INTO member (firstname, lastname, address, cellphoneNum, age, birthdate, birthPlace,  civilstatus, religion,occupation, monthlyIncome,otherIncome, spouseName, numOfDependents,
    employedCompany, presentEmp, emergency, image, signature) VALUES('$firstname', '$lastname','$address','$cellphoneNum','$age','$birthdate','$birthPlace','$civilstatus','$religion','$occupation',
   '$monthlyIncome','$otherIncome','$spouseName','$numOfDependents','$employedCompany','$presentEmp','$emergency','$image', '$signature')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: MemberList.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }

}


 //select.php 
 

