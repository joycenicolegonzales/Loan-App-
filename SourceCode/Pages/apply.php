 <?php
          $firstname        = $_POST['firstname'];
          $middlename       = $_POST['middlename'];
          $lastname         = $_POST['lastname'];
          $presentaddress   = $_POST['presentaddress'];
          $department       = $_POST['department'];
          $employeestatus   = $_POST['employeestatus'];
          $position         = $_POST['position'];
          $age              = $_POST['age'];
          $monthlysalary    = $_POST['monthlysalary'];
          $dateofbirth      = $_POST['dateofbirth'];
          $civilstatus      = $_POST['civilstatus'];
          $tinnumber        = $_POST['tinnumber'];
          $contactno        = $_POST['contactno'];

         $con = mysqli_connect("localhost", "root", "","coop");
         $q = "insert into registration value(NULL, '$firstname',  '$middlename', '$lastname', '$presentaddress', '$department', '$department', '$employeestatus', '$position', '$age',  '$monthlysalary', '$dateofbirth', '$civilstatus', '$tinnumber' '$contactno')";

         if (!$conn){
            die("Connection failed: " .mysqli_connect_error());
         }

         echo "Connected Successfully";
      ?>	