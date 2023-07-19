<?php
$connection = mysqli_connect("localhost","root","","testing");


    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $months= $_POST['months'];
        $interest = $_POST['interest'];
        $penalty = $_POST['penalty'];
      

        $query = "UPDATE loan_plan SET months='$months', interest='$interest', penalty='$penalty' WHERE id='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:LoanPlan.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>