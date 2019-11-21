<?php 
session_start();
if(!isset($_SESSION['user_username'])){
    ?>
<script>
    window.location.href = '../login.php';
</script>

<?php
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blood Bank Management System</title>
 <link rel="icon" type="image/png" sizes="20x20" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/blood_management_system/user/image/bbms.jpg">
 <link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/blood_management_system/user/css/user.css">
 <link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/blood_management_system/user/css/bootstrap.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</head>
<body>

<header>
   <div class="header">
<i class="fa fa-bars open_icon" onclick="openNav()"  class="openbtn" style="color:#cc0000;"></i> 
 
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
            <!--<li class="profile">
               <span><a href="#">Profile</a></span>
             </li>-->  
              <li class="sign">
                 <span><a href="../Logout.php">Sign Out</a></span>
              </li> 
               <li class="editpwd1"  id="myForm">
                 <span><a href="changepassword.php">Edit Password</a></span>
              </li> 
         </ul> 
     
     </li>
     <li class="adinfo">Blood Bank Management System</li>
     
   </ul>    
  
  </div>
   </div>
</header>

<!--header-->

<div class="sidebar" id="mySidebar">
  <i class="fa fa-times open_icon" style="color:#fff;" class="closebtn" onclick="closeNav()"></i>
 <div class="setmenu">
  <a href="user.php" style="color:#fff;text-decoration: none;">Home</a>
  <button class="dropdown-btn">Donor
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <li><a href="view_user.php">View User</a></li>
    <li><a href="view_ocamp.php">View Camp</a></li>
   
  </div><!--
  <button class="dropdown-btn">Hospital
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <li><a href="#">Add Hospital</a></li>
    <li><a href="view_hospital.html">View Hospital</a></li>
  </div>
  <button class="dropdown-btn">Camp
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <li><a href="#">Add Camp</a></li>
    <li><a href="view_camp.html">View Camp</a></li>
  </div>-->
 </div>
</div>
<!--sidebar-->



<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "300px";

  document.getElementById("mySidebar").style.display = "block";

 document.getElementById("content2").style.marginLeft = "300px";
  document.getElementById("main").style.marginLeft = "300px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";

document.getElementById("content2").style.marginLeft = "0";
  document.getElementById("main").style.marginLeft = "0";
   
}
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

   <script type="text/javascript">
$(document).ready(function(){
    // Activate tooltips
    $('[data-toggle="tooltip"]').tooltip();
    
    // Filter table rows based on searched term
    $("#search").on("keyup", function() {
        var term = $(this).val().toLowerCase();
        $("table tbody tr").each(function(){
            $row = $(this);
            var name = $row.find("td").text().toLowerCase();
            console.log(name);
            if(name.search(term) < 0){                
                $row.hide();
            } else{
                $row.show();
            }
        });
    });
});
</script>