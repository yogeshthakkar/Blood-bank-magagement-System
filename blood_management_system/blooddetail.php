<?php

 include('home_header.php');
?>
<!--header over-->




<!--second-->

<div class="container">
 <div class="dd">
<h3 style="color:#cc0000;" >BLOOD BANK DETAIL</h3>
<table class="table table-striped table-bordered table-hover dataTable" id="mydata1">

  <thead>
  <tr>
    <th>Blood Name<i class="fa fa-fw fa-sort"></i></th>
    <th>Email<i class="fa fa-fw fa-sort"></th>
    <th>Area<i class="fa fa-fw fa-sort"></th>
    <th>Address<i class="fa fa-fw fa-sort"></th>
    <th>Camp Contact<i class="fa fa-fw fa-sort"></th>
   
 </tr>
  </thead>

 <tbody>
   <?php 
   $conn = new mysqli("localhost", "root", "", "BloodBank");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  $sql="select * from tbl_blood_bank";
  $result=$conn->query($sql);
  if(mysqli_num_rows($result)>0){
      while($row= mysqli_fetch_assoc($result)){
          echo '<tr><td>'.$row["bloodbank_name"].'</td><td>'.$row["bloodbank_email"].'</td><td>'.$row["bloodbank_area"].'</td><td>'.$row["bloodbank_address"].'</td><td>'.$row["bloodbank_contact"].'</td></tr>';
      
          
      }
  }
  ?>
 </tbody>
</table>

</div>
</div>
<!--over-->

<!--third-->








<div class="container">
   <div class="row no-gutters">
     <div class="col-lg-12 col-sm-12 col-12">
     <div class="footerbanktab">
        <center> 2019, BLOOD BANK MANAGEMENT SYSTEM , DA-IICT , GANDHINAGAR , GUJARAT..</center>
      </div>
     </div>
   </div>
</div>
<br>
<!--footer over-->


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>

<script src="js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
$('#mydata').dataTable();
$('#mydata1').dataTable();
$('#mydata2').dataTable();
	
  </script>
	
</body>
</html>