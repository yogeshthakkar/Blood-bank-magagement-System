<?php
 include('home_header.php');
?>
<!--header over-->

<div class="container">
    <div class="row no-gutters">
     <div class="col-lg-8 col-sm-7 col-12">
      <div class="slider">
          

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators" style="z-index: -2;">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>

      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="image/1.jpg" alt="Los Angeles" style="width:100%;height: 400px;">
         
    </div>

      <div class="item">
         <img src="image/3.jpg" alt="Chicago" style="width:100%;height: 400px;">
     
      </div>
    
      <div class="item">
        <img src="image/4.jpg" alt="New york" style="width:100%;height: 400px;">
        </div>


      <div class="item">
        <img src="image/lg4.jpg" alt="New york" style="width:100%;height: 400px;">
        
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      
            <i class="fa fa-angle-left glyphicon glyphicon-chevron-left" aria-hidden="true"></i>

    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      
       <i class="fa fa-angle-right glyphicon glyphicon-chevron-right" aria-hidden="true"></i>
    </a>
  
</div>
         
     </div>
<!-- set image for mobile size-->
  

     </div>
      <div class="mobimage">
      
       <img src="image/lg4.jpg">
   </div>

</div>
     <div class="col-lg-4 col-sm-5 col-12">

       <div class="camp">
          <div class="camph">
              <span> UPCOMING BLOOD CAMP EVENTS</span>
              <ul class="campreg">
                <li><a href="orgreg.php">Organization Registration</a></li>
                <!--   <li><a href="camplogin.html">Camp Login</a></li>
              --></ul>
          </div> 
          <div class="campn" style="width:300px;height:270px;overflow:auto">
            <b>

              <?php 
   $conn = new mysqli("localhost", "root", "", "BloodBank");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$originalDate =  date('Y-m-d');
$new =  date('Y-m-d', strtotime($originalDate. ' + 6 days'));

$sql="select camp_name,camp_venueDate,camp_location,camp_contact from tbl_camp where camp_venueDate = '$new' ";

  $result=$conn->query($sql);
  if(mysqli_num_rows($result)>0){
      while($row= mysqli_fetch_assoc($result))
      { 
        echo "Name : "; echo $row["camp_name"]; echo "</br>";
        echo "VenueDate : "; echo $row["camp_venueDate"]; echo "</br>";
        echo "Location : "; echo $row["camp_location"]; echo "</br>";
        echo "Contact : "; echo $row["camp_contact"]; echo "</br>";
        echo "</br>";
            }

    }
  
    ?>
      
    </b>
          </div>
       </div>
     </div>

     </div>
</div>
<!--slider over-->

<div class="container">
  <div class="row no-gutters">
  	
  	<div clas="col-lg-3 col-sm-3 col-12">
    <div class="con">
    	 <div class="conh">
         <span>CITIZEN CORNER</span>
       </div>
       <ul>
         <li style="background-color: #cc0000;color:#fff;"><a href="bloodrequest.php">Blood Request</a></li>
         <li><a href="bloodbank_reg.php"> Blood Bank </a></li>
         <li><a href="hospital.php">Hospital </a></li>
         <li><a href="orgreg.php">Organization </a></li>
         <li><a href="blooddetail.php">Blood Bank Details</a></li>
         <li><a href="registration.php">Donor</a></li>
         
         </ul>
  	</div>
  	</div>

    <div class="col-lg-9 col-sm-9 col-12">
    <div class="contab">
    	 <div class="cont">
          <span>REGISTERED DONOR</span>
        </div>
        <div class="ddtab">
        <marquee direction="up" height="330" width="100%" class="mr" onMouseover="this.stop()" onMouseOut="this.start()" >
<table class="table table-striped table-bordered table-hover dataTable hometab" id="mydata">

  <thead>
      
  <tr>
    <th>name <i class="fa fa-fw fa-sort"></i></th>
    <th>Blood group<i class="fa fa-fw fa-sort"></th>
    <th>Contact No<i class="fa fa-fw fa-sort"></th>
    <th>City<i class="fa fa-fw fa-sort"></th>
 </tr>


  </thead>
  
  <tbody>
  <?php 
   $conn = new mysqli("localhost", "root", "", "BloodBank");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  $sql="select donor_name,donor_blood_group,donor_contact,donor_city from tbl_donor";
  $result=$conn->query($sql);
  if(mysqli_num_rows($result)>0){
      while($row= mysqli_fetch_assoc($result)){
          echo "<tr><td>".$row["donor_name"]."</td><td>".$row["donor_blood_group"]."</td><td>".$row["donor_contact"]."</td><td>".$row["donor_city"]."</td></tr>";
      }
  }
  ?>
  </tbody>
 <tfoot>

 </tfoot>
</table>
</marquee>

</div>
    </div>
    </div>
  </div>
</div>
<!--over-->


<div class="container">
   <div class="row no-gutters">
     <div class="col-lg-12 col-sm-12 col-12">
     <div class="footer">
        <center> 2019, BLOOD BANK MANAGEMENT SYSTEM , DA-IICT , GANDHINAGAR , GUJARAT..</center>

      </div>
     </div>
   </div>
</div>
<br>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>

<script src="js/dataTables.bootstrap.min.js"></script>


    <script type="text/javascript">
$('#mydata').dataTable();
  </script>
     
 
</body>
</html>