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
                 <form action="apply.php" method="POST">>
                    <div class="row jumbotron box8">
                      <div class="col-sm-12 mx-t3 mb-4">
                        <h4>Loan Application Form
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
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
                                <button type="submit" name="save_member" class="btn btn-primary">Save Member</button>
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
      box-shadow: 0px 0px 5px 1px #999;
    }
    .mx-t3{
      margin-top: -3rem;
    }
      </style>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>