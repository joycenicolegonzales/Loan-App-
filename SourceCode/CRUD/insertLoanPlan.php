     <?php  
     $connect = mysqli_connect("localhost", "root", "", "testing");  
     if (isset($_POST['save'])) {

     $months = $_POST['months'];
     $interest = $_POST['interest'];
     $penalty = $_POST['penalty'];

 
     $query = "INSERT INTO loan_plan (months, interest, penalty) 
     VALUES ('$months', '$interest', '$penalty')";
          $query_run = mysqli_query($connect, $query);

          if ($query_run) {
          $_SESSION['status'] = "Stored Successfully";
          } else {
          $_SESSION['status'] = "Stored Failed";
          }
          }
          ?>
     

    