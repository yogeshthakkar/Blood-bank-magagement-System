<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

<title>Blood Bank Management System</title>
 <link rel="icon" type="image/png" sizes="20x20" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/blood_management_system/image/bbms.jpg">
<link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/blood_management_system/css/blood.css" type="text/css" rel="stylesheet"/>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js" type="text/javascript"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>

<script src="js/dataTables.bootstrap.min.js"></script>


    <script type="text/javascript">
$('#mydata').dataTable();
  </script>
  
</head>

<body>

  <div class="header">
    <div class="container">
     <div class="row no-gutters">
      <div class="col-lg-2 col-sm-3">
        <div class="iconset">
         <img src="image/logo2.png">
        </div>
      </div>
           <div class="col-lg-10 col-sm-9 col-12 setpos">
            <div class="title">

              <span class="heading1"> BLOOD BANK MANAGEMENT SYSTEM</span><span>
                <ul><li id="home"><a href="Bloodbank.php">HOME</a></li><li><a href="login.php">LOGIN</a></li></ul></span>
              </div>
           <ul class="main_menu">
              <li><a href="bloodbank_reg.php">Blood Bank</a></li>
               <li><a href="registration.php">Donor</a>
                <!--
                 <ul class="sub_menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Cources</a></li>
                        <li><a href="#">Gallary</a></li>
                        
                      
                   </ul>
                -->
                </li>
                <li><a href="bloodrequest.php">Blood Request</a></li>
                <li><a href="blooddetail.php">Details</a></li>
                <li><a href="hospital.php">Hospital</a></li>
           
                
           </ul> 
           <div class="menu_icon">
              <i class="fa fa-bars open_icon"></i>
                <i class="fa fa-times open_icon" style="display:none;"></i>
           </div>
           <ul class="mob_main_menu">
              <li><a href="Bloodbank.php">Home</a></li>
                <li><a href="bloodbank_reg.php">Bank Reg.</a></li>
                <li><a href="registration.php">Donor Reg.</i></a>
                <!--
                 <ul class="mob_sub_menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Cources</a></li>
                        <li><a href="#">Gallary</a></li>
                        <li><a href="#">Contact Us</a></li>
                        
                   </ul>-->
                </li>
                <li><a href="bloodrequest.php">Blood Request</a></li>
              
                <li><a href="blooddetail.php">Details</a></li>
                <li><a href="hospital.php">Hospital Reg</a></li>
             </ul> 
         </div>
      </div>
    </div>
   </div> 
    <script>
    
      $(document).ready(function(e) {
            $('.mob_main_menu').hide();
      $('.mob_sub_menu').hide();
      $('.menu_icon').click(function(){
        
        $('.mob_main_menu').slideToggle(500);
        $('.open_icon').toggleClass('fa-times');
        $('.open_icon').toggleClass('fa-bars');
        
      });
      $('.mob_main_menu li').click(function(){
        
        $('.mob_sub_menu').slideToggle(500);
        
      });
    });
    </script>
