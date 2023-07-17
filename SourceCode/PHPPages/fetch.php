<?php  
 //fetch.php  
 $connect = mysqli_connect("localhost", "root", "", "loanapp");  
 if(isset($_POST["Member_ID"]))  
 {  
      $query = "SELECT * FROM member WHERE Member_ID = '".$_POST["Member_ID"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>