<?php
$conn=new mysqli("localhost","root","","bloodbank");
if($conn->connect_error)
{
    echo "connection failed";
}

    
    
       $_donor_name="";
       $_donor_gender="";
       $_donor_dob="";
       $_donor_city="";
       $_donor_area="";
       $_donor_address="";
       $_donor_contact="";
       $_donor_blood_group="";
       $_donation_date="";
       $_donor_service="";
       $_donor_donation_months="";


$_pk_donor_id=$_POST["txthosemail"];
    
$_donor_name=$_POST["txthos_donor_name"];
          $_donor_gender=$_POST["txthos_donor_gender"];
           $_donor_dob=$_POST["txthos_donor_dob"];
           $_donor_city=$_POST["txthos_donor_city"];
           $_donor_area=$_POST["txthos_donor_area"];
           $_donor_address=$_POST["txthos_donor_address"];
           $_donor_contact=$_POST["txthos_donor_contact"];
           $_donor_blood_group=$_POST["txthos_donor_blood_group"];
           $_donation_date=$_POST["txthos_donation_date"];
           $_donor_service=$_POST["txthos_donor_service"];
           $_donor_donation_months=$_POST["txthos_donor_donation_months"];
             

    
$sql="update tbl_donor set  donor_name='". $_donor_name  ."',donor_gender='". $_donor_gender  ."',donor_dob='". $_donor_dob  ."',donor_city='". $_donor_city  ."',donor_area='". $_donor_area  ."',donor_address='". $_donor_address  ."',donor_contact='". $_donor_contact ."',donor_blood_group='". $_donor_blood_group  ."',donor_donation_months='". $_donor_donation_months  ."',donor_service='". $_donor_service  ."',donation_date='". $_donation_date  ."' where donor_email='".   $_pk_donor_id."' ";
echo $sql;
if($conn->query($sql)===true){
    
    header('location:view_donor.php');
    //echo "update language_tbl set Language_name='". $_Language_name  ."' where pk_Language_id='".   $_pk_Language_id."' ";
}
else
{

    echo "unsccessfull";
}

?> 