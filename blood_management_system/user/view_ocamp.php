<?php
 include('user_header.php');

?>
 <link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/blood_management_system/user/css/camp.css">
<!--sidebar-->
<div class="content1">
<div class="content2">
 <div class="container">
        <div class="table-wrapper">         
            <div class="table-title">
                <div class="row">
                        <h2>Camp<b> Details</b></h2>
                   
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
                        <th>Venue Date</th>
                        
                        <th>Location</th>
                        <th>Time</th>
                        <th>Contact</th>
                      
                         
                       
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $conn = new mysqli("localhost", "root", "", "bloodbank");
                 // Check connection
                 if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
                 } 
                   $sql="select * from tbl_camp where camp_venueDate>CURRENT_DATE ";
                   $result=$conn->query($sql);
                   if(mysqli_num_rows($result)>0)
                   {
                 
                       while($row= mysqli_fetch_assoc($result))
                       {
                           echo '</td><td>'.$row["camp_name"].'</td><td>'.$row["camp_org_email"].'</td><td>'.$row["camp_venueDate"].'</td><td>'.$row["camp_location"].'</td><td>'.$row["camp_time"].'</td><td>'.$row["camp_contact"].'</td>
                  </tr>';
                       
                           
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
    $('#show').click(function() {
      $('.menu').toggle("slide");
    });
});

function closedelete() {
  document.getElementById("dmenu").style.display = "none";
}
</script>

</body>
</html>                                                                                             