<?php
    $connect = mysqli_connect("localhost", "root", "", "testing");
   
    if(isset($_POST['delete_data']))
    {
        $id = $_POST['delete_id'];

        $query = "DELETE FROM loan_plan WHERE id='$id' ";
        $query_run = mysqli_query($connect, $query);

        if($query_run)
        {
            echo "Data Deleted";
        }
        else{
            echo "Data Not Deleted";
        }
    }
?>


