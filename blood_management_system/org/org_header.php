<?php 
session_start();
if(!isset($_SESSION['organ_username'])){
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
 <link rel="icon" type="image/png" sizes="20x20" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/blood_management_system/org/image/bbms.jpg">
<link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/blood_management_system/org/css/camp.css">
<link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/blood_management_system/org/css/bootstrap.min.css">


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</head>
<body>
 
<header>
   <div class="header">
<i class="fa fa-bars open_icon" onclick="openNav()" style="color:#cc0000;" class="openbtn" ></i> 
 
  <div class="headright">
    <ul class="one">
  
     

     <li><a href="#" class="user"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
     <ul class="oneinner">
            <li class="i">
             <img src="image/d.png">
            </li>
           <!-- <li class="profile">
               <span><a href="#">Profile</a></span>
             </li>  -->
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
    <a href="org_home.php" style="color:#fff;text-decoration: none;">Home</a>
  <button class="dropdown-btn">Organization
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <!--<li><a href="Edit_profile.php">Edit Profile</a></li>-->
    <li><a href="view_org.php">View_Details</a></li>
  </div>
<button class="dropdown-btn">camp
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <li><a href="../add_camp.php">Add camp</a></li>
    <li><a href="view_ocamp.php">View camp</a></li>
  </div>
 <a href="donation_details.php" style="color:#fff;text-decoration: none;">Upload Sheet</a>
 <!-- <button class="dropdown-btn">Hospital
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
  </div>
  <button class="dropdown-btn">Mail
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <li><a href="#">Add Donor</a></li>
    <li><a href="#">View Donor</a></li>
  </div>
  <button class="dropdown-btn">SMS
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <li><a href="#">Add Donor</a></li>
    <li><a href="#">View Donor</a></li>
  </div>
  <button class="dropdown-btn">Donor
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <li><a href="#">Add Donor</a></li>
    <li><a href="#">View Donor</a></li>
  </div>-->
 </div>
</div>




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
<script>
$(document).ready(function(){
    $('#showpro').click(function() {
      $('.openprofile').toggle("slide");
    });
});
function closepro() {
  document.getElementById("clpro").style.display = "none";
}
</script>




<script>
$(document).ready(function(){
    $('#show').click(function() {
      $('.menu').toggle("slide");
    });
});

function closedelete() {
  document.getElementById("dmenu").style.display = "none";
}
</script>
<script>
 function checkDelete()
 {
  return confirm("Are You Sure To Delete ?");
 }
  </script>