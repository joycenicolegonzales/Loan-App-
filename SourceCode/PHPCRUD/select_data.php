<?php  
 if(isset($_POST["id"]))  
 {  
      $output = '';  
      $connection = mysqli_connect("localhost", "root", "", "phpcrud");  
      $query = "SELECT * FROM  student WHERE id = '".$_POST["id"]."'";  
      $result = mysqli_query($connection, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                
                <tr>  
                     <td width="30%"><label>Firstname</label></td>  
                     <td width="70%">'.$row["firstname"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Lastname</label></td>  
                     <td width="70%">'.$row["lastname"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row["address"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Phone No.</label></td>  
                     <td width="70%">'.$row["cellphoneNum"].'</td>  
                </tr>  
                <tr>  
                <td width="30%"><label>Age</label></td>  
                <td width="70%">'.$row["age"].'</td>  
           </tr>  
           <tr>  
               <td width="30%"><label>BirthDate</label></td>  
               <td width="70%">'.$row["birthdate"].'</td>  
            </tr> 
            <tr>  
               <td width="30%"><label>Birth Place</label></td>  
               <td width="70%">'.$row["birthPlace"].'</td>  
             </tr> 
             <tr>  
               <td width="30%"><label>Civil Status</label></td>  
               <td width="70%">'.$row["civilstatus"].'</td>  
              </tr>  
              <tr>  
               <td width="30%"><label>Religion</label></td>  
               <td width="70%">'.$row["religion"].'</td>  
               </tr> 
               <tr>  
                   <td width="30%"><label>Occupation</label></td>  
                   <td width="70%">'.$row["occupation"].'</td>  
                </tr> 
                <tr>  
                   <td width="30%"><label>Monthly Income</label></td>  
                   <td width="70%">'.$row["monthlyIncome"].'</td>  
                 </tr> 
                 <tr>  
                   <td width="30%"><label>Other Income</label></td>  
                   <td width="70%">'.$row["otherIncome"].'</td>  
               </tr> 
               <tr>  
                   <td width="30%"><label>Spouse Name</label></td>  
                   <td width="70%">'.$row["spouseName"].'</td>  
               </tr> 
               <tr>  
                   <td width="30%"><label>Num of Dependents</label></td>  
                   <td width="70%">'.$row["numOfDependents"].'</td>  
               </tr> 
               <tr>  
                   <td width="30%"><label>Employed Company</label></td>  
                   <td width="70%">'.$row["employedCompany"].'</td>  
               </tr> 
               <tr>  
                   <td width="30%"><label>Present Employment</label></td>  
                   <td width="70%">'.$row["presentEmp"].'</td>  
               </tr> 
               <tr>  
                   <td width="30%"><label>Emergency</label></td>  
                   <td width="70%">'.$row["emergency"].'</td>  
               </tr> 
                
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>
 