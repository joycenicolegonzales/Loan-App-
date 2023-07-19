<?php date_default_timezone_set("Etc/GMT+8");?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Admin | User Login</title>

    <link href="css/all.css" rel="stylesheet" type="text/css">
  
   
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>


<style>
    .navbar{
        background-color:#1165AE;
    }
</style>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ">

		<a class="navbar-brand" href="">
        <img src="/LoanApp/SourceCode/newFolder/image/logoo.jpg"  class="" style="width: 50px; height: 50px;"alt=""> NMEMPC</a>
	</nav>
    <div class="container">
		<div class="row justify-content-center" style="margin-top:6%;">
			<div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    <div class="card-body p-0">
                        <div class="row" >
                            <div class="col-lg-6 d-none d-lg-block"><img src="/LoanApp/SourceCode/newFolder/image/loan.jpg" height="100%" width="100%"/></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4  mb-4" style="color:black; font-size: 25px;" >USER LOGIN</h1>
                                    </div>
                                    <form method="POST" class="user" action="login.php">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="username" placeholder="Enter Username" required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" placeholder="Enter Password" required="required">
                                        </div>
										<?php 
											session_start();
											if(ISSET($_SESSION['message'])){
												echo "<center><label class='text-danger'>".$_SESSION['message']."</label></center>";
											}
										?>
                                        <button type="submit" class="btn btn-primary btn-user btn-block " name="login" >Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>