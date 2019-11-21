<?php 

include('user_header.php');

?>

<!--sidebar-->
<div class="content1">
<div class="content2">
 <div class="container">
        <div class="table-wrapper">         
            <div class="table-title">
                <div class="row">
                        <h2>Blood Bank<b> Details</b></h2>
                   
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
    <th>Blood Bank Name <i class="fa fa-fw fa-sort"></i></th>
    <th>Email<i class="fa fa-fw fa-sort"></th>
    <th>Area<i class="fa fa-fw fa-sort"></th>
    <th>Address<i class="fa fa-fw fa-sort"></th>
    <th>Contact<i class="fa fa-fw fa-sort"></th>
 
    

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
          echo '<tr><td>'.$row["bloodbank_name"].'</td><td>'.$row["bloodbank_email"].'</td><td>'.$row["bloodbank_area"].'</td><td>'.$row["bloodbank_address"].'</td><td>'.$row["bloodbank_contact"].'</td>';
      
          
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
</body>
</html>                                                                                             