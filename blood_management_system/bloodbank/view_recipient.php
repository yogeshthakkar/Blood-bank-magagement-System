<?php 

include('bloodbank_header.php');

?>
<!--sidebar-->
<div class="content1">
<div class="content2">
 <div class="container">
        <div class="table-wrapper">         
            <div class="table-title">
                <div class="row">
                        <h2>Recipient <b>Details</b></h2>
                   
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
    <th>Name <i class="fa fa-fw fa-sort"></i></th>
    <th>Contact No<i class="fa fa-fw fa-sort"></th>
    <th>Blood Group <i class="fa fa-fw fa-sort"></i></th>
    <th>Area<i class="fa fa-fw fa-sort"></th>
    <th>Address<i class="fa fa-fw fa-sort"></th>
    <th>Relation<i class="fa fa-fw fa-sort"></i></th>
    <th>Doctor Name<i class="fa fa-fw fa-sort"></th>
    <th>Hospital Name<i class="fa fa-fw fa-sort"></th>
 
 
    
    <th style="width:150px;"">Action</th>
 </tr>
                </thead>
                <tbody>
  <?php 
   $conn = new mysqli("localhost", "root", "", "BloodBank");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  $sql="select * from tbl_recipient where recipient_status='0'";
  $result=$conn->query($sql);
  if(mysqli_num_rows($result)>0){
      while($row= mysqli_fetch_assoc($result)){
          echo '<tr><td>'.$row["recipient_name"].'</td><td>'.$row["recipient_contact"].'</td><td>'.$row["recipient_blood_group"].'</td><td>'.$row["recipient_area"].'</td><td>'.$row["recipient_address"].'</td><td>'.$row["recipient_relation"].'</td><td>'.$row["doctor_name"].'</td><td>'.$row["hospital_name"].'</td><td>
                                      <a href="edit_recp.php?id='. $row["recipient_id"].'"><i class="material-icons">&#xE254;</i></a>
                                   
  <a href="res_delete.php?id='. $row["recipient_id"].'" onclick="return checkDelete()"<i class="material-icons">&#xE872;</i></a>
  <a href="rees_status.php?id='. $row["recipient_id"].'"  onclick="return checkaccept();"><i class="fa fa-check-square-o" aria-hidden="true"></i></a>
  <a href="" onclick="return checkdelete();><i class="fa fa-window-close" aria-hidden="true"></i></a>
                        </td></tr>';
      
          
      }
  }
  ?>
      <!--<td>'.$row["admin_status"].'</td><td>'.$row["admin_id"].'</td>-->
  </tbody>
            </table>
        </div>



        </div>
    </div>
    </div>     
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Blood Bank Management System</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure You Want To Delete ??
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Ok</button>
      </div>
    </div>
  </div>
</div>
<!---->




</body>
</html>                                                                                             