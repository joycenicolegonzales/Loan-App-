<?php 

if(isset($_POST['submit']))
{
   $name =($_POST['name']);
   $address = ($_POST['address']);
   $cellphoneNum = ($_POST['cellphoneNum']);
   $age = ($_POST['age']);
   $birthdate  = ($_POST['birthdate']);
   $birthPlace = ($_POST['birthPlace']);
   $civilstatus  = ($_POST['civilstatus']);
   $religion =($_POST['religion']);
   $occupation =($_POST['occupation']);
   $monthlyIncome = ($_POST['monthlyIncome']);
   $otherIncome  = ($_POST['otherIncome']);
   $spouseName = ($_POST['spouseName']);
   $numOfDependents = ($_POST['numOfDependents']);
   $employedCompany = ($_POST['employedCompany']);
   $presentEmp = ($_POST['presentEmp']);
   $emergency =($_POST['emergency']);
   $address2 = ($_POST['address2']);
   $cellphoneNum2 = ($_POST['cellphoneNum2']);


   $sql = "INSERT INTO member (name, address, cellphoneNum, age, birthdate, birthPlace,  civilstatus, religion, occupation, monthlyIncome,otherIncome, spouseName, numOfDependents,
   employedCompany, presentEmp, emergency, address2, cellphoneNum2)  VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      $stmt = mysqli_stmt_init($con);
      $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
      if ($prepareStmt) {
         mysqli_stmt_bind_param($stmt,"ssssssssssssssssss",$name,$address,$cellphoneNum,$age,$birthdate,$birthPlace,$civilstatus,$religion,$occupation,
         $monthlyIncome,$otherIncome,$spouseName,$numOfDependents,$employedCompany,$presentEmp,$emergency,$address2,$cellphoneNum2);
         mysqli_stmt_execute($stmt);
         echo "<div class='alert alert-success'>You are registered successfully.</div>";
      }else{
         die("Something went wrong");
      }
   // $query_run = mysqli_query($con, $query);
   // if($query_run)
   // {
   //    $_SESSION['message'] = "Inserted Successfully";
   //    header("Location: MembershipForm.php");
   //    exit(0);
   // }
   // else
   // {
   //    $_SESSION['message'] = "Not Inserted.";
   //    header("Location: MembershipForm.php");
   //    exit(0);
   // }
}
?>