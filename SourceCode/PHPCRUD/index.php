<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP CRUD with Bootstrap Modal </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link href="dashstyles.css" rel="stylesheet" />
        <!-- <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script> -->
        <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script>  
        
</head>

<body>

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
                            <a class="nav-link text-white" href="Admin_Dashboard.html">
                                <div class="sb-nav-link-icon text-white"><i class="fas fa-tachometer-alt  "></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading text-white">Member</div>
                            <a class="nav-link active px-2 text-white" href="MemberList.html"><i class="fa-solid fa-user-group  me-2"></i> List of Members</a>
                            <a class="nav-link  px-2 text-white" href="Member_Approval.html"><i class="fa-solid fa-user-check  me-1"></i>  Membership Approval </a>
                
                       
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
                <main class="main-container py-2 px-4" style="height: 100vh; background-color: #d9d9d9; overflow-y:scroll; " >

    <!-- ADD Modal -->
  <!-- Modal -->
 
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="insertcode.php" method="POST">


                    <div class="modal-body">

                
                        <div class="row mb-2 px-4" >

                        <div class="col-md-6 " >
                        <div class="form-group">
                        <label class="form-label" for="firstname">Firstname</label>
                        <input type="text"name="firstname" class="form-control form-control-md" />
                        </div>
                        </div>
                        <div class="col-md-6 ">

                        <div class="form-group">
                        <label class="form-label" for="lastname">LastName</label>
                        <input type="text"  name="lastname" class="form-control form-control-md"/>
                        </div>

                        </div>

                        </div>
                        <div class="row mb-2 px-4"  >
                         <div class="col-md-6 ">
                         <div class="form-group">
                         <label class="form-label" for="Address">Present Address</label>
                         <input type="text" name="address" class="form-control form-control-md"/> 
                         </div>
                         </div>

                         <div class="col-md-6 ">
                         <div class="form-group">
                         <label for="cellphoneNum" class="form-label">Cellphone No. </label>
                         <input type="text" name ="cellphoneNum" class="form-control form-control-md"  />
                         
                         </div>
                         </div>
                         
                    </div>
                    <div class="row mb-2 px-4"  >
                    <div class="col-md-4 ">
                         <div class="form-group">
                            <label> Age</label>
                            <input type="text" name="age" class="form-control"
                                placeholder="Enter Age">
                        </div>  
                    </div>
                    <div class="col-md-4 ">
                    <div class="form-outline  w-100">
                    <label for="dob" class="form-label">Birth Date</label>
                    <input type="date" name="birthdate" class="form-control form-control-md"  >
                    </div>
</div>
                <div class="col-md-4 pb-2">
                    <div class="form-outline">
                    <label class="form-label" for="birthPlace">Birthplace</label>
                    <input type="text" name="birthPlace" class="form-control form-control-md" />
                        </div>
                </div>
</div>
                <div class="row mb-2 px-4"  >
                <div class="col-md-6 pb-2">
                <label class="form-label select-label">Civil Status</label>
                    <select class="select form-control form-control-md" name="civilstatus"   >
                    <option value="Single">Single</option>
                    <option value="Married">Married</option> 
                        <option value="Widowed">Widowed</option>
                        <option value="Separated">Separated</option>
                    </select>
          </div>      
            <div class="col-md-6  pb-2">                 
                        <div class="form-outline">
                        <label class="form-label" for="Religion">Religion</label>
                        <input type="text" name="religion" class="form-control form-control-md"  />
                        
                        </div>
                    </div>
</div>
                <div class="row mb-2 px-4"  >
                <div class="col-md-6 pb-2">

                <div class="form-outline">
                <label class="form-label" for="occupation">Occupation</label>
                <input type="text"  name="occupation" class="form-control form-control-md" />
                
                </div>

                </div>
                <div class="col-md-6 pb-2">
           
           <label class="form-label select-label">Monthly Income</label>
           <input type="text" name="monthlyIncome"  class="form-control form-control-md" />
         </div>
</div>
                <div class="row mb-2 px-4"  >
                <div class="col-md-6 pb-2">

                <div class="form-outline">
                <label class="form-label" for="otherIncome">Other Sources of Income</label>
                <input type="text"   name="otherIncome" class="form-control form-control-md" /> 
                </div>

                </div>
                <div class="col-md-6 pb-2">

                <div class="form-outline">
                  <label class="form-label" for="spouseName">Name of Spouse (if married)</label>
                  <input type="text"  name="spouseName" class="form-control form-control-md" />
                
                </div>

              </div>

</div>
            <div class="row mb-2 px-4"  >
            <div class="col-md-6  pb-2">
            <div class="form-outline">
              <label class="form-label" for="numOfDependents">No. of Dependents</label>
              <input type="text" name="numOfDependents" class="form-control form-control-md"  />
              
            </div>
          </div>
          <div class="col-md-6  pb-2">

            <div class="form-outline">
            <label class="form-label" for="employedCompany">Name of Company</label>
            <input type="text"  name="employedCompany" class="form-control form-control-md" />

            </div>

            </div>
            </div>
            <div class="row mb-2 px-4"  >
            <div class="col-md-6  pb-2">
            <div class="form-outline">
              <label class="form-label" for="presentEmp">Present Employment</label>
              <input type="text" name="presentEmp" class="form-control form-control-md"  />
             
            </div>
          </div>
          <div class="col-md-6  pb-2">
            <div class="form-outline">
              <label class="form-label" for="emergency" >Person to be contacted in case of emergency</label>
              <input type="text" name="emergency" class="form-control form-control-md" />
             
            </div>
          </div>
</div>
</div>

                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button> -->
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-XL" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Member Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="updatecode.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        <!-- <div class="form-group">
                            <label> First Name </label>
                            <input type="text" name="firstname" id="firstname" class="form-control"
                                placeholder="Enter First Name">
                        </div> -->
                        <div class="row mb-2 px-4" >

                        <div class="col-md-6 " >
                        <div class="form-outline">
                        <label class="form-label" for="firstname">Firstname</label>
                        <input type="text" id="firstname" name="firstname" class="form-control form-control-md" />
                        </div>
                        </div>
                        <div class="col-md-6 ">

                        <div class="form-outline">
                        <label class="form-label" for="lastname">LastName</label>
                        <input type="text" id="lastname" name="lastname" class="form-control form-control-md"/>
                        </div>

                        </div>

                        </div>
                        <div class="row mb-2 px-4"  >
                         <div class="col-md-6 ">
                         <div class="form-outline">
                         <label class="form-label" for="Address">Present Address</label>
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
                    <div class="row mb-2 px-4"  >
                    <div class="col-md-4 ">
                         <div class="form-outline">
                            <label> Age</label>
                            <input type="text" name="age" id="age" class="form-control"
                                placeholder="Enter Age">
                        </div>  
                    </div>
                    <div class="col-md-4 ">
                    <div class="form-outline  w-100">
                    <label for="dob" class="form-label">Birth Date</label>
                    <input type="date" name="birthdate" class="form-control form-control-md" id="birthdate" >
                    </div>
</div>
                <div class="col-md-4 pb-2">
                    <div class="form-outline">
                    <label class="form-label" for="birthPlace">Birthplace</label>
                    <input type="text" name="birthPlace" id="birthPlace" class="form-control form-control-md" />
                        </div>
                </div>
</div>
                <div class="row mb-2 px-4"  >
                <div class="col-md-6 pb-2">
                <label class="form-label select-label">Civil Status</label>
                    <select class="select form-control form-control-md" name="civilstatus"   >
                    <option value="Single">Single</option>
                    <option value="Married">Married</option> 
                        <option value="Widowed">Widowed</option>
                        <option value="Separated">Separated</option>
                    </select>
          </div>      
            <div class="col-md-6  pb-2">                 
                        <div class="form-outline">
                        <label class="form-label" for="Religion">Religion</label>
                        <input type="text" name="religion" class="form-control form-control-md"  />
                        
                        </div>
                    </div>
</div>
                <div class="row mb-2 px-4"  >
                <div class="col-md-6 pb-2">

                <div class="form-outline">
                <label class="form-label" for="occupation">Occupation</label>
                <input type="text"  name="occupation" class="form-control form-control-md" />
                
                </div>

                </div>
                <div class="col-md-6 pb-2">
           
           <label class="form-label select-label">Monthly Income</label>
           <input type="text" name="monthlyIncome" class="form-control form-control-md" />
         </div>
</div>
                <div class="row mb-2 px-4"  >
                <div class="col-md-6 pb-2">

                <div class="form-outline">
                <label class="form-label" for="otherIncome">Other Sources of Income</label>
                <input type="text"   name="otherIncome" class="form-control form-control-md" /> 
                </div>

                </div>
                <div class="col-md-6 pb-2">

                <div class="form-outline">
                  <label class="form-label" for="spouseName">Name of Spouse (if married)</label>
                  <input type="text"name="spouseName" class="form-control form-control-md" />
                
                </div>

              </div>

</div>
            <div class="row mb-2 px-4"  >
            <div class="col-md-6  pb-2">
            <div class="form-outline">
              <label class="form-label" for="numOfDependents">No. of Dependents</label>
              <input type="text" name="numOfDependents" class="form-control form-control-md"  />
              
            </div>
          </div>
          <div class="col-md-6  pb-2">

            <div class="form-outline">
            <label class="form-label" for="employedCompany">Name of Company</label>
            <input type="text"  name="employedCompany" class="form-control form-control-md" />

            </div>

            </div>
            </div>
            <div class="row mb-2 px-4"  >
            <div class="col-md-6  pb-2">
            <div class="form-outline">
              <label class="form-label" for="presentEmp">Present Employment</label>
              <input type="text"  name="presentEmp" class="form-control form-control-md"  />
             
            </div>
          </div>
          <div class="col-md-6  pb-2">
            <div class="form-outline">
              <label class="form-label" for="emergency" >Person to be contacted in case of emergency</label>
              <input type="text"  name="emergency" class="form-control form-control-md" />
             
            </div>
          </div>
</div>
</div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Member Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deletecode.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> No </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Delete </button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- VIEW POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> View Member Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- <form action="deletecode.php" method="POST"> -->

                    <div class="modal-body" id="employee_detail">
<!-- 
                        <input type="text" name="view_id" id="view_id"> -->

                        <!-- <p id="fname"> </p> -->
                        <!-- <h4 id="firstname"> <?php echo ''; ?> </h4> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> CLOSE </button>
                        <!-- <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button> -->
                    </div>
                </form>

            </div>
        </div>
    </div>



    <!----TABLE ---->
    <div class="container my-2 bg-light">
        <div class="">
            <div class="card">
                <!-- <h2> PHP CRUD Bootstrap MODAL (POP UP Modal) </h2> -->
            </div>
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        ADD DATA
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">

                    <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'phpcrud');

                $query = "SELECT * FROM student";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered ">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name </th>
                                <th scope="col"> Address</th>

                                <th scope="col"> VIEW </th>
                                <th scope="col"> EDIT </th>
                                <th scope="col"> DELETE </th>
                            </tr>
                        </thead>
                        <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['firstname']; ?> </td>
                                <td> <?php echo $row['lastname']; ?> </td>
                                <td> <?php echo $row['address']; ?> </td>
                               
                                <td>
                                    <button type="button" class="btn btn-info viewbtn"> VIEW </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                                </td>
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                    </table>
                </div>
            </div>


        </div>

       
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>


    <script>
        $(document).ready(function () {

            $('.viewbtn').on('click', function () {
                $('#viewmodal').modal('show');
                $.ajax({ //create an ajax request to display.php
                    type: "GET",
                    url: "select.php",
                    data:{id:id},
                    dataType: "html", //expect html to be returned                
                    success: function (response) {
                        $('#employee_detail').html(data);
                        $('#viewmodal').modal('show'); 
                    }
                });
            });

        });
    </script>


    <script>
        $(document).ready(function () {

            $('#datatableid').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Your Data",
                }
            });

        });
    </script>

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#firstname').val(data[1]);
                $('#lastname').val(data[2]);
                $('#address').val(data[3]);
               
            });
        });
    </script>


</body>
</html>