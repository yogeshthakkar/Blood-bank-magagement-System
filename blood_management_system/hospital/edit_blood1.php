<?php
$conn=new mysqli("localhost","root","","bloodbank");
if($conn->connect_error)
{
    echo "connection failed";
}
$_pk_blood_id="";
  

     $_group="";
     $_givendate="";
     $_D_id;
     $_pk_blood_id=$_POST["bid"];
  

     $_group=$_POST["bgroup"];
     $_givendate=$_POST["bdate"];
     $_D_id=$_POST["bdid"];


	
$sql="update tbl_blood set 	blood_group='". $_group  ."',blood_givenDate='". $_givendate  ."',blood_donor_email	='". $_D_id ."' where blood_id='".   $_pk_blood_id."' ";
echo $sql;
if($conn->query($sql)===true){
    
    header('location:view_blood.php');
    //echo "update language_tbl set Language_name='". $_Language_name  ."' where pk_Language_id='".   $_pk_Language_id."' ";
}
else
{

    echo "unsccessfull";
}

?> 