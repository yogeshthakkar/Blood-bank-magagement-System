<?php 

include('admin_header.php');

?>
<!--sidebar-->
<div class="content1">
<div class="content2">
 <div class="container">
        <div class="table-wrapper">         
            <div class="table-title">
                <div class="row">
                        <h2>Camp<b>Details</b></h2>
                   
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
      <th>Camp ID <i class="fa fa-fw fa-sort"></i></th>
    <th>Camp Name <i class="fa fa-fw fa-sort"></i></th>
       <th>camp Email<i class="fa fa-fw fa-sort"></th>
    <th>camp VenueDate<i class="fa fa-fw fa-sort"></th>
    <th>camp RegistrationDate<i class="fa fa-fw fa-sort"></th>
    <th>camp Location<i class="fa fa-fw fa-sort"></th>
    <th>camp Time<i class="fa fa-fw fa-sort"></th>
    <th>camp contact<i class="fa fa-fw fa-sort"></th>
 
    
    <th>Action</th>
 </tr>
  </thead>
  <tbody>
  <?php 
   $conn = new mysqli("localhost", "root", "", "BloodBank");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  $sql="select * from tbl_camp";
  $result=$conn->query($sql);
  if(mysqli_num_rows($result)>0){
      while($row= mysqli_fetch_assoc($result)){
          echo '<tr><td>'.$row["camp_id"].'</td><td>'.$row["camp_name"].'</td><td>'.$row["camp_org_email"].'</td><td>'.$row["camp_venueDate"].'</td><td>'.$row["camp_registrationDate"].'</td><td>'.$row["camp_location"].'</td><td>'.$row["camp_time"].'</td><td>'.$row["camp_contact"].'</td><td>
                                 <a href="edit_camp.php?id='. $row["camp_id"].'"><i class="material-icons">&#xE254;</i></a>                                                            

                                 <a href="camp_delete.php?id='. $row["camp_org_email"].'" onclick="return checkDelete()"><i class="material-icons">&#xE872;</i></a>
                        </td></tr>';
      
          
      }
  }
  ?>
      
  </tbody>
 <tfoot>

 </tfoot>
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
  function checkDelete()
  {
    return confirm("Are You Sure To Delete ? ");
  }

  </script>
</body>
</html>                                                                                             