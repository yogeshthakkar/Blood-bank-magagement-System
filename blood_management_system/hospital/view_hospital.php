<?php
 include('hospital_header.php');
?>

<!--sidebar-->
<!--sidebar-->
<div class="content1">
<div class="content2">
 <div class="container">
        <div class="table-wrapper">         
            <div class="table-title">
                <div class="row">
                        <h2>Hospital <b>Details</b></h2>
                   
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
                      
                        <th>Name<i class="fa fa-fw fa-sort"></i></th>
                        <th>Email<i class="fa fa-fw fa-sort"></i></th>
                        <th>Area<i class="fa fa-fw fa-sort"></i></th>
                        <th>Contact<i class="fa fa-fw fa-sort"></i></th>
                        <th>Address<i class="fa fa-fw fa-sort"></i></th>
                       
                        <th>Action<i class="fa fa-fw fa-sort"></i></th>
                         
                       
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $conn = new mysqli("localhost", "root", "", "bloodbank");
                 // Check connection
                 $username=$_SESSION['hospital_username'];
                 if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
                 } 
                   $sql="select * from tbl_hospital where `hospital_email`='$username'";
                   $result=$conn->query($sql);
                   if(mysqli_num_rows($result)>0)
                   {
                 
                       while($row= mysqli_fetch_assoc($result))
                       {
                           echo '</td><td>'.$row["hospital_name"].'</td><td>'.$row["hospital_email"].'</td><td>'.$row["hospital_area"].'</td><td>'.$row["hospital_contact"].'</td><td>'.$row["hospital_address"].'</td><td>
                           
                     <a href="edit_hospital.php?id='. $row["hospital_email"].'" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                   
                    
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
<!--
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
-->

</body>
</html>                                                                                             