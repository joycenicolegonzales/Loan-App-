    <?php 

        if (isset($_POST['submit'])) {
          $image = $_FILES['image']['name'];
          $signature = $_FILES['signature']['name'];
          $name = $_POST['name'];
          $address = $_POST['address'];
          $cellphoneNum = $_POST['cellphoneNum'];
          $age = $_POST['age'];
          $birthdate  = $_POST['birthdate'];
          $birthPlace = $_POST['birthPlace'];
          $civilstatus  = $_POST['civilstatus'];
          $religion =$_POST['religion'];
          $occupation =$_POST['occupation'];
          $monthlyIncome = $_POST['monthlyIncome'];
          $otherIncome  = $_POST['otherIncome'];
          $spouseName = $_POST['spouseName'];
          $numOfDependents = $_POST['numOfDependents'];
          $employedCompany = $_POST['employedCompany'];
          $presentEmp = $_POST['presentEmp'];
          $emergency =$_POST['emergency'];
          $address2 = $_POST['address2'];
          $cellphoneNum2 = $_POST['cellphoneNum2'];

          

          $errors = array();

          // if (empty($name) OR empty($address) OR empty($cellphoneNum)) {
          //   array_push($errors,"All fields are required");
          //  }

           require_once "database.php";
           $sql = "SELECT * FROM member WHERE name = '$name'";
           $result = mysqli_query($con, $sql);
           $rowCount = mysqli_num_rows($result);
 
          // $errors = array();

          // if (empty($name) OR empty($address) OR empty($cellphoneNum)) {
          //   array_push($errors,"All fields are required");
          //  }

          // require_once "database.php";
          // $sql = "SELECT * FROM member WHERE name = '$name'";
          // $result = mysqli_query($con, $sql);
          // $rowCount = mysqli_num_rows($result);
       //    if ($rowCount>0) {
       //     array_push($errors,"Email already exists!");
       //    }
          if (count($errors)>0) {
           foreach ($errors as $error) {
               echo "<div class='alert alert-danger'>$error</div>";
           }
       } 
          else
          {
            // $sql = "INSERT INTO member ( image, name, address, cellphoneNum, age, birthdate, birthPlace,  civilstatus, religion, occupation, monthlyIncome,otherIncome, spouseName, numOfDependents,
            // employedCompany, presentEmp, emergency, address2, cellphoneNum2)  VALUES (  ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            // $stmt = mysqli_stmt_init($con);
            // $prepareStmt = mysqli_stmt_prepare($stmt,$sql);

            $query = "INSERT INTO member (image, signature, name, address, cellphoneNum, age, birthdate, birthPlace,  civilstatus, religion, occupation, monthlyIncome,otherIncome, spouseName, numOfDependents,
            employedCompany, presentEmp, emergency, address2, cellphoneNum2) VALUES('$image', '$signature', '$name','$address','$cellphoneNum','$age','$birthdate','$birthPlace','$civilstatus','$religion','$occupation',
           '$monthlyIncome','$otherIncome','$spouseName','$numOfDependents','$employedCompany','$presentEmp','$emergency','$address2','$cellphoneNum2')";
            $query_run = mysqli_query($con, $query);

        
         
            if($query_run)
            {
              move_uploaded_file($_FILES['image']['tmp_name'], 'upload/' .basename($_FILES['image']['tmp_name']));
              move_uploaded_file($_FILES['signature']['tmp_name'], 'upload/' .basename($_FILES['signature']['tmp_name']));
              // "upload/".$_FILES["dpt_cate_image"]["name"]);
              $_SESSION['status'] = "Image Stored Successfully";
              // header('Location: MembershipForm.php');

           
            }

            else{
              // die("Something went wrong");
              $_SESSION['status'] = "Image Not Inserted";
              header('Location: MembershipForm.php');
           
            }
        } 
}
?>