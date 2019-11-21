<?php 

include('org_header.php');

?>

<!--add camp-->

<div class="container">
   <div class="row no-gutters">
     <div class="campde">
               <?php
   
     //if($_SERVER["REQUEST_METHOD"]=="POST")
     //{
         $con=new mysqli("localhost","root","","bloodbank");
         if($con->connect_error)
         {
             echo "something went wrong";
         }
     
       $_pk_camp_id=$_GET["id"];
    
    
        
       $_camp_name="";
       $_camp_org_email="";
       $_camp_vdate="";
       $_camp_rdate="";
       $_camp_location="";
       $_camp_time="";
       $_camp_contact="";
       
    $sql="select * from tbl_camp where   camp_id="."'$_pk_camp_id'";
  
          $result=$con->query($sql);
         $row=$result->fetch_assoc();
       
       
      $_camp_name=$row["camp_name"];
       $_camp_org_email=$row["camp_org_email"];
       $_camp_vdate=$row["camp_venueDate"];
       $_camp_rdate=$row["camp_registrationDate"];
       $_camp_location=$row["camp_location"];
       $_camp_time=$row["camp_time"];
       $_camp_contact=$row["camp_contact"];
       
         
 
     
      
      
 ?>
        <form role="form" method="post" action="edit_camp1.php" enctype="multipart/form-data">
         <div class="odivc">
         <div class="col-lg-6 col-sm-6 col-12">
            <div class="campname">
              <span>NAME OF ORG-CAMP</span>
            <input type="text" class="cname" placeholder="campname" name="orgname" required  value="<?php echo $_camp_name; ?>" >
            </div>
          </div>
         
         <div class="col-lg-3 col-sm-3 col-12">
            <div class="campregdate">
            <span>REGISTRAION DATE</span>
            <input type="date" class="dateregcamp" name="creg_date" required  value="<?php echo $_camp_rdate; ?>" >
            </div>
         </div>
       
       <div class="col-lg-3 col-sm-3 col-12">
            <div class="campven">
            <span>VENUE DATE</span>
             <input type="date" class="campvendate" name="cvenue_date" required  value="<?php echo $_camp_vdate; ?>" >
            </div>
         </div>
        </div>


       <div class="sdivc">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="campemail">
              <span>CAMP EMAIL</span>
            <input type="email" class="campemailreg" placeholder="EMAIL" name="cmail"  value="<?php echo $_camp_org_email; ?>"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
          </div>
        </div>
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="campdistrictid">
              <span>ID</span>
            <input type="text"  class="campdistrictregid" name="camp_id" value="<?php echo $_pk_camp_id; ?>">
          </div>
         </div>
         <div class="col-lg-3 col-sm-4 col-12">
           <div class="campmob1">

            <span>CONTACT NO</span>
           <input type="text" class="campmobreg1" placeholder="MOBILE" name="ccon" pattern="^\d{10}$" required  value="<?php echo $_camp_contact; ?>" >
         </div>
       </div>
       </div>

        <div class="tdivc">
         <div class="col-lg-8 col-sm-6 col-12">
              <div class="campaddress">
                <span>VENUE OF THE CAMP</span>
              <textarea class="campaddressreg" name="cvenue" required   ><?php echo $_camp_location; ?></textarea>
         </div>
       </div>


         <div class="col-lg-4 col-sm-6 col-12">
              <div class="camptime"><br>
                <span>VENUE TIME</span>
              <input type="time" class="camptimeclass" name="cvenue_time"  value="<?php echo $_camp_time; ?>"  required>
         </div>
       </div>
       </div>
<div class="fidivc">
        <div class="col-lg-12 col-sm-12 col-12">

         <center><input type="submit" value="ADD CAMP"  name="submit" class="campregtable"></center>
        </div> 
       </div>
      
</form>
      
     </div>
   
   </div>
 </div>






 



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