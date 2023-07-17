<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Member Edit</title>
    
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Member Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $mem_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM member WHERE id='$mem_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $mem = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="mem_id" value="<?= $mem['id']; ?>">

                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="firstname" value="<?=$mem['firstname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Middle Name</label>
                                        <input type="text" name="middlename" value="<?=$mem['middlename'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="lastname" value="<?=$mem['lastname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Present Address</label>
                                        <input type="text" name="presentaddress" value="<?=$mem['presentaddress'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Department</label>
                                        <input type="text" name="department" value="<?=$mem['department'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Employee Status</label>
                                        <input type="text" name="employeestatus" value="<?=$mem['employeestatus'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Position</label>
                                        <input type="text" name="position" value="<?=$mem['position'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Age</label>
                                        <input type="text" name="age" value="<?=$mem['age'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Monthly Salary</label>
                                        <input type="text" name="monthlysalary" value="<?=$mem['monthlysalary'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DOB</label>
                                        <input type="text" name="dateofbirth" value="<?=$mem['dateofbirth'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Civil Status</label>
                                        <input type="text" name="civilstatus" value="<?=$mem['civilstatus'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>TIN Number</label>
                                        <input type="text" name="tinnumber" value="<?=$mem['tinnumber'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Contact No.</label>
                                        <input type="text" name="contactno" value="<?=$mem['contactno'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_mem" class="btn btn-primary">
                                            Update Member
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>