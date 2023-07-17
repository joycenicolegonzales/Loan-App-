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

    <title>Member CRUD</title>
</head>
<body>
  
    <div class="container mt-4" >

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Member Details
                            <a href="ApplicationTest.php" class="btn btn-primary float-end">Add Member</a>
                        </h4>
                    </div>
                    <div class="card-body" style="width: 100%">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Present Address</th>
                                    <th>Department</th>
                                    <th>Status</th>
                                    <th>Position</th>
                                    <th>Age</th>
                                    <th>Monthly Salary</th>
                                    <th>DOB</th>
                                    <th>Civil Status</th>
                                    <th>TIN No.</th>
                                    <th>Contact No.</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM member";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $mem)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $mem['id']; ?></td>
                                                <td><?= $mem['firstname']; ?></td>
                                                <td><?= $mem['middlename']; ?></td>
                                                <td><?= $mem['lastname']; ?></td>
                                                <td><?= $mem['presentaddress']; ?></td>
                                                <td><?= $mem['department']; ?></td>
                                                <td><?= $mem['employeestatus']; ?></td>
                                                <td><?= $mem['position']; ?></td>
                                                <td><?= $mem['age']; ?></td>
                                                <td><?= $mem['monthlysalary']; ?></td>
                                                <td><?= $mem['dateofbirth']; ?></td>
                                                <td><?= $mem['civilstatus']; ?></td>
                                                <td><?= $mem['tinnumber']; ?></td>
                                                <td><?= $mem['contactno']; ?></td>
                                                
                                                <td>
                                                    <a href="member_view.php?id=<?= $mem['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="member_edit.php?id=<?= $mem['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="apply.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_mem" value="<?=$mem['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>