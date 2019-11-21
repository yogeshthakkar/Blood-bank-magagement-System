

<?php 

include('admin_header.php');

?>
















<!---->


<div class="container">
   <div class="row no-gutters">
     <div class="regis">
            <?php
   
     //if($_SERVER["REQUEST_METHOD"]=="POST")
     //{
         $con=new mysqli("localhost","root","","bloodbank");
         if($con->connect_error)
         {
             echo "something went wrong";
         }
     
       $_pk_donor_id=$_GET["id"];
    
    
       $_donor_name="";
     $_donor_gender="";
     $_donor_dob="";
     $_donor_city="";
     $_donor_area="";
     $_donor_address="";
     $_donor_contact="";
     $_donor_blood_group="";
     $_donation_date="";
     $_donor_service="";
     $_donor_donation_months="";
       
    $sql="select * from tbl_donor where   donor_email="."'$_pk_donor_id'";
  
          $result=$con->query($sql);
         $row=$result->fetch_assoc();
       
       
      $_donor_gender=$row["donor_gender"];
      $_donor_name=$row["donor_name"];
       $_donor_dob=$row["donor_dob"];
       $_donor_city=$row["donor_city"];
       $_donor_area=$row["donor_area"];
       $_donor_address=$row["donor_address"];
       $_donor_contact=$row["donor_contact"];
       $_donor_blood_group=$row["donor_blood_group"];
       $_donation_date=$row["donation_date"];
       $_donor_service=$row["donor_service"];
       $_donor_donation_months=$row["donor_donation_months"];
       
         
 
     
      
      
 ?>

      
         <form role="form" method="post" action="edit_donor1.php" enctype="multipart/form-data">
         <div class="odiv">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="donorname">
              <span>NAME OF DONOR</span>
            <input type="text" class="rname" placeholder="name" name="txthos_donor_name" value="<?php echo $_donor_name; ?>" >
            </div>
          </div>
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="gender">
            <span>GENDER</span>
            <select class="radioreg" name="txthos_donor_gender">
                   <option> <?php echo $_donor_gender; ?></option>
                 
                   <option>MALE</option>
                   <option>FEMALE</option>
                   <option>OTHERS</option>

            </select>
            </div>
         </div> 
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="birth">
            <span>DATE OF BIRTH</span>
            <input type="date" class="datereg"  name="txthos_donor_dob" value="<?php echo $_donor_dob; ?>">
            </div>
         </div>
       </div>
         
         
       <div class="sdiv">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="email">
              <span>EMAIL</span>
            <input type="email" class="emailreg"  name="txthosemail" value="<?php echo $_pk_donor_id; ?>" placeholder="EMAIL" >
          </div>
        </div>
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="district">
              <span>CITY</span> 
            <select class="districtreg"  name="txthos_donor_city" >
                <option><?php echo $_donor_city; ?></option>

                <option>Gandhinagar</option>
              </select>
          </div>
         </div>
         <div class="col-lg-3 col-sm-4 col-12">
           <div class="mob">

            <span>MOBILE NO</span>
           <input type="text" class="mobreg" placeholder="MOBILE" value="<?php echo $_donor_contact; ?>"  name="txthos_donor_contact">
         </div>
       </div>
       </div>

        <div class="tdiv">
         <div class="col-lg-8 col-sm-6 col-12">
              <div class="address">
                <span>ADDRESS</span>
              <textarea class="addressreg" name="txthos_donor_address"><?php echo $_donor_address; ?></textarea>
         </div>
       </div>
         <div class="col-lg-4 col-sm-6 col-12">
              <div class="group"><br>
                <span>BLOOD GROUP</span>
              <select class="groupreg" name="txthos_donor_blood_group">
                <option><?php echo $_donor_blood_group?></option>
                
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>O+</option>
                <option>O-</option>

                <option>AB+</option>
                <option>AB-</option>
              </select>
         </div>
       </div>
       </div>


       <div class="fdiv">
         <div class="col-lg-3 col-sm-6 col-md-3 col-12">
            <div class="dodate">
              <span>BLOOD DONATION DATE</span>
         <input type="date" class="donationreg" name="txthos_donation_date" required value="<?php echo $_donation_date; ?>">
         </div>
         </div> 

         <div class="col-lg-3 col-md-3 col-sm-6 col-12">
            <div class="mdono">
            <span>OPTION FOR DONATION</span>
            <select class="optionreg"  name="txthos_donor_donation_months" required   >
             <option><?php echo $_donor_donation_months; ?></option>
                 
              <option>3</option>
              <option>6</option>
              <option>12</option>
            </select>
         </div>
       </div>
         <div class="col-lg-3 col-sm-6 col-md-3 col-12">
             <div class="reminder">
              <span>REMINDER SERVICE</span>
              <select class="reminderreg"  name="txthos_donor_service" required>
                 <option><?php echo $_donor_service; ?></option>
                 
                 <option>EMAIL</option>
                 <option>SMS</option>
              </select>
         </div>
       </div>

       
         <div class="col-lg-3 col-sm-6 col-md-3 col-12">
             <div class="area">
              <span>AREA</span>
              <select class="areaset" name="txthos_donor_area" required>
                 <option value="default"><?php echo $_donor_area; ?></option>
                <option>Sector 1</option>
                  <option>Sector 2</option>
                  <option>Sector 3</option>
                  <option>Sector 4</option>
                  <option>Sector 5</option>
                  <option>Sector 6</option>
                  <option>Sector 7</option>
                  <option>Sector 8</option>
                  <option>Sector 9</option>
                  <option>Sector 10</option>
                  <option>Sector 11</option>
                  <option>Sector 12</option>
                  <option>Sector 13</option>
                  <option>Sector 14</option>
                  <option>Sector 15</option>
                  <option>Sector 16</option>
                  <option>Sector 17</option>
                  <option>Sector 18</option>
                  <option>Sector 19</option>
                  <option>Sector 20</option>
                  <option>Sector 21</option>
                  <option>Sector 22</option>
                  <option>Sector 23</option>
                  <option>Sector 24</option>
                  <option>Sector 25</option>
                  <option>Sector 26</option>
                  <option>Sector 27</option>
               
                 </select>
         </div>
       </div>



       </div>
       <div class="fidiv">
        <div class="col-lg-12 col-sm-12 col-12">

         <center><input type="submit" name="submit" value="UPDATE" class="regtable"></center>
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