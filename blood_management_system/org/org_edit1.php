<?php
$conn=new mysqli("localhost","root","","bloodbank");
if($conn->connect_error)
{
    echo "connection failed";
}
$_pk_org_id="";
    
    
$_org_name="";
$_add="";
$_contactno;
$_pk_org_id=$_POST["txtorgemail"];
    
    
$_org_name=$_POST["txtorgname"];
$_add=$_POST["txtorgadd"];
$_contactno=$_POST["txtorgmob"];


	
$sql="update tbl_organization set 	org_name='". $_org_name  ."',org_contact='". $_contactno ."',org_address='". $_add  ."' where org_email='".   $_pk_org_id."' ";
echo $sql;
if($conn->query($sql)===true){
    
   header('location:view_org.php');
    //echo "update language_tbl set Language_name='". $_Language_name  ."' where pk_Language_id='".   $_pk_Language_id."' ";
}
else
{

    echo "unsccessfull";
}

?> 