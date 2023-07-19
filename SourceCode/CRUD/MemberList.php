<?php  
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 $query = "SELECT * FROM member ORDER BY id DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" /> 

        <title>Webslesson Tutorial | PHP Ajax Update MySQL Data Through Bootstrap Modal</title>  

        <link href="dashstyles.css" rel="stylesheet" />
        <!-- <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script> -->
        <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script>  
        
			<script async='async' src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
		<script>
		  (adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-4529508631166774",
			enable_page_level_ads: true
		  });
		</script>

                
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>     -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    

</head>

<style>
            


  input[type="button"] {
      transition: all .3s;
      border: 1px solid #ddd;
      padding: 8px 16px;
      text-decoration: none;
      border-radius: 5px;
      font-size: 15px;
  align-items: end;
  }
  
  input[type="button"]:not(.active) {
      background-color:transparent;
  }
  
  .active {
      background-color: blue;
      color :#fff;
  }
  
  input[type="button"]:hover:not(.active) {
      background-color: #ddd;
  }
</style>

    <body class="sb-nav-fixed" style="overflow-y: hidden;">
        <nav class="sb-topnav navbar navbar-expand " style="background-color: #1165AE; ">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="dash.html" style="color: #FFDE59;">
                <img src="/SourceCode/images/logoo.jpg"  class="" style="width: 50px; height: 50px;"alt=""> NMEMPC
            </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars" style="color: #FFDE59;"> </i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw text-white"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading text-white ">Core</div>
                            <a class="nav-link text-white" href="Admin_Dashboard.php">
                                <div class="sb-nav-link-icon text-white"><i class="fas fa-tachometer-alt  "></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading text-white">Member</div>
                            <a class="nav-link active px-2 text-white" href="MemberList.php"><i class="fa-solid fa-user-group  me-2"></i> List of Members</a>
                            <a class="nav-link  px-2 text-white" href="MemberApproval.php"><i class="fa-solid fa-user-check  me-1"></i>  Membership Approval </a>
                
                       
                            <div class="sb-sidenav-menu-heading text-white">Loans</div>
                            <a class="nav-link px-2 text-white" href="Member_Loan.html"><i class="fa-solid fa-credit-card  me-2"></i> Member's Loan</a>
                            <a class="nav-link px-2 text-white" href="LoanPlan.html"><i class="fa-solid fa-credit-card  me-2"></i> Loan Plan</a>
                            <a class="nav-link px-2 text-white" href="LoanType.html"><i class="fa-solid fa-table me-2"></i> Loan Types</a>
                        
                        </div>
                    </div>
                   
                </nav>
            </div>


     
      <body>  
           <br /><br />  
           <div id="layoutSidenav_content">
                <main class="main-container py-2 px-4" style="height: 100vh; background-color: #d9d9d9; " >

           <!-- <div class="container" style="width:700px; margin-top: 10%;">   -->
                
				<!-- <div class="col-md-3"> -->
					
				<!-- </div> -->

                    <div class="container my-2 bg-light " >
                      <div class="d-flex py-3 justify-content-between">
                         
				<div class="col-md-12 " >
                   
					<div class="table-responsive">  
						 <div class="d-flex justify-content-between">  
                               <h4>List of Members</h4>
							  <!-- <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Add</button>   -->
                                     <button type="button" name="add" id="add" data-bs-toggle="modal" data-bs-target="#add_data_Modal" class="btn btn-warning">Add</button>  
						 </div> <!--   <button type="button" name="add" id="add" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_data_Modal"> -->
                          
						 <br />  
                               <div class="row my-1 justify-content-center">
                      <div class="div  py-1" style="max-height:520px ;  ">
                      <div id="employee_table">  
                          <table class="table table-bordered" style="overflow-y: scroll;">  
                               <tr>  
                                    <th width="40%">Firstname</th>  
                                    <th width="30%">Lastname</th> 
                                    <th width="20%">Address</th>   
                                    <th width="15%">Edit</th>  
                                    <th width="15%">View</th>  
                                    <th width="15%">Delete</th>  
                                    

                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  
                                    <td><?php echo $row["firstname"]; ?></td>  
                                    <td><?php echo $row["lastname"]; ?></td>  
                                    <td><?php echo $row["address"]; ?></td>  
                                    <td><input type="button" name="edit" value="Edit" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs edit_data" /></td>  
                                    <td><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>  
                                    <td><input type="button" name="delete" value="delete" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs delete_data" /></td> 
                               </tr>  
                               <?php  
                               }  
                               ?>  
                          </table>  
                     </div>  
                </div>  
           </div>  
      </body>  
 </html>  

 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
          
                     <h4 class="modal-title">Employee Details</h4>  
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  

 <!-- <div id="editModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
          
                     <h4 class="modal-title">Edit Student Data</h4>  
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
                </div>  
                <form action="updatecode.php" method="POST">
                <div class="modal-body">

                    <input type="hidden" name="update_id" id="update_id">

                    <div class="form-group">
                    <label> First Name </label>
                    <input type="text" name="fname" id="fname" class="form-control"
                         placeholder="Enter First Name">
                    </div>

                    <div class="form-group">
                    <label> Last Name </label>
                    <input type="text" name="lname" id="lname" class="form-control"
                         placeholder="Enter Last Name">
                    </div>

                    <div class="form-group">
                    <label> Course </label>
                    <input type="text" name="course" id="course" class="form-control"
                         placeholder="Enter Course">
                    </div>

                    <div class="form-group">
                    <label> Phone Number </label>
                    <input type="text" name="contact" id="contact" class="form-control"
                         placeholder="Enter Phone Number">
                    </div>
                    </div>
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Update Data</button>  
                </div>  
           </div>  
      </div>  
 </div>   -->

 <!-- <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
          
                     <h4 class="modal-title">Employee Details</h4>  
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>   -->

 <div id="delete_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                         
                     <h4 class="modal-title">Delete Member</h4>  
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
                </div>  
                <div class="modal-body" id="delete_mem"> 
                    <input type="hidden" id="delete_id">
                    <h4>Are you sure you want to delete this data?</h4> 
                </div>  
                <div class="modal-footer">  
                     <input type="button" name="close"  value="Close" data-bs-dismiss="modal" class="btn btn-default" />
                     <input type="submit" name="delete_mem"  value="Delete"  data-bs-dismiss="modal" class="btn btn-danger" onclick="deleteData();" /> 
                </div>  
            </div>
      </div>  
 </div>

 
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog modal-dialog-centered modal-XL">  
           <div class="modal-content">  
                <div class="modal-header">  
                <h5 class="modal-title" id="exampleModalToggleLabel">Add New Member</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                     <div class="row mb-2 px-4" >

                    <div class="col-md-6 " >
                    <div class="form-outline">
                    <label class="form-label" for="name">Firstname</label>
                    <input type="text" id="firstname" name="firstname" class="form-control form-control-md" />
                    </div>
                    </div>
                    <div class="col-md-6 ">

                    <div class="form-outline">
                    <label class="form-label" for="name">LastName</label>
                    <input type="text" id="lastname" name="lastname" class="form-control form-control-md"/>
                    </div>

                    </div>

                    </div>
                    <div class="row mb-2 px-4"  >
                         <div class="col-md-6 ">
                         <div class="form-outline">
                         <label class="form-label" for="presentAddress">Present Address</label>
                         <input type="text" id="address" name="address" class="form-control form-control-md"/> 
                         </div>
                         </div>

                         <div class="col-md-6 ">
                         <div class="form-outline">
                         <label for="cellphoneNum" class="form-label">Cellphone No. </label>
                         <input type="text"  name ="cellphoneNum" class="form-control form-control-md" id="cellphoneNum" />
                         
                         </div>
                         </div>
                    </div>
                    <div class="row mb-2 px-4">
          <div class="col-md-3 d-flex align-items-center">

            <div class="form-outline  w-100">
              <label for="age" class="form-label">Age</label>
              <input type="text" name="age" class="form-control form-control-md" id="age" />
           
            </div>

          </div>
   
          <div class="col-md-4 d-flex align-items-center">

            <div class="form-outline  w-100">
              <label for="dob" class="form-label">Birth Date</label>
              <input type="date" name="birthdate" class="form-control form-control-md" id="birthdate" >
            </div>
          </div>

          <div class="col-md-5 pb-2">
            <div class="form-outline">
              <label class="form-label" for="birthPlace">Birthplace</label>
              <input type="text" name="birthPlace" id="birthPlace" class="form-control form-control-md" />
                </div>
          </div>
        </div>
        <div class="row mb-2 px-4">               
          <div class="col-md-6 pb-2">
          <label class="form-label select-label">Civil Status</label>
            <select class="select form-control form-control-md" name="civilstatus"  id="civilstatus" >
               <option value="Single">Single</option>
               <option value="Married">Married</option> 
                <option value="Widowed">Widowed</option>
                <option value="Separated">Separated</option>
            </select>
          </div>                     
          <div class="col-md-6  pb-2">                 
            <div class="form-outline">
              <label class="form-label" for="Religion">Religion</label>
              <input type="text" id="religion" name="religion" class="form-control form-control-md"  />
              
            </div>
        </div>
        </div>

      
        <div class="row mb-2 px-4">
          <div class="col-md-4 pb-2">

            <div class="form-outline">
              <label class="form-label" for="occupation">Occupation</label>
              <input type="text" id="occupation" name="occupation" class="form-control form-control-md" />
             
            </div>

          </div>

          <div class="col-md-4 pb-2">
           
            <label class="form-label select-label">Monthly Income</label>
            <input type="text" name="monthlyIncome" id="monthlyIncome" class="form-control form-control-md" />
          </div>

          <div class="col-md-4 pb-2">

            <div class="form-outline">
              <label class="form-label" for="otherIncome">Other Sources of Income</label>
              <input type="text" id="otherIncome"  name="otherIncome" class="form-control form-control-md" /> 
            </div>

          </div>
          </div>


        <div class="row mb-2 px-4">
            <div class="col-md-6 pb-2">

                <div class="form-outline">
                  <label class="form-label" for="spouseName">Name of Spouse (if married)</label>
                  <input type="text" id="spouseName" name="spouseName" class="form-control form-control-md" />
                
                </div>

              </div>

        
         

          <div class="col-md-6  pb-2">
            <div class="form-outline">
              <label class="form-label" for="numOfDependents">No. of Dependents</label>
              <input type="text" id="numOfDependents"  name="numOfDependents" class="form-control form-control-md"  />
              
            </div>
          </div>


        </div>

        <div class="row mb-2 px-4">
            <div class="col-md-3  pb-2">

                <div class="form-outline">
                  <label class="form-label" for="employedCompany">Name of Company</label>
                  <input type="text" id="employedCompany"  name="employedCompany" class="form-control form-control-md" />
               
                </div>

              </div>

        
          <div class="col-md-3  pb-2">
            <div class="form-outline">
              <label class="form-label" for="presentEmp">Present Employment</label>
              <input type="text" id="presentEmp" name="presentEmp" class="form-control form-control-md"  />
             
            </div>
          </div>

          <div class="col-md-6  pb-2">
            <div class="form-outline">
              <label class="form-label" for="emergency">Person to be contacted in case of emergency</label>
              <input type="text" id="emergency" name="emergency" class="form-control form-control-md" />
             
            </div>
          </div>
        </div>
        <div class="modal-footer">         
                          <input type="hidden" name="employee_id" id="employee_id" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
                              </div>  
                     </form>  
                </div>  
               
           </div>  
      </div>  
 </div>  



 <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });   
     $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                    $('#firstname').val(data.firstname); 
                     $('#lastname').val(data.lastname);  
                     $('#address').val(data.address);  
                     $('#cellphoneNum').val(data.cellphoneNum);  
                     $('#age').val(data.age);  
                     $('#birthdate').val(data.birthdate);   
                     $('#birthPlace').val(data.birthPlace);  
                     $('#civilstatus').val(data.civilstatus);  
                     $('#religion').val(data.religion);  
                     $('#occupation').val(data.occupation);  
                     $('#monthlyIncome').val(data.monthlyIncome);  
                     $('#otherIncome').val(data.otherIncome);  
                     $('#spouseName').val(data.spouseName);  
                     $('#numOfDependents').val(data.numOfDependents);  
                     $('#employedCompany').val(data.employedCompany);  
                     $('#presentEmp').val(data.presentEmp);  
                     $('#emergency').val(data.emergency)
                     

                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                } 
                 
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#firstname').val() == "")  
           {  
                alert("Name is required");  
           }  
          //  else if($('#lastname').val() == '')  
          //  {  
          //       alert("Lastname is required");  
          //  }  
          //  else if($('#Address').val() == '')  
          //  {  
          //       alert("Address is required");  
          //  }  
          //  else if($('#cellphoneNum').val() == '')  
          //  {  
          //       alert("Phone No. is required");  
          //  }  
          //  else if($('#age').val() == '')  
          //  {  
          //       alert("Age is required");  
          //  }  
          //  else if($('#birthdate').val() == '')  
          //  {  
          //       alert("Birthdate is required");  
          //  }  
          //  else if($('#birthPlace').val() == '')  
          //  {  
          //       alert("BirthPlace is required");  
          //  }  
          //  else if($('#civilstatus').val() == '')  
          //  {  
          //       alert("Civil Status is required");  
          //  } 
          //  else if($('#religion').val() == '')  
          //  {  
          //       alert("Religion is required");  
          //  }   
          //  else if($('#occupation').val() == '')  
          //  {  
          //       alert("Occupation is required");  
          //  }  
          //  else if($('#monthlyIncome').val() == '')  
          //  {  
          //       alert("Monthly Income is required");  
          //  }  
             
          //  else if($('#numOfDependents').val() == '')  
          //  {  
          //       alert("No. of Dependents is required");  
          //  }  
          //  else if($('#employedCompany').val() == '')  
          //  {  
          //       alert("Employed Company is required");  
          //  }  
          //  else if($('#cellphoneNum').val() == '')  
          //  {  
          //       alert("Phone No. is required");  
          //  }  
           else  
           {  
                $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#employee_table').html(data);  
                     }  
                });  
           }  
      });  
      
      $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  

//  $(document).ready(function () {

     $(document).on('click', '.delete_data', function() {
    var employee_id = $(this).attr("id");  
    if(employee_id != '')  
    {  
        $('#delete_id').val(employee_id); // Set the employee_id to the hidden input in the modal
        $('#delete_data_Modal').modal('show');  
    }    
});

function deleteData() {
    var id = $('#delete_id').val(); // Get the employee_id from the hidden input in the modal

    $.ajax({  
        url: "delete.php",  
        method: "POST",  
        data: {delete_data: true, delete_id: id},  
        success: function(data){  
            alert(data); // Display the response message (Data Deleted or Data Not Deleted)
            window.location.reload(); // Refresh the page after deletion
        }  
    });  
}
         
    
 </script>
    

<!-- <script> 

 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });      
      $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                       
                     $('#firstname').val(data.firstname);  
                     $('#lastname').val(data.lastname);  
                     $('#address').val(data.address);  
                       
                     $('#employee_id').val(data.id);  
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#firstname').val() == "")  
           {  
                alert("Name is required");  
           }  
           else if($('#address').val() == '')  
           {  
                alert("Address is required");  
           }  
           else if($('#designation').val() == '')  
           {  
                alert("Designation is required");  
           }  
           else if($('#age').val() == '')  
           {  
                alert("Age is required");  
           }  
           else  
           {  
               $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#employee_table').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  
 </script> 

    -->

     <script>

                    // get the table element
                    var $table = document.getElementByClass("myTable"),
                    // number of rows per page
                    $n = 15,
                    // number of rows of the table
                    $rowCount = $table.rows.length,
                    // get the first cell's tag name (in the first row)
                    $firstRow = $table.rows[0].firstElementChild.tagName,
                    // boolean var to check if table has a head row
                    $hasHead = ($firstRow === "TH"),
                    // an array to hold each row
                    $tr = [],
                    // loop counters, to start count from rows[1] (2nd row) if the first row has a head tag
                    $i,$ii,$j = ($hasHead)?1:0,
                    // holds the first row if it has a (<TH>) & nothing if (<TD>)
                    $th = ($hasHead?$table.rows[(0)].outerHTML:"");
                    // count the number of pages
                    var $pageCount = Math.ceil($rowCount / $n);
                    // if we had one page only, then we have nothing to do ..
                    if ($pageCount > 1) {
                        // assign each row outHTML (tag name & innerHTML) to the array
                        for ($i = $j,$ii = 0; $i < $rowCount; $i++, $ii++)
                            $tr[$ii] = $table.rows[$i].outerHTML;
                        // create a div block to hold the buttons
                        $table.insertAdjacentHTML("afterend","<div id='buttons'></div");
                        // the first sort, default page is the first one
                        sort(1);
                    }
                    
                    // ($p) is the selected page number. it will be generated when a user clicks a button
                    function sort($p) {
                        /* create ($rows) a variable to hold the group of rows
                        ** to be displayed on the selected page,
                        ** ($s) the start point .. the first row in each page, Do The Math
                        */
                        var $rows = $th,$s = (($n * $p)-$n);
                        for ($i = $s; $i < ($s+$n) && $i < $tr.length; $i++)
                            $rows += $tr[$i];
                        
                        // now the table has a processed group of rows ..
                        $table.innerHTML = $rows;
                        // create the pagination buttons
                        document.getElementById("buttons").innerHTML = pageButtons($pageCount,$p);
                        // CSS Stuff
                        document.getElementById("id"+$p).setAttribute("class","active");
                    }
                    
                    const leftArrowIcon = ";";
                    // ($pCount) : number of pages,($cur) : current page, the selected one ..
                    function pageButtons($pCount,$cur) {
                        /* this variables will disable the "Prev" button on 1st page
                           and "next" button on the last one */
                        var	$prevDis = ($cur == 1)?"disabled":"",
                            $nextDis = ($cur == $pCount)?"disabled":"",
                            /* this ($buttons) will hold every single button needed
                            ** it will creates each button and sets the onclick attribute
                            ** to the "sort" function with a special ($p) number..
                            */
                          
                            $buttons = "<input type='button' value='<' onclick='sort("+($cur - 1)+")' "+$prevDis+"> ";
                        for ($i=1; $i<=$pCount;$i++)
                            $buttons += "<input type='button' id='id"+$i+"'value='"+$i+"' onclick='sort("+$i+")'>";
                        $buttons += "<input type='button' value='>' onclick='sort("+($cur + 1)+")' "+$nextDis+">";
                        return $buttons;
                    }
                </script>
            
               
                    
               </div>

   
    <script>
        window.addEventListener('DOMContentLoaded', event => {
        const sidebarToggle = document.body.querySelector('#sidebarToggle');
        if (sidebarToggle) {

            sidebarToggle.addEventListener('click', event => {
                event.preventDefault();
                document.body.classList.toggle('sb-sidenav-toggled');
                localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
            });
        }

        });
    </script>
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/js/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.min.js/1.14.6/umd/popper.min.js"></script>  

    <script>
      function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
          var output = document.getElementById('image-preview');
          output.src = reader.result;
          document.getElementById('image-preview-container').classList.remove('d-none');
        }
        reader.readAsDataURL(event.target.files[0]);
      }
  
      function previewImage2(event) {
        var reader = new FileReader();
        reader.onload = function() {
          var output = document.getElementById('image-preview2');
          output.src = reader.result;
          document.getElementById('image-preview-container').classList.remove('d-none');
        }
        reader.readAsDataURL(event.target.files[0]);
      }
      
      </script>
<script
     async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
     <!-- webslesson_sidebarrightsec_AdSense1_1x1_as -->
     <ins class="adsbygoogle"
               style="display:block"
               data-ad-client="ca-pub-4529508631166774"
               data-ad-host="ca-host-pub-1556223355139109"
               data-ad-host-channel="L0001"
               data-ad-slot="8049812049"
               data-ad-format="auto"></ins>
     <script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
      
</body>
</html>