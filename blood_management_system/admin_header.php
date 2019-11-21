<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blood Bank Management System</title>
 <link rel="icon" type="image/png" sizes="20x20" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/blood_management_system/admin/image/bbms.jpg"> 
 <link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/blood_management_system/css/admin.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/blood_management_system/admin/css/chat.css">
<link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/blood_management_system/admin/css/bootstrap.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/blood_management_system/admin/js/bootstrap.min.js"></script>





</head>
<body>

<header>
   <div class="header">
<i class="fa fa-bars open_icon" onclick="openNav()" style="color:#fff;" class="openbtn" style="color:#000;"></i> 
 
  <div class="headright">
    <ul class="one">
     <!--<li class="n"><a href="#" class="no"><i class="fa fa-bell" aria-hidden="true"></i></a>
        <ul class="noti"> 
            <li>you have 10 Notification</li>
            <li>deni</li>
            <li>maniya</li>
            <li>bestfriend</li>
            <li>krishna</li>
                <li>vidhi</li>
           <li>julee</li>
           <li>mani</li>
          

          </ul>
     </li>
     <li class="c"><a href="#" class="msg"><i class="fa fa-comments" aria-hidden="true"></i></a>
      
          <ul class="comment"> 
            <li class="setheight1">hi maniya how are you? hello daiict student how are you frkhf df dsfdf d f fd fd fd</li>
            <li class="setheight2">can anyone solve this problem ?</li>
            <li class="setheight1">how are you all please help</li>
            <li class="setheight2">can you drink with me tonight?</li>
            <li class="setheight1">hi maniya how are you?</li>
            <li class="setheight2">can anyone solve this problem ?</li>
            <li class="setheight1">how are you all please help me to find this fddf dsfdsfd dfsfdd sdfsddfd sdssff sproblem werew rwerewrewe wewwe eweedw</li>
            <li class="setheight2">can you drink with me tonight?</li>
          </ul>
       
     </li>
-->
     <li><a href="#" class="user"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
     <ul class="oneinner">
            <li class="i">
             <img src="image/d.png">
            </li>
           <!-- <li class="profile" >
               <span><a href="#">Profile</a></span>
             </li>  -->
              <li class="sign">
                 <span><a href="Logout.php">Sign Out</a></span>
              </li> 
              <li class="editpwd1" data-toggle="modal" data-target="#exampleModal" id="myForm">
                 <span><a href="changepassword.php">Edit Password</a></span>
              </li> 
         </ul> 
     
     </li>
     <li class="adinfo">Blood Bank Management System</li>
     <li class="admininfo">Blood Bank Management system</li>
   </ul>    
  
  </div>
   </div>
</header>

<!--header-->
<div class="sidebar" id="mySidebar">
  <i class="fa fa-times open_icon" style="color:#fff;" class="closebtn" onclick="closeNav()"></i>
 <div class="setmenu">
  <a href="./admin/admin_home.php" style="color:#fff;text-decoration:none;">Home</a>
  <button class="dropdown-btn">Admin
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <li><a href="add_admin.php">Add Admin</a></li>
    <li><a href="./admin/view_admin.php">View Admin</a></li>
  </div>
<button class="dropdown-btn">Donor
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <li><a href="add_donor.php">Add Donor</a></li>
    <li><a href="./admin/view_donor.php">View Donor</a></li>
  </div>
  <button class="dropdown-btn">Blood Bank
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <li><a href="add_bank.php">Add Bank</a></li>
    <li><a href="./admin/view_bloodbank.php">View Bank</a></li>
  </div>
   <button class="dropdown-btn">Blood
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    
    <li><a href="./admin/view_bloodbank.php">View Blood</a></li>
  </div>
  <button class="dropdown-btn">Hospital
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <li><a href="add_hospital.php">Add Hospital</a></li>
    <li><a href="./admin/view_hospital.php">View Hospital</a></li>
  </div>
   <button class="dropdown-btn">Organization
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <li><a href="add_organization.php">Add Organization</a></li>
    <li><a href="./admin/view_organization.php">View Organization</a></li>
  </div>
  <button class="dropdown-btn">Camp
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <!--<li><a href="../add_camp.php">Add Camp</a></li>-->
    <li><a href="./admin/view_camp.php">View Camp</a></li>
  </div>
    <button class="dropdown-btn">Recipient
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
   
    <li><a href="./admin/view_recipient.php">View Recipient</a></li>
  </div>
  
 </div>
</div>
  



<!--Checking for edit password pop up box!!!!-->










