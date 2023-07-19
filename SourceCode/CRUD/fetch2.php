
<?php  
 //fetch.php  
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 if(isset($_POST["plan_id"]))  
 {  
      $query = "SELECT * FROM loan_plan WHERE id = '".$_POST["plan_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>
 