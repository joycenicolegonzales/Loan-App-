<?php  
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $firstname = mysqli_real_escape_string($connect, $_POST["firstname"]);  
      $lastname = mysqli_real_escape_string($connect, $_POST["lastname"]);  
      $address = mysqli_real_escape_string($connect, $_POST["address"]);  
      $cellphoneNum = mysqli_real_escape_string($connect, $_POST["cellphoneNum"]);  
      $age = mysqli_real_escape_string($connect, $_POST["age"]);
      $birthdate = mysqli_real_escape_string($connect, $_POST["birthdate"]);
      $birthPlace = mysqli_real_escape_string($connect, $_POST["birthPlace"]);
      $civilstatus = mysqli_real_escape_string($connect, $_POST["civilstatus"]);
      $religion  = mysqli_real_escape_string($connect, $_POST["religion"]);
      $occupation  = mysqli_real_escape_string($connect, $_POST["occupation"]);
      $monthlyIncome = mysqli_real_escape_string($connect, $_POST["monthlyIncome"]);
      $otherIncome = mysqli_real_escape_string($connect, $_POST["otherIncome"]);
      $spouseName = mysqli_real_escape_string($connect, $_POST["spouseName"]);
      $numOfDependents = mysqli_real_escape_string($connect, $_POST["numOfDependents"]);
      $employedCompany = mysqli_real_escape_string($connect, $_POST["employedCompany"]);
      $presentEmp = mysqli_real_escape_string($connect, $_POST["presentEmp"]);
      $emergency = mysqli_real_escape_string($connect, $_POST["emergency"]);  
     
      if($_POST["employee_id"] != '')  
      {  
           $query = "  
           UPDATE tbl_employee   
           SET firstname='$firstname',   
           lastname='$lastname',   
           address='$address',
           cellphoneNum='$cellphoneNum',
           age='$age',
           birthdate='$birthdate',
           birthPlace='$birthPlace',
           civilstatus='$civilstatus',
           religion='$religion',
           occupation='$occupation',
           monthlyIncome='$monthlyIncome',
           otherIncome='$otherIncome',
           spouseName='$spouseName',
           numOfDependents='$numOfDependents',
           employedCompany='$employedCompany',
           presentEmp='$presentEmp',
           emergency='$emergency', 
           
          
           WHERE id='".$_POST["employee_id"]."'";  
           $message = 'Data Updated';  
      }  
      else  
      {  
           $query = "  
           INSERT INTO tbl_employee(firstname, lastname, address, cellphoneNum, age,birthdate, birthPlace, civilstatus,religion,occupation,monthlyIncome,
           otherIncome,spouseName,numOfDependents,employedCompany,presentEmp,emergency) 
           VALUES('$firstname', '$lastname', '$address', '$cellphoneNum', '$age','$birthdate', '$birthPlace', '$civilstatus','$religion','$occupation','$monthlyIncome',
           '$otherIncome','$spouseName','$numOfDependents','$employedCompany','$presentEmp','$emergency');  
           ";  
           $message = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM tbl_employee ORDER BY id DESC";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                        
                        <th width="25%">Firstname</th> 
                        <th width="25%">Lastname</th>
                        <th width="25%">Address</th> 
                        <th width="25%">Edit</th>  
                        <th width="25%">View</th>  
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          
                          <td>'. $row["firstname"] .'</td> 
                          <td>'. $row["lastname"] .'</td>
                          <td>'. $row["address"] .'</td>



                          <td><input type="button" name="edit" value="Edit" id="'.$row["id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>