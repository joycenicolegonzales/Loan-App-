<?php
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

    <title>Member View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Member View Details 
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
                                
                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <p class="form-control">
                                            <?=$mem['firstname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Middle Name</label>
                                        <p class="form-control">
                                            <?=$mem['middlename'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <p class="form-control">
                                            <?=$mem['lastname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Present Address</label>
                                        <p class="form-control">
                                            <?=$mem['presentaddress'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Department</label>
                                        <p class="form-control">
                                            <?=$mem['department'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Employee Status</label>
                                        <p class="form-control">
                                            <?=$mem['employeestatus'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Position</label>
                                        <p class="form-control">
                                            <?=$mem['position'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Age</label>
                                        <p class="form-control">
                                            <?=$mem['age'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Monthly Salary</label>
                                        <p class="form-control">
                                            <?=$mem['monthlysalary'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Date of Birth</label>
                                        <p class="form-control">
                                            <?=$mem['dateofbirth'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Civil Status</label>
                                        <p class="form-control">
                                            <?=$mem['civilstatus'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>TIN Number</label>
                                        <p class="form-control">
                                            <?=$mem['tinnumber'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Contact No.</label>
                                        <p class="form-control">
                                            <?=$mem['contactno'];?>
                                        </p>
                                    </div>

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