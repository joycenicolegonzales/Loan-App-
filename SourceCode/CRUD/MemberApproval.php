
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Member List</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" /> -->
        <link href="dashstyles.css" rel="stylesheet" />
        <!-- <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script> -->
        <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script>  
        


                                                                                                                                                        
      

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
                            <a class="nav-link  px-2 text-white" href="MemberList.php"><i class="fa-solid fa-user-group  me-2"></i> List of Members</a>
                            <a class="nav-link active px-2 text-white" href="Member_Approval.php"><i class="fa-solid fa-user-check  me-1"></i>  Membership Approval </a>
                
                       
                            <div class="sb-sidenav-menu-heading text-white">Loans</div>
                            <a class="nav-link px-2 text-white" href="Member_Loan.html"><i class="fa-solid fa-credit-card  me-2"></i> Member's Loan</a>
                            <a class="nav-link px-2 text-white" href="LoanPlan.html"><i class="fa-solid fa-credit-card  me-2"></i> Loan Plan</a>
                            <a class="nav-link px-2 text-white" href="LoanType.html"><i class="fa-solid fa-table me-2"></i> Loan Types</a>
                        
                        </div>
                    </div>
                   
                </nav>
            </div>


            <br /><br />  
           <div id="layoutSidenav_content">
                <main class="main-container py-2 px-4" style="height: 100vh; background-color: #d9d9d9; " >



                    <div class="container my-2 bg-light " >
                      <div class="d-flex py-3 justify-content-between">
                         
				<div class="col-md-12 " >
                   
					<div class="table-responsive">  
						 <div class="d-flex justify-content-between">  
                               <h4>List of Members</h4>
							  <!-- <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Add</button>   -->
                                  
						 </div> <!--   <button type="button" name="add" id="add" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_data_Modal"> -->
                          
						 <br />  
                               <!-- <div class="row my-1 justify-content-center">
                      <div class="div  py-1" style="max-height:520px ; overflow-y: scroll; ">
                      <div id="employee_table">  
                          <table class="table table-bordered">  
                               <tr>  
                                    <th width="40%">Firstname</th>  
                                    <th width="30%">Lastname</th> 
                                    <th width="20%">Address</th>   
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
                                    <td><input type="button" name="delete" value="delete" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs delete_data" /></td>
                               </tr>  
                               <?php  
                               }  
                               ?>  
                          </table>  
                     </div>  
                </div>  
           </div>   -->

                  </main> 
             


<!-- ========== VIEW DETAILS MODAL ========== -->
                    <div class="modal fade" id="memDetails" aria-hidden="true" aria-labelledby="memDetails" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Member's Information </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body ">
                            

                            <div class="row d-flex">
                              <div class="col-md-3 justify-content-center text-center py-4 ">
                                <img id="image-preview" src="/SourceCode/images/user.jpg" class="center-image" style="width:170px;">
                              </div>
                              <div class="col-md-4 ">
                            
                                <div class="d-flex">
                                    <p class="me-1"> <b>First Name :</b> </p>
                                    <p>Efren Miguel Pelo</p>
                                </div>

                                <div class="d-flex">
                                    <p class="me-1"> <b>Age :</b></p>
                                    <p>20</p>
                                </div>

                                <div class="d-flex">
                                  <p class="me-1"> <b>Birthdate :</b> </p>
                                  <p>07/08/2002</p>
                                </div>

                                <div class="d-flex">
                                  <p class="me-1"> <b>Birthplace :</b></p>
                                  <p>Nasugbu, Batangas</p>
                                </div>
                                <div class="d-flex">
                                  <p class="me-1"> <b>Address :</b>  </p>
                                  <p>Nasugbu, Batangas</p>
                                </div>
                                <div class="d-flex">
                                    <p class="me-1"> <b>Contact Number :</b>  </p>
                                    <p>09150756689</p>
                                </div>
                                <div class="d-flex">
                                  <p class="me-1"> <b>Civil Status :</b>  </p>
                                  <p>Maried</p>
                                </div>
                                <div class="d-flex">
                                  <p class="me-1"> <b>Religion :</b>  </p>
                                  <p>Roman Catholic</p>
                                </div>

                                <div class="d-flex">
                                  <p class="me-1"> <b>Name of Spouse :</b></p>
                                  <p>Nicole Gonzales</p>
                              </div>
                              </div>

                              <div class="col-md-5 ">
                            
                                <div class="d-flex">
                                    <p class="me-1"> <b>Occupation :</b> </p>
                                    <p>Pilot</p>
                                </div>

                                <div class="d-flex">
                                    <p class="me-1"> <b>Monthly Income :</b></p>
                                    <p>Php 20,000</p>
                                </div>

                                <div class="d-flex">
                                    <p class="me-1"> <b>Other Sources of Income :</b></p>
                                    <p>07/08/2002</p>
                                </div>

                              
                                <div class="d-flex">
                                    <p class="me-1"> <b>Number of Dependents :</b>  </p>
                                    <p>Nasugbu, Batangas</p>
                                </div>
                                <div class="d-flex">
                                    <p class="me-1"> <b>Name of Company :</b>  </p>
                                    <p>09150756689</p>
                                </div>
                                <div class="d-flex">
                                  <p class="me-1"> <b>Present Employment :</b>  </p>
                                  <p>09150756689</p>
                              </div>
                              <div class="d-flex">
                                <p class="me-1"> <b>Contact incase of Emergency :</b>  </p>
                                <p>Nicole Gonzales</p>
                            </div>
                              </div>

                            
                            </div>
                            <div class="row justify-content-end ">
                              <div class="col-md-3   pe-4 py-3">
                                <label class="form-label select-label ">Action</label>
                                <select class="form-select form-select-md " aria-label=".form-select-sm example">
                                  <option selected>Pending</option>
                                  <option value="1">Approved</option>
                                  <option value="2">Declined</option>
                         
                                </select>                              
                               
                              </div>   
                           
                          </div>
                          <div class="modal-footer d-flex ">
                            
                            <button class="btn btn-secondary"  data-bs-dismiss="modal">Cancel</button>
                            <input class="btn btn-submit btn-primary" type="submit" value="Save" style=" color: white; " />
                            
                            </div>
                        </div>
                      </div>
                    </div>
                    </div>



<!-- ========== VIEW DETAILS MODAL END ========= -->


                <script>
                            
                    
                    
                    // get the table element
                    var $table = document.getElementById("myTable"),
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
   <!-- --SCRIPT BOOTSTRAP 5-->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>   -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Bootstrap 5 JS CDN Links -->
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script> -->


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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>  

</body>
</html>