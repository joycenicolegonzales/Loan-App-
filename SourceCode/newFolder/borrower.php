<?php
	date_default_timezone_set("Etc/GMT+8");
	require_once'session.php';
	require_once'class.php';
	$db=new db_class(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button{ 
			-webkit-appearance: none; 
		}

	</style>
	
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Loan Management System</title>

    <!-- <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  
   
    <link href="css/sb-admin-2.css" rel="stylesheet">
    
	<!-- Custom styles for this page -->
    <link href="css/dataTables.bootstrap4.css" rel="stylesheet">

</head>
<style>
     .side-link:hover{
        background-color: #4884bc;
      
        padding-left: 3%;
        padding-right: 3%;
    }
    .side-link:active{
        background-color: #4884bc;
         
         transform: translateY(4px);
    }
    .side-link.active{
        background-color: #4884bc;
    }

</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #1165AE">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">  <img src="../images/logoo.jpg"  class="" style="width: 50px; height: 50px;"alt=""> NMEMPC</div>
            </a>


            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link side-link" href="home.php" >
                    <i class="fas fa-fw fa-home"></i>
                    Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link side-link" href="borrower.php" >
                <i class="fa-solid fa-users"></i></i>
                    Members</a>
            </li>
			<li class="nav-item">
                <a class="nav-link side-link" href="loan.php">
                <i class="fa-solid fa-credit-card"></i></i>
                    Loans</a>
            </li>
			
			<li class="nav-item">
                <a class="nav-link side-link" href="loan_plan.php" >
                <i class="fa-solid fa-file"></i></i>
                   Loan Plans</a>
            </li>
			<li class="nav-item">
                <a class="nav-link side-link" href="loan_type.php" >
                    <i class="fas fa-fw fa-money-check "></i>
                    Loan Types</a>
            </li>
            <li class="nav-item">
                <a class="nav-link side-link" href="payment.php">
                    <i class="fas fa-fw fas fa-coins "></i>
                    Payments</a>
            </li>
		
			<li class="nav-item">
                <a class="nav-link side-link" href="user.php" >
                    <i class="fas fa-fw fa-user "></i>
                    Users</a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
	
                   
					<!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $db->user_acc($_SESSION['user_id'])?></span>
                                <i class="fas fa-fw fa-user "></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Borrower</h1>
                    </div>
					<button class="mb-2 btn btn-lg btn-success" href="#" data-toggle="modal" data-target="#addModal"><span class="fa fa-plus"></span> Add  Borrower</button>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Firstname</th>
                                           
                                            <th>Lastname</th>
                                            <th>Contact No</th>
                                            <th>Address</th>
                                           
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
											$tbl_borrower=$db->display_borrower();
											
											while($fetch=$tbl_borrower->fetch_array()){
										?>
										
                                        <tr>
                                            <td><?php echo $fetch['firstname']?></td>
                                            <td><?php echo $fetch['lastname']?></td>
                                            <td><?php echo $fetch['contact_no']?></td>
                                            <td><?php echo $fetch['address']?></td>
                                           
                                            <td>
												<div class="dropdown">
													<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Action
													</button>
													<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
														<a class="dropdown-item bg-warning text-white" href="#" data-toggle="modal" data-target="#updateborrower<?php echo $fetch['borrower_id']?>">Edit</a>
														<a class="dropdown-item bg-danger text-white" href="#" data-toggle="modal" data-target="#deleteborrower<?php echo $fetch['borrower_id']?>">Delete</a>
													</div>
												</div>
											</td>
                                        </tr>
										
										
										<!-- Update User Modal -->
										<div class="modal fade" id="updateborrower<?php echo $fetch['borrower_id']?>" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog modal-xl">
												<form method="POST" action="updateBorrower.php">
													<div class="modal-content">
														<div class="modal-header bg-warning">
															<h5 class="modal-title ">Edit Member Details</h5>
															<button class="close" type="button" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">×</span>
															</button>
														</div>
														<div class="modal-body">
														
<!-- ===================================================================================================================== -->
                                                        <div class="row  mb-2 px-4">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Firstname</label>
                                                                    <input type="text" name="firstname" value="<?php echo $fetch['firstname']?>" class="form-control" />
                                                                    <input type="hidden" name="borrower_id" value="<?php echo $fetch['borrower_id']?>"/>
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Lastname</label>
                                                                    <input type="text" name="lasttname" value="<?php echo $fetch['lastname']?>" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row  mb-2 px-4">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Address</label>
                                                                    <input type="text" name="address" value="<?php echo $fetch['address']?>" class="form-control" />
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Contact no.</label>
                                                                    <input type="text" name="contact_no" value="<?php echo $fetch['contact_no']?>" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row  mb-2 px-4">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Age</label>
                                                                    <input type="text" name="age" value="<?php echo $fetch['age']?>" class="form-control" />
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Birthdate</label>
                                                                    <input type="text" name="birthdate" value="<?php echo $fetch['birthdate']?>" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Birthplace</label>
                                                                    <input type="text" name="birthplace" value="<?php echo $fetch['birthplace']?>" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row  mb-2 px-4">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Civil Status</label>
                                                                    <!-- <input type="text" name="civilStatus" class="form-control" required="required" /> -->
                                                                    <select class="form-control" name="civilstatus"  value="<?php echo $fetch['birthplace']?>" >
                                                                        <option value="Single">Single</option>
                                                                        <option value="Married">Married</option> 
                                                                        <option value="Widowed">Widowed</option>
                                                                        <option value="Separated">Separated</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Religion</label>
                                                                    <input type="text" name="religion" value="<?php echo $fetch['religion']?>" class="form-control" />

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row  mb-2 px-4">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Occupation</label>
                                                                    <input type="text" name="occupation" value="<?php echo $fetch['occupation']?>" class="form-control" />
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Monthly Income</label>
                                                                    <input type="text" name="monthlyIncome" value="<?php echo $fetch['monthlyIncome']?>" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Other Sources of Income</label>
                                                                    <input type="text" name="otherIncome" value="<?php echo $fetch['otherIncome']?>" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row  mb-2 px-4">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Name of Spouse</label>
                                                                    <input type="text" name="spouse" value="<?php echo $fetch['spouse']?>" class="form-control" />
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>No. of Dependents</label>
                                                                    <input type="text" name="dependents" value="<?php echo $fetch['dependents']?>" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row  mb-2 px-4">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Name of Company</label>
                                                                    <input type="text" name="company" value="<?php echo $fetch['company']?>" class="form-control" />
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>Present Employment</label>
                                                                    <input type="text" name="employment" value="<?php echo $fetch['employment']?>" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="form-group">
                                                                    <label>Person to be contacted in case of emergency</label>
                                                                    <input type="text" name="emergency" value="<?php echo $fetch['emergency']?>" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>




														</div>
														<div class="modal-footer">
															<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
															<button type="submit" name="update" class="btn btn-warning">Update</a>
														</div>
													</div>
												</form>
											</div>
										</div>
										
										
										
										<!-- Delete User Modal -->
										
										<div class="modal fade" id="deleteborrower<?php echo $fetch['borrower_id']?>" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header bg-danger">
														<h5 class="modal-title text-white">Delete Member</h5>
														<button class="close" type="button" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
													</div>
													<div class="modal-body">Are you sure you want to delete this record?</div>
													<div class="modal-footer">
														<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
														<a class="btn btn-danger" href="deleteBorrower.php?borrower_id=<?php echo $fetch['borrower_id']?>">Delete</a>
													</div>
												</div>
											</div>
										</div>
										
										
										
										
										<?php
											}
										?>
                                    </tbody>
                                </table>
                            </div>
						</div>
                       
                    </div>
				</div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="stocky-footer">
                <div class="container my-auto">
                    
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
	
	
	<!-- Add User Modal-->
	<div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<form method="POST" action="save_borrower.php">
				<div class="modal-content">
					<div class="modal-header ">
						<h5 class="modal-title">Add Member</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
                        <div class="row  mb-2 px-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Firstname</label>
                                    <input type="text" name="firstname" class="form-control" required="required" />
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Lastname</label>
                                    <input type="text" name="lastname" class="form-control" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="row  mb-2 px-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control" required="required" />
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Contact no.</label>
                                    <input type="text" name="contact_no" class="form-control"  />
                                </div>
                            </div>
                        </div>

                        <div class="row  mb-2 px-4">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Age</label>
                                    <input type="text" name="age" class="form-control" />
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Birthdate</label>
                                    <input type="date" name="birthdate" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Birthplace</label>
                                    <input type="text" name="birthplace" class="form-control"  />
                                </div>
                            </div>
                        </div>
                        <div class="row  mb-2 px-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Civil Status</label>
                                    <!-- <input type="text" name="civilStatus" class="form-control" required="required" /> -->
                                    <select class="form-control" name="civilstatus"   >
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option> 
                                        <option value="Widowed">Widowed</option>
                                        <option value="Separated">Separated</option>
                                    </select>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Religion</label>
                                    <input type="text" name="religion" class="form-control"  />

                                </div>
                            </div>
                        </div>
                        <div class="row  mb-2 px-4">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Occupation</label>
                                    <input type="text" name="occupation" class="form-control" />
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Monthly Income</label>
                                    <input type="text" name="monthlyIncome" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Other Sources of Income</label>
                                    <input type="text" name="otherIncome" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row  mb-2 px-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name of Spouse</label>
                                    <input type="text" name="spouse" class="form-control"  />
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. of Dependents</label>
                                    <input type="text" name="dependents" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row  mb-2 px-4">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name of Company</label>
                                    <input type="text" name="company" class="form-control" />
                                </div>
                            </div>
                        
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Present Employment</label>
                                    <input type="text" name="employment" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Person to be contacted in case of emergency</label>
                                    <input type="text" name="emergency" class="form-control"  />
                                </div>
                            </div>
                        </div>
					
						
						
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<button type="submit" name="save" class="btn btn-primary">Save</a>
					</div>
				</div>
			</form>
		</div>
	</div>
	
	
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white">System Information</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure you want to logout?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="js/jquery.easing.js"></script>


	<!-- Page level plugins -->
	<script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.bootstrap4.js"></script>
	

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.js"></script>
	
	<script>
		$(document).ready(function() {
			$('#dataTable').DataTable({
				"order": [[2 , "asc" ]]
			});
		});
	</script>

</body>

</html>