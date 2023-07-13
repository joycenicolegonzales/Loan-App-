<?php 
include("database.php");
if(isset($_REQUEST['submit']))
{
    // $folder = 'uploads/';
    // $image_file = $_FILES['img']['name'];
    // $file = $_FILES['img']['tmp_name'];
   
    // $image_file = $_FILES['signature']['name'];
    // $file = $_FILES['signature']['tmp_name'];

    // $path = $folder.$image_file;
    // $target_file = $folder.basename($image_file);
    // $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);


    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $cellphoneNum = $_REQUEST['cellphoneNum'];
    $age = $_REQUEST['age'];
    $birthDate = $_REQUEST['birthdate'];
    $birthPlace = $_REQUEST['birthPlace'];
    $civilStatus =$_REQUEST['civilstatus'];
    $religion = $_REQUEST['religion'];
    $occupation = $_REQUEST['occupation'];
    $monthlyIncome = $_REQUEST['monthlyIncome'];
    $otherIncome = $_REQUEST['otherIncome'];
    $spouseName = $_REQUEST['spouseName'];
    $numOfDependents = $_REQUEST['numOfDependents'];
    $employedCompany = $_REQUEST['employedCompany'];
    $presentEmp = $_REQUEST['presentEmp'];
    $emergency = $_REQUEST['emergency'];
    $address2 = $_REQUEST['address2'];
    $cellphoneNum2 = $_REQUEST['cellphoneNum2'];

    $image = time().$_FILES["img"]['name'];
    if(move_uploaded_file($_FILES['img']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/PHP Pages/uploads/'.$image))
    {
        $target_file = $_SERVER['DOCUMENT_ROOT'].'/PHP Pages/uploads/'.$image;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $picname = basename($_FILES['img']['name']);
        $photo = time().$picname;
        if($imageFileType != "jpg" && $imageFileType != "jepg" && $imageFileType != "png")
    
        {?>
            <script>
                alert("Please upload photo having extension .jpg/ .jpeg/ .png");
            </script>
            <?php
        }
        else if($_FILES["img"]["size"] > 2000000)
        {?>
            <script>
                alert("your photo exceed the size of 2 MB");
            </script>
            <?php }
            else
            {
                $img_uploaded = 1;
            }
}
        
        if($img_uploaded == 1)
        {
    $insert_query  = mysqli_query($conn, "INSERT INTO member set image='$photo' name='$name',address='$address',
    cellphoneNum='$cellphoneNum',age='$age',birthdate='$birthDate',birthPlace='$birthPlace',civilstatus='$civilStatus',
    religion='$religion',occupation='$occupation',monthlyIncome='$monthlyIncome',otherIncome='$otherIncome',
    spouseName='$spouseName',numOfDependents='$numOfDependents',employedCompany='$employedCompany',presentEmp='$presentEmp',
    emergency='$emergency',address2='$address2', cellphoneNum2='$cellphoneNum2', ");
    if($insert_query>0)
    {
        ?>
        <script>
            alert("Registration successful");
        </script>

<?php
    }
} else
{
    ?>
    <script>
        alert("Image not uploaded");
    </script>
    <?php
}
}
   ?>