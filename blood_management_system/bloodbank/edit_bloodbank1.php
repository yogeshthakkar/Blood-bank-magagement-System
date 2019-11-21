<?php
$conn=new mysqli("localhost","root","","bloodbank");
if($conn->connect_error)
{
    echo "connection failed";
}

$_bloodbank_name="";
$_add="";
$_area="";
$_contactno;
$_pk_bloodbank_id=$_POST["txtbemail"];
$_hospital_name=$_POST["txtbname"];
$_add=$_POST["txtbaddress"];
$_area=$_POST["txtarea"];

$_contactno=$_POST["txtbmob"];


	
$sql="update tbl_blood_bank set bloodbank_name='". $_hospital_name ."',	bloodbank_area='". $_area  ."',bloodbank_contact='". $_contactno ."',bloodbank_address='". $_add  ."' where bloodbank_email='".   $_pk_bloodbank_id."' ";
//echo $sql;
if($conn->query($sql)===true){
    echo $sql;
    header('location:view_bloodbank.php');
    //echo "update language_tbl set Language_name='". $_Language_name  ."' where pk_Language_id='".   $_pk_Language_id."' ";
}
else
{

    echo "unsccessfull";
}

?> 