<!DOCTYPE html>
<html>
<head>
    <title>Signup Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  
</head>
<body> 
<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
}

body {
  display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    min-height:100vh;
    color:#000;
    background:url('gradient.jpg') center no-repeat;
    background-size:cover;
}
.container {
  position: absolute;
  max-width: 800px;
  height: 521px;
  margin: auto;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
} 
.myRightCtn {
  position: relative;
  background-image: linear-gradient(45deg,#F9D976,#F39F86);
  border-radius: 25px;
  height: 100%;
  padding: 30px;
  color: rgb(192, 192, 192);
  font-size: 12px; 
  display: flex;
  justify-content: center;
  align-items: center;
}
.myLeftCtn {
  position: relative;
  background: whitesmoke;
  border-radius: 25px;
  height: 100%;
  padding: 25px;
  padding-left: 50px;
}
.myLeftCtn header {
  color: orange;
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
}
.row{
height: 100%;
} 
.myCard {
  position: relative;
  background: whitesmoke;
  height: 100%;
  border-radius: 25px;
  -webkit-box-shadow: 0px 10px 40px -10px rgba(0, 0, 0, 0.7);
  -moz-box-shadow: 0px 10px 40px -10px rgba(0, 0, 0, 0.7);
  box-shadow: 0px 10px 40px -10px rgba(0, 0, 0, 0.7);
} 
.myRightCtn header {
  color: #fff;
  font-size: 35px;
}
.box {
  position: relative;
  margin: 20px;
  margin-bottom: 110px;
} 
.myLeftCtn .myInput {
  width: 230px;
  border-radius: 25px;
  padding: 10px;
  padding-left: 50px;
  border: none;
  -webkit-box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
  -moz-box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
  box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
}
.myLeftCtn .myInput:focus {
  outline: none;
} 
.myForm {
  position: relative;
  margin-top: 50px;
} 
.myLeftCtn .butt {  
  background: linear-gradient(45deg, #F9D976,#F39F86);
  color: #fff;
  width: 230px;
  margin-top: auto;
  border: none;
  border-radius: 20px;
  padding: 10px;

  -webkit-box-shadow: 0px 10px 41px -11px rgba(0, 0, 0, 0.7);
  -moz-box-shadow: 0px 10px 41px -11px rgba(0, 0, 0, 0.7);
  box-shadow: 0px 10px 41px -11px rgba(0, 0, 0, 0.7);
} 
.myLeftCtn .butt:hover {
  background: linear-gradient(45deg,#FFBF2E,#F39F86);
}
.myLeftCtn .butt:focus {
  outline: none;
} 
.myLeftCtn .fas {
  position: relative;
  color: orange; 
  left: 36px;
} 
.myRightCtn p{
    font-size: 27px;
    font-weight: 700;
    color:darkorange;
    margin-bottom: auto;
}

.forget-link,.register-link,.login-link
{
    color:#000;
    font-weight:700;
}

.forget-link:hover,.register-link:hover,.login-link:hover
{
    color:#F5D020;
}

</style>
     <div class="container">
        <?php
        if(isset($_POST["submit"])) {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];
            $errors = array();
            if(empty($username) OR empty($email) OR empty($passwordRepeat)) {
                array_push($errors, "All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE)) {
                array_push($errors, "Email is not valid");
            }
            if (strlen($password)<8){
                array_push($errors, "Password must be at least 8 characters long");
            }
            if ($password!==$passwordRepeat){
                array_push($errors, "Password does not match");
            }

            if (count($errors)>0){
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }else{
                
            }
        }
        ?>
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftCtn"> 
                        <form action ="SignupForm.php" class="myForm text-center">
                            <header>Register an account</header>

                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input class="myInput" type="text" placeholder="Username" id="username" required> 
                            </div>

                            <div class="form-group">
                                <i class="fas fa-envelope"></i>
                                <input class="myInput" placeholder="Email" type="text" id="email" required> 
                            </div>


                             <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input class ="myInput" type = "password" id="password" placeholder="Enter password" required>
                            </div>

                               <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input class ="myInput" type = "password" id="password" placeholder="Confirm password" required>
                            </div>
                             <div class="form-group">
                                <label>
                                    <input id="check_1" name="check_1"  type="checkbox" required><small> I read and agree to Terms & Conditions</small></input> 
                                    <div class="invalid-feedback">You must check the box.</div>
                                </label>
                            </div>

                            <input type="submit" class="btn btn-primaary" value="Register" name="submit">
                            <div class="text-center text-sm">Already have an account?
                             <a class="login-link" href="login page 2.html">Login Now</a>
                        </form>
                    </div>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="myRightCtn">
                            <div class="box">
                                <center>
                              <img src="4ps.png" width="100px" >
                            </center>
                       <header> 4P's Registration</header>
                            <header><center>Form</center></header>
                            <center>
                                <br>
                            <p> Pantawid Pamilyang Pilipino Program </p>   
                            </div>               
                    </div>
                </div>
            </div>
        </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

    