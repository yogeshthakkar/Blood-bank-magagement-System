<?php
    $id=$_GET["id"];
    echo $id;
    $conn = new mysqli("localhost", "root", "", "bloodbank");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "delete from tbl_blood_bank where bloodbank_email='$id'";
    echo $sql;
    $result = mysqli_query($conn,$sql);

  //  require'admin_class.php';
   // $obj=new movie_booking();
    //$result=$obj->deleteMovie($id);
    if($result==true)
    {
        echo "successfull";
      header('location:view_bloodbank.php');
    }
    else
    {
        echo "Unsuccessful";
    }
?>
