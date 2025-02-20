<?php
session_start();
?>

<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Application Form for Loan</title>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
         <!-- Font Awesome Cdn -->
      <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
      <link href='https://fonts.googleapis.com/css?family=Archivo Black' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
      <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script>  
  </head>

  <body>    


  
  <style>
      body{
            overflow-x: hidden !important;
            
        }
      .navbar{
      background-color: #1165AE;
      font-family: 'Archivo Black';
      padding: 10px;
    }
    .navbar-nav a {
      font-size: 15px;
      text-transform: uppercase;
      font-weight: 500;
    }
    .navbar-light .navbar-brand {
      color: white;
      text-transform: uppercase;
      font-weight: bold;
      letter-spacing: 2px;
    }
    .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
      color: #FFDE59;
    }
    .navbar-light .navbar-nav .nav-link {
      color: #FFDE59;
      font-family: 'Archivo Black';
    }
    .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
      color: #FFDE59;
    }
    .w-100 {
      height: 100vh;
    }
    .navbar-toggler {
      padding: 1px 5px;
      font-size: 18px;
      line-height: 0.3;
      color: #FFDE59;
    }
    .navbar-light .navbar-toggler {
      color: black;
      border-color: transparent;
      background:transparent;
      margin-right: 20px;
      border: none;
      outline: none;
    }
    .navbar-light .navbar-toggler:focus{
        outline: none;
        box-shadow: none;
      }
    .navbar-nav {
      text-align: center;    
    }
    .navbar-collapse {
      background: transparent;
    }
    .navbar-collapse .nav-link {
      color: #FFDE59 !important;
    }
  
    </style>

          <nav class="navbar navbar-expand-lg navbar-light " >
              <img src="/SourceCode/images/logoo.jpg" style="width: 60px; height: 60px;">
          <h1 style="color: #FFDE59;font-family: 'Archivo Black';margin-left: 10px;">NMEMPC</h1>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span><i class="fa-solid fa-bars" style="color: #FFDE59;"></i></span>
          </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="color: #FFDE59;">
                      <li class="nav-item" ><a class="nav-link" href="">HOME</a></li>
                      <li class="nav-item" ><a class="nav-link"  href="">MEMBERSHIP</a></li>
                      <li class="nav-item" ><a class="nav-link" href="">SERVICES</a></li>
                      <li class="nav-item" ><a class="nav-link" href="">ABOUT US</a></li>
                      <li class="nav-item" ><a class="nav-link" href="">CONTACT</a></li>
                  </ul>
                  </div>
          </nav>
          
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <!-- <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Loan Application Form
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div> -->

                    <div class="container mt-3">
                 <form action="apply.php" method="POST">
                    <div class="row jumbotron box8">
                      <div class="col-sm-12 mx-t3 mb-4">
                        <h4 style="margin-top: 2%; font-size:25px;">Loan Application Form
                            <a href="index.php" class="btn btn-danger float-end"  style="float:right;">BACK</a>
                        </h4>
                    
                      </div>
                        <div class="col-sm-4 form-group" >
                                <label>First Name</label>
                                <input type="text" name="firstname" class="form-control">
                            </div>
                            <div class="col-sm-4 form-group" >
                                <label>Middle Name</label>
                                <input type="text" name="middlename" class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Present Address</label>
                                <input type="text" name="presentaddress" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Department</label>
                                <input type="text" name="department" class="form-control">
                            </div>
                            <div class="col-sm-5 form-group">
                                <label>Employee Status</label>
                                <input type="text" name="employeestatus" class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Position</label>
                                <input type="text" name="position" class="form-control">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Age</label>
                                <input type="text" name="age" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Monthly Salary</label>
                                <select name ="monthlysalary" class="form-control">
                                  <option value="P5000-P10,000"> P5000-P10,000</option>
                                  <option value="P10,000-P15,000">P10,000-P15,000</option>
                                  <option value="P15,000-P20,000">P15,000-P20,000</option>
                                  <option value="P20,000-P25,000">P20,000-P25,000</option>
                                </select>
                              </div>
                            <div class="col-sm-6 form-group">
                                <label>Date of Birth</label>
                                <input type="Date" name="dateofbirth" class="form-control">
                            </div>
                            <div class="col-sm-5 form-group">
                                <label>Civil Status</label>
                                <select name="civilstatus" class="form-control">
                                <option value="">--Select Civil Status--</option>
                                  <option value="single">Single</option>
                                  <option value="married">Married</option>
                                  <option value="live-in-partner">Live-in Partner</option>
                                  <option value="widowed">Widowed</option>
                                  <option value="separated">Separated</option>
                                </select>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>TIN Number</label>
                                <input type="text" name="tinnumber" class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Contact No.</label>
                                <input type="text" name="contactno" class="form-control">
                            </div>
                            <div class="col-sm-9 form-group">
                                <button type="submit" name="save_member" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
    label {
    font-weight: 600;
    color: #666;
    }
    body {
      background: #f1f1f1;
    }
    .box8{
      box-shadow: 0px 0px 2px 1px #999;
      width: 95%;
      margin-left: 5%;
    }
    .mx-t3{
      margin-top: -3rem;
    }
      </style>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>