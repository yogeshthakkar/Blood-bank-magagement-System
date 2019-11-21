<?php
session_start();
    $id=$_GET["id"];
    $username=$_SESSION['hospital_username'];
    // echo $username;
    // echo $id;
    $conn = new mysqli("localhost", "root", "", "BloodBank");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "update tbl_recipient set recipient_status=1 where recipient_id=$id";
    echo $sql;
    $result = mysqli_query($conn,$sql);
    $sql1="select * from tbl_hospital where hospital_email='$username'";
    $result1=mysqli_query($conn, $sql1);
    
    while($row1=mysqli_fetch_assoc($result1)){
    

  //  require'admin_class.php';
   // $obj=new movie_booking();
    //$result=$obj->deleteMovie($id);
    if($result==true)
    {
        $sql="select * from tbl_recipient where recipient_id=$id";
        $result=mysqli_query($conn, $sql);
        
        while($row=mysqli_fetch_assoc($result)){
           
              
                         $ch = curl_init();
       $user = "soniya.daiict@gmail.com:sms123";
       $receipientno = $row['recipient_contact'];
       $senderID = "TEST SMS";
       $msgtxt = "Request accepted!\nHello '".$row['recipient_name']."' , \nYour request for blood is accepted by '".$row1['hospital_name']."'.\nContact: '".$row1['hospital_contact']."'\nAddress: '".$row1['hospital_area']."','".$row1['hospital_address']."'     \n\nThank you, \n Blood Bank ";
       curl_setopt($ch, CURLOPT_URL, "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($ch, CURLOPT_POST, 1);
       curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
       $buffer = curl_exec($ch);
       if (empty($buffer)) {
        //    echo " buffer is empty ";
       } else {
        //    echo $buffer;
       }
       curl_close($ch);


        echo "successfull";
      header('location:view_recipient.php');
        }
    }
    else
    {
        echo "Unsuccessful";
    }
}
    
    
?>
