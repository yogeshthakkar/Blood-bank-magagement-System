<?php 

include('admin_header.php');

?>





<!---->


<div class="container">
   <div class="row no-gutters">
     <div class="regis">
      
        <form method="POST">
         <div class="odiv">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="donorname">
              <span>RECIPIENT NAME</span>
            <input type="text" class="rname" placeholder="Name" name="r_name" required pattern="[a-zA-Z\s]+">
            </div>
          </div>
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="gender">
            <span>GENDER</span>
            <select class="radioreg" name="r_gender" required>
                   <option>-- Select --</option>
                 
                   <option>MALE</option>
                   <option>FEMALE</option>
                   <option>OTHERS</option>

            </select>
            </div>
         </div> 
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="birth">
            <span>RELATION</span>
            <input type="text" class="reedatereg" name="r_relation" required>
            </div>
         </div>
       </div>
         
         
       <div class="sdiv">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="email">
              <span>HOSPITAL NAME</span>
            <input type="text" class="reemailreg" placeholder="Hospital Name" name="r_hospital" required>
          </div>
        </div>
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="district">
              <span>AREA</span> 
            <select class="districtreg" name="r_area" required>
                <option>-- Select --</option>
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
              </select>
          </div>
         </div>
         <div class="col-lg-3 col-sm-4 col-12">
           <div class="mob">

            <span>MOBILE NO</span>
           <input type="text" class="mobreg" placeholder="MOBILE" name="r_mob" pattern="^\d{10}$" required>
         </div>
       </div>
       </div>

        <div class="tdiv">
         <div class="col-lg-8 col-sm-6 col-12">
              <div class="address">
                <span>ADDRESS</span>
              <textarea class="addressreg" name="r_address" required></textarea>
         </div>
       </div>
         <div class="col-lg-4 col-sm-6 col-12">
              <div class="group"><br>
                <span>BLOOD GROUP</span>
              <select class="groupreg" name="r_bgroup" required>
                <option>-- Select --</option>
                
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
         <!--<div class="col-lg-4 col-sm-6 col-12">
            <div class="dodate">
              <span>HOSPITAL NAME</span>
         <input type="text" class="donationreg" name="r_hname">
         </div>
         </div> -->
        
         <div class="col-lg-6 col-sm-6 col-12">
            <div class="remdono">
            <span>DOCTOR NAME</span>
            <input type="text" class="reoptionreg" name="r_dname" required pattern="[a-zA-Z\s]+">
         </div>
       </div>
       <div class="col-lg-6 col-sm-6 col-12"></div>
         <!--<div class="col-lg-4 col-sm-4 col-12">
             <div class="reminder">
              <span>REMINDER SERVICE</span>
              <select class="reminderreg" name="d_reminder">
                 <option>-- Select --</option>
                 
                 <option>EMAIL</option>
                 <option>SMS</option>
              </select>
         </div>
       </div>-->
       </div>
       <div class="fidiv">
        <div class="col-lg-12 col-sm-12 col-12">

         <center><input type="submit" name="submit" value="ADD DONOR" class="regtable"></center>
        </div> 
       </div>
       <?php
class recipient {

public $_name,$_add,$_area,$_contactno,$password,$_gender,$_relation,$_pname,$_hname,$_bgroup,$_dname;

public function __construct() {

    $this->_name=$_POST["txtrec_name"];
    $this->_gender=$_POST["txtrec_gender"];

    $this->_add=$_POST["txtrec_address"];
    $this->_area=$_POST["txtrec_area"];
    $this->_relation=$_POST["txtrec_relation"];
    $this->_pname = $_POST["txtrec_patient"];
    $this->_hname = $_POST["txtrec_hospital"];
    $this->_bgroup = $_POST["txtrec_bgroup"];
    $this->_contactno=$_POST["txtrec_mob"];
    $this->_dname = $_POST["txtrec_doctor"];
    $this->alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $this->pass = array(); //remember to declare $pass as an array
    $this->alphaLength = strlen($this->alphabet) - 1; //put the length -1 in cache
for ($this->i = 0; $this->i < 8; $this->i++) {
$this->n = rand(0, $this->alphaLength);
$this->pass[] = $this->alphabet[$this->n];
}
$this->password= implode($this->pass);
   
}

public function insertData() {

    $this->conn = mysqli_connect("localhost", "root", "", "BloodBank");
    
    if (mysqli_connect_errno()) 
    {
      
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
   else
   {
    $this->sql="call  pr_recipient('$this->_name','$this->_gender','$this->_bgroup','$this->_contactno','$this->_area','$this->_add','$this->_relation','$this->_hname','$this->_dname','$this->password')";

               if (mysqli_query($this->conn, $this->sql))
                {
                   
      ?>  
      <div class="alert alert-success">
<strong>SUCCESS :</strong>
SUCCESSFULLY REGISTERED
</div> <?php
                   } else {
                       echo $this->sql;
                    
        ?>  <?php
   }
}


}
}
if (isset($_POST['submit'])) {

$reg = new recipient();
$reg->insertData();
}
?>
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