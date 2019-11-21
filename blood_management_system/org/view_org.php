<?php
 include('org_header.php');
?>
<!--sidebar-->
<div class="content1">
<div class="content2">
 <div class="container">
        <div class="table-wrapper">         
            <div class="table-title">
                <div class="row">
                        <h2>Organization<b> Details</b></h2>
                   
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
                        <th>Email</th>
                        
                        <th>Contact</th>
                        <th>Address</th>
                        
                        <th>Action</th>
                         
                       
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $conn = new mysqli("localhost", "root", "", "bloodbank");
                 // Check connection
                 if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
                 } 
                   $sql="select * from tbl_organization";
                   $result=$conn->query($sql);
                   if(mysqli_num_rows($result)>0)
                   {
                 
                       while($row= mysqli_fetch_assoc($result))
                       {
                           echo '</td><td>'.$row["org_name"].'</td><td>'.$row["org_email"].'</td><td>'.$row["org_contact"].'</td><td>'.$row["org_address"].'</td><td>
                           
                     <a href="Edit_profile.php?id='. $row["org_email"].'" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                   <a href="org_delete.php?id='. $row["org_email"].'" onclick="return checkDelete()"><i class="material-icons">&#xE872;</i></a>
                     
                                         </td></tr>';
                       
                           
                       }
                   }
                   ?>
                     
                                
               
                </tbody>
            </table>
        </div>



        </div>
    </div>
    </div>     
</div>



 <div class="menu"  id="dmenu" style="display: none;">
   <div class="setdelete" >
     <i class="fa fa-times" onclick="closedelete()"></i>
      <span>ARE YOU SURE TO DELETE RECORD ??</span>
      <ul class="setok">
          <li><a href="#" class="ok">OK</a></li>
        </ul>

   </div>
 </div> 

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
    $('#show').click(function() {
      $('.menu').toggle("slide");
    });
});

function closedelete() {
  document.getElementById("dmenu").style.display = "none";
}
function checkDelete()
{
  return confirm("Are You Sure To Delete");
}
</script>

</body>
</html>                                                                                             