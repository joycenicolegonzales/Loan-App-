<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'phpcrud');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $firstame = $_POST['firstname'];
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
      

        $query = "UPDATE student SET firstname='$firstname', lastname='$lastname', address='$address', age='$age', birthdate='$birthdate',
        birthPlace='$birthPlace',civilstatus='$civilstatus',religion='$religion',occupation='$occupation',monthlyIncome='$monthlyIncome',
        otherIncome='$otherIncome',spouseName='$spouseName',numOfDependents='$numOfDependents',employedCompany='$employedCompany',
        presentEmp='$presentEmp',emergency='$emergency' WHERE id='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>