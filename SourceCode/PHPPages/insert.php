<?php  
 $connect = mysqli_connect("localhost", "root", "", "loanapp");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $member_id = mysqli_real_escape_string($connect, $_POST["MemberID"]);
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
    //   $image  = mysqli_real_escape_string($connect, $_POST["image"]);
    //   $signature  = mysqli_real_escape_string($connect, $_POST["signature"]);

      
      if($_POST["Member_ID"] != '')  
      {  
           $query = "  
           UPDATE member  
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
           WHERE Member_ID='".$_POST["Mem_ID"]."'";  
           $message = 'Data Updated';  
      }  
      else  
      {  
           $query = "  
           INSERT INTO member(firstname, lastname, address, cellphoneNum, age,birthdate, birthPlace, civilstatus,religion,occupation,monthlyIncome,
           otherIncome,spouseName,numOfDependents,employedCompany,presentEmp,emergency) 

           VALUES('$firstname', '$lastname', '$address', '$cellphoneNum', '$age','$birthdate', '$birthPlace', '$civilstatus','$religion','$occupation','$monthlyIncome',
           '$otherIncome','$spouseName','$numOfDependents','$employedCompany','$presentEmp','$emergency');  
           ";  
           $message = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM member ORDER BY Member_ID DESC";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                     <th width="10%">#</th>  
                     <th width="30%">FirstName</th>  
                     <th width="25%">LastName</th> 
                     <th width="25%">Address</th>
                     <th width="25%">Edit</th>
                     <th width="25%">View</th
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["Member_ID"] . '</td> 
                          <td>' . $row["firstname"] . '</td> 
                          <td>' . $row["lastname"] . '</td> 
                          <td>' . $row["address"] . '</td> 
                          <td><input type="button" name="edit" value="Edit" id="'.$row["Member_ID"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["Member_ID"] . '" class="btn btn-info btn-xs view_data" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>