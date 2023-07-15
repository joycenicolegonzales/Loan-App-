<?php 
  require("database.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Staff | Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
        <form class="border shadow p-3 rounded"
        action="AdminLogin2.php";
        method="POST"
        style="width: 450px">
        <h1 class="text-center p-3">LOGIN</h1>
            <div class="mb-3">
                <label for="username" 
                class="form-label">Username</label>
                <input type="text"
                class="form-control"
                name="username"
                id="username">
            </div>
            <div class="mb-3">
            <label for="password" 
                class="form-label">Password</label>
                <input type="password"
                name="password"
                class="form-control"
                id="password">
        </div>
        <div class="mb-1">
            <label class="form-label">Select User Type:</label>
        </div>
            <select class="form-select mb-3"
            name="usertype" 
            aria-label="Default select example">
            <option selected value="admin">Admin</option>
            <option value="staff">Staff</option>
</select>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?php

    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $usertype=$_POST['usertype'];   
        
        $select= mysqli_query($con, "SELECT * FROM account WHERE username = '$username' AND password = '$password' AND usertype = '$usertype' ");

        $row = mysqli_fetch_array($select);

        if(is_array($row)){
            $_SESSION["username"] = $row['username'];
            $_SESSION["password"] = $row['password'];
            $_SESSION["usertype"] = $row['usertype'];
            // $_SESSION["usertype"] = $row ["usertype"];

        }else{
            echo '<script type = "text/javascript">';
            echo 'alert("Invalid Username or Password");';
            echo 'window.location.href = "AdminLogin2.php"';
            echo '</script>';
        }
    }
    if (isset($_SESSION["username"])){
        header ("location: Admin_Dashboard.php");
    }
?>
</body>
</html>
