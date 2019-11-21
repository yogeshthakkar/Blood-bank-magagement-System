<?php
$conn=new mysqli("localhost","root","","bloodbank");
if($conn->connect_error)
{
    echo "connection failed";
}

    
    
    
      $_rec_name="";
     $_rec_gender="";
     $_rec_bgroup="";
     $_rec_contact="";
     $_rec_area="";
     $_rec_address="";
     
     $_rec_relation="";
     $_rec_hname="";
     $_rec_dname="";


$_pk_rec_id=$_POST["r_id"];
    
$_rec_name=$_POST["r_name"];
          $_rec_gender=$_POST["r_gender"];
           $_rec_bgroup=$_POST["r_bgroup"];
           $_rec_contact=$_POST["r_mob"];
           $_rec_area=$_POST["r_area"];
           $_rec_address=$_POST["r_address"];
           $_rec_relation=$_POST["r_relation"];
           $_rec_hname=$_POST["r_hospital"];
           $_rec_dname=$_POST["r_dname"];
             

    
$sql="update tbl_recipient set  recipient_name='". $_rec_name  ."',recipient_gender='". $_rec_gender  ."',recipient_blood_group='". $_rec_bgroup  ."',recipient_contact='". $_rec_contact  ."',recipient_area='". $_rec_area  ."',recipient_address='". $_rec_address  ."',recipient_relation='". $_rec_relation ."',hospital_name='". $_rec_hname  ."',doctor_name='". $_rec_dname  ."' where recipient_id='".   $_pk_rec_id."' ";
echo $sql;
if($conn->query($sql)===true){
    
    header('location:view_recipient.php');
    //echo "update language_tbl set Language_name='". $_Language_name  ."' where pk_Language_id='".   $_pk_Language_id."' ";
}
else
{

    echo "unsccessfull";
}

?> 