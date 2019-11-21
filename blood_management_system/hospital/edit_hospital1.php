<?php
$conn=new mysqli("localhost","root","","bloodbank");
if($conn->connect_error)
{
    echo "connection failed";
}
$_pk_hospital_id="";
    
    
$_hospital_name="";
$_add="";
$_area="";

$_contactno;
$_pk_hospital_id=$_POST["txthosemail"];
    
    
$_hospital_name=$_POST["txthos_name"];
$_add=$_POST["txthos_add"];
$_area=$_POST["txthos_city"];

$_contactno=$_POST["txthos_num"];


	
$sql="update tbl_hospital set 	hospital_name='". $_hospital_name  ."',hospital_area='". $_area  ."',hospital_contact='". $_contactno ."',hospital_address='". $_add  ."' where hospital_email='".   $_pk_hospital_id."' ";
echo $sql;
if($conn->query($sql)===true){
    
    header('location:view_hospital.php');
    //echo "update language_tbl set Language_name='". $_Language_name  ."' where pk_Language_id='".   $_pk_Language_id."' ";
}
else
{

    echo "unsccessfull";
}

?> 