<?php
$conn=new mysqli("localhost","root","","bloodbank");
if($conn->connect_error)
{
    echo "connection failed";
}
$_pk_admin_id="";
    
    
$_admin_name="";



$_contactno="";
$_pk_admin_id=$_POST["admin_email"];
    
    
$_admin_name=$_POST["admin_name"];


$_contactno=$_POST["contact_num"];


	

$sql="update tbl_admin set 	admin_name='". $_admin_name  ."',admin_email='". $_pk_admin_id  ."',admin_contact='". $_contactno ."' where 	admin_email='".   $_pk_admin_id."' ";
echo $sql;
if($conn->query($sql)===true){
    
    header('location:view_admin.php');
    //echo "update language_tbl set Language_name='". $_Language_name  ."' where pk_Language_id='".   $_pk_Language_id."' ";
}
else
{

    echo "unsccessfull";
}

?> 