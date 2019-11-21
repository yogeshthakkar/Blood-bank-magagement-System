<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Table with Search Column Feature</title>
 <link rel="stylesheet" href="css/camp.css">
<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
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
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";

 document.getElementById("content2").style.marginLeft = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";

document.getElementById("content2").style.marginLeft = "0";
  document.getElementById("main").style.marginLeft = "0";
   
}
</script>
<!--
<style type="text/css">
    body {
        color: #566787;
        background: #f7f5f2;
        font-family: 'Roboto', sans-serif;
    }
    .table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px auto;
        border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        color: #fff;
        background: #40b2cd;        
        padding: 16px 25px;
        margin: -20px -25px 10px;
        border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
    }
    .search-box {
        position: relative;
        float: right;
       
        margin-top: -30px;
    }
    .search-box .input-group {
        min-width: 300px;
        position: absolute;
        right: 0;
    }
    .search-box .input-group-addon, .search-box input {
        border-color: #ddd;
        border-radius: 0;
    }   
    .search-box input {
        height: 34px;
        padding-right: 35px;
        background: #f4fcfd;
        border: none;
        border-radius: 2px !important;
    }
    .search-box input:focus {
        background: #fff;
    }
    .search-box input::placeholder {
        font-style: italic;
    }
    .search-box .input-group-addon {
        min-width: 35px;
        border: none;
        background: transparent;
        position: absolute;
        right: 0;
        z-index: 9;
        padding: 6px 0;
    }
    .search-box i {
        color: #a0a5b1;
        font-size: 19px;
        position: relative;
        top: 2px;
    }
    table.table {
        table-layout: fixed;
        margin-top: 15px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
  table.table th:first-child {
        width: 60px;
    }
    table.table th:last-child {
        width: 120px;
    }
    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }
    table.table td a.view {
        color: #03A9F4;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }  
    #set{height: 400px;width: 100%;overflow: hidden;overflow: scroll;overflow-x: scroll;}
    #sc th{overflow: hidden;width: 30%;}
    #sc td{overflow: hidden;}
    .table-wrapper{overflow-x: hidden;overflow-x: scroll;}
@media(max-width: 767px)
{
    #set{width: 300px;height: 300px;overflow: hidden;overflow-x: scroll;}
   #sc th{width: 200px;}
    #sc td{overflow: hidden;}
    .search-box .input-group {
        min-width: 280px;
        margin-top: 30px;
       margin-right: -4px;
    }

}
@media(min-width: 768px) and (max-width: 991px)
{

}
@media(min-width: 992px) and (max-width: 1024px)
{
 .search-box{margin-top: }   
}
@media(min-width: 1025px) and (max-width: 1200px)
{
    .search-box{margin-top: 0px;}
}





</style>-->
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
</head>
<body>

<header>
   <div class="header">
<i class="fa fa-bars open_icon" onclick="openNav()" class="openbtn" style="color:#000;"></i> 
 
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
       
     </li>-->

     <li><a href="#" class="user"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
     <ul class="oneinner">
            <li class="i">
             <img src="image/d.png">
            </li>
            <li class="profile">
               <span><a href="#">Profile</a></span>
             </li>  
              <li class="sign">
                 <span><a href="#">Sign Out</a></span>
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
    <li><a href="Edit_profile.php">Edit Profile</a></li>
    <li><a href="view_user.php">View_Details</a></li>
  </div>
<button class="dropdown-btn">camp
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <li><a href="add_ocamp.php">Add camp</a></li>
    <li><a href="view_ocamp.php">View camp</a></li>
  </div>
 
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
<!--sidebar-->
<!--sidebar-->
<!--
<div class="content1">
<div class="content2">
 <div class="container">
        <div class="table-wrapper">         
            <div class="table-title">
                <div class="row">
                        <h2>Customer <b>Details</b></h2>
                   
                        <div class="search-box">
                            <div class="input-group">                               
                                <input type="text" id="search" class="form-control" placeholder="Search by Name">
                                <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                        </div>
                    </div>

                </div>
            </div>
            <div id="set">
            <table class="table table-striped table-bordered" id="sc">
                <thead>
                    <tr>
                      
                        <th>Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Pin Code</th>
                        <th>Country</th>
                        <th>Actions</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>1</td>
                        <td>Thomas Hardy</td>
                        <td>89 Chiaroscuro Rd.</td>
                        <td>Portland</td>
                        <td>97219</td>
                        <td>USA</td>
                       
                       
                        <td>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>1</td>
                        <td>Thomas Hardy</td>
                        <td>89 Chiaroscuro Rd.</td>
                        <td>Portland</td>
                        <td>97219</td>
                        <td>USA</td>
                        <td>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>1</td>
                        <td>Thomas Hardy</td>
                        <td>89 Chiaroscuro Rd.</td>
                        <td>Portland</td>
                        <td>97219</td>
                        <td>USA</td>
                        <td>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <td>1</td>
                        <td>Thomas Hardy</td>
                        <td>89 Chiaroscuro Rd.</td>
                        <td>Portland</td>
                        <td>97219</td>
                        <td>USA</td>
                        <td>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Maria Anders</td>
                        <td>Obere Str. 57</td>
                        <td>Berlin</td>
                        <td>12209</td>
                        <td>Germany</td>
                        <td>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Fran Wilson</td>
                        <td>C/ Araquil, 67</td>
                        <td>Madrid</td>
                        <td>28023</td>
                        <td>Spain</td>
                        <td>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Dominique Perrier</td>
                        <td>25, rue Lauriston</td>
                        <td>Paris</td>
                        <td>75016</td>
                        <td>France</td>
                        <td>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Martin Blank</td>
                        <td>Via Monte Bianco 34</td>
                        <td>Turin</td>
                        <td>10100</td>
                        <td>Italy</td>
                        <td>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>        
                </tbody>
            </table>
        </div>



        </div>
    </div>
    </div>     
</div>

-->
<div class="openprofile" id="clpro" >

   <div class="setproimage">
      <i class="fa fa-times" id="setfaicon" onclick="closepro()"></i>

        <img src="image/d.png"><br>
    <ul><li><a href="">Edit Profile</a></li></ul>
   </div>
   
    <div>
    <table  class="setprocon">
    <tr><span><td>NAME  </td><td>sdwsfew</td></span></tr>  
    <tr><span><td>EMAIL </td><td>ededew</td></span></tr>
    <tr><span><td>MOBILE </td><td>wdd</td></span></tr>
     <tr><span><td>GENDER </td><td>wed</td></span></tr>
    <tr><span><td>BLOOD GROUP </td><td>dwe</td></span></tr>
    <tr><span><td>CITY </td><td>wde</td></span></tr>
    <tr><span><td>ADDRESS </td><td>wdw</td></span></tr>
   <tr><span><td> DOB  </td><td>ewdw</td></span></tr>
 
  </table>

  </div>

</div>

<script>
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
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";

 document.getElementById("content2").style.marginLeft = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";

document.getElementById("content2").style.marginLeft = "0";
  document.getElementById("main").style.marginLeft = "0";
   
}
</script>
</body>
</html>                                                                                             