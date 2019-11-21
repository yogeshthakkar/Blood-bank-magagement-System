<?php
$conn=new mysqli("localhost","root","","bloodbank");
if($conn->connect_error)
{
    echo "connection failed";
}

    
    
       $_camp_name="";
       $_camp_org_email="";
       $_camp_vdate="";
       $_camp_rdate="";
       $_camp_location="";
       $_camp_time="";
       $_camp_contact="";
       


$_pk_camp_id=$_POST["camp_id"];
    
$_camp_name=$_POST["orgname"];
          $_camp_org_email=$_POST["cmail"];
           $_camp_vdate=$_POST["cvenue_date"];
           $_camp_rdate=$_POST["creg_date"];
           $_camp_location=$_POST["cvenue"];
           $_camp_time=$_POST["cvenue_time"];
           $_camp_contact=$_POST["ccon"];
             

    
$sql="update tbl_camp set  camp_name='". $_camp_name  ."',camp_org_email='". $_camp_org_email  ."',camp_venueDate='". $_camp_vdate  ."',camp_registrationDate='". $_camp_rdate  ."',camp_location='". $_camp_location  ."',camp_time='". $_camp_time  ."',camp_contact='". $_camp_contact ."' where camp_id='".   $_pk_camp_id."' ";
echo $sql;
if($conn->query($sql)===true){
    
    header('location:view_camp.php');
    //echo "update language_tbl set Language_name='". $_Language_name  ."' where pk_Language_id='".   $_pk_Language_id."' ";
}
else
{

    echo "unsccessfull";
}

?> 