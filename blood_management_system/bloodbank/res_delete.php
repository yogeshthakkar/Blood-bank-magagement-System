<?php
    $id=$_GET["id"];
    echo $id;
    $conn = new mysqli("localhost", "root", "", "BloodBank");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "delete from tbl_recipient where recipient_id='$id'";
    echo $sql;
    $result = mysqli_query($conn,$sql);

  //  require'admin_class.php';
   // $obj=new movie_booking();
    //$result=$obj->deleteMovie($id);
    if($result==true)
    {
        echo "successfull";
      header('location:view_recipient.php');
    }
    else
    {
        echo "Unsuccessful";
    }
?>
