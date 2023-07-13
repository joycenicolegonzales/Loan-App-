<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form || Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
           $userName= $_POST["username"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           $roles = $_POST["roles"];

           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($userName) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
           }
        //    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     array_push($errors, "Email is not valid");
        //    }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM account WHERE username = '$userName'";
           $result = mysqli_query($con, $sql);
           $rowCount = mysqli_num_rows($result);
        //    if ($rowCount>0) {
        //     array_push($errors,"Email already exists!");
        //    }
           if (count($errors)>0) {
            foreach ($errors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO account (username, password,roles) VALUES ( ?, ?, ?)";
            $stmt = mysqli_stmt_init($con);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$userName, $passwordHash, $roles);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
          

        }
        ?>
        <form action="SignupForm.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username:">
            </div>
            <!-- <div class="form-group">
                <input type="emamil" class="form-control" name="email" placeholder="Email:">
            </div> -->
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
            </div>
            <div class="form-group">
		    <label class="form-label">Select User Type:</label>
		  
		  <select class="form-select form-group mb-3"
		          name="roles" 
		          aria-label="Default select example">
			  <option selected value="admin">Admin</option>
			  <option value="staff">Staff</option>
		  </select>
    </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
        <div>
        <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
      </div>
    </div>

    <style>
        body{
    padding:50px;
}
.container{
    max-width: 600px;
    margin:0 auto;
    padding:50px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.form-group{
    margin-bottom:30px;
}
</style>


</body>
</html>