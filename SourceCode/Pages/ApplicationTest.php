<?php


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
    
    <div class="container mt-3">
        <form action="apply.php" method="POST" id="application_form">
          <div class="row jumbotron box8">
            <div class="col-sm-12 mx-t3 mb-4">
              <h2 class="text-center text-info">Application Form for Loan</h2>
            </div>
            <div class="col-sm-4 form-group">
              <label for="fname">First Name</label>
              <input type="text" placeholder="Enter First Name" name="firstname" id="firstname" required>
            </div>
            <div class="col-sm-4 form-group">
                <label for="mname">Middle Name</label>
                <input type="text" placeholder="Enter Middle Name" name="middlename" id="middlename" required>
            <div class="col-sm-4 form-group">
              <label for="lname">Last name</label>
              <input type="text" placeholder="Enter Last Name" name="lastname" id="lastname" required>
            </div>
            <div class="col-sm-6 form-group">
              <label for="address">Present Address</label>
              <input type="text" placeholder="Enter Present Address" name="presentaddress" id="presentaddress" required>
            </div>
            <div class="col-sm-6 form-group">
              <label for="dprtmnt">Department</label>
              <input type="text" placeholder="Enter Department" name="department" id="department" required>
            <div class="col-sm-5 form-group">
              <label for="Status">Employee Status</label>
              <input type="text" placeholder="Enter Status" name="employeestatus" id="employeestatus" required>
            </div>
            <div class="col-sm-4 form-group">
              <label for="pos">Position</label>
              <input type="text" placeholder="Enter Position" name="position" id="position" required>
            </div>
            <div class="col-sm-3 form-group">
                <label for="agee">Age</label>
                <input type="text" placeholder="Enter Age" name="age" id="age" required>
              </div>
            <div class="col-sm-6 form-group">
              <label for="salary">Monthly Salary</label>
              <select id ="monthlysalary" class="form-control custom-select browser-default">
                <option value="P5000-P10,000"> P5000-P10,000</option>
                <option value="P10,000-P15,000">P10,000-P15,000</option>
                <option value="P15,000-P20,000">P15,000-P20,000</option>
                <option value="P20,000-P25,000">P20,000-P25,000</option>
              </select>
            </div>
            <div class="col-sm-6 form-group">
              <label for="birthdate">Date Of Birth</label>
              <input type="text" placeholder="Enter Birthdate" name="dateofbirth" id="dateofbirth" required>
            </div>
            <div class="col-sm-5 form-group">
              <label for="status">Civil Status</label>
              <select id="civilstatus" class="form-control browser-default custom-select">
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="live-in-partner">Live-in Partner</option>
                <option value="widowed">Widowed</option>
                <option value="separated">Separated</option>
              </select>
            </div>
           <div class="col-sm-3 form-group">
              <label for="tin">TIN Number</label>
              <input type="text" placeholder="Enter TIN Number" name="tinnumber" id="tinnumber" required>
            </div>
            <div class="col-sm-4 form-group">
              <label for="cntctno">Contact No</label>
              <input type="text" placeholder="Enter Contact No." name="contactno" id="contactno" required>
            </div>
            <!-- <div class="col-sm-12">
              <input type="checkbox" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
              </label>
            </div> -->  
      
            <div class="col-sm-12 form-group mb-0">
            <button type ="submit" class="submitbtn">Submit</button>
            </div>
      
          </div>
        </form>
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

</body>
</html>