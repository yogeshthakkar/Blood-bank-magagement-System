<?php 

include('admin_header.php');

?>
<!---->
  <div class="container">
   <div class="row no-gutters">
     <div class="hospitalde">
        
        <form method="POST">
         <div class="odivh">
         <div class="col-lg-6 col-sm-6 col-12">
            <div class="hospitalname">
              <span>NAME OF HOSPITAL</span>
            <input type="text" class="hosname" placeholder="Hospital Name" pattern="[a-zA-Z\s]+" name="txthos_name" required> 
            </div>
          </div>
         
         <div class="col-lg-6 col-sm-6 col-12">
         <!--   <div class="hosregdate">
            <span>DOCTOR NAME</span>
            <input type="text" class="hosdateregcamp" placeholder="Doctor Name" name="txthead_name">
            </div>-->
         </div>
       
      <!-- <div class="col-lg-3 col-sm-3 col-12">
            <div class="campven">
            <span></span>
             <input type="date" class="campvendate">
            </div>
         </div>-->
        </div>


       <div class="sdivh">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="hosemail">
              <span>EMAIL</span>
            <input type="email" class="hosemailreg" placeholder="EMAIL" name="txthosemail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
          </div>
        </div>
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="hosdistrict">
              <span>AREA</span>
            <select class="hosdistrictreg" name="txthos_city" required >
                <option>select</option>
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
           <div class="hosmob">

            <span>CONTACT NO</span>
           <input type="text" class="hosmobreg" placeholder="MOBILE" name="txthos_num" pattern="^\d{10}$" required>
         </div>
       </div>
       </div>

        <div class="tdivh">
         <div class="col-lg-12 col-sm-12 col-12">
              <div class="hosaddress">
                <span>ADDRESS</span>
              <textarea class="hosaddressreg" name="txthos_add" placeholder="Address" required></textarea>
         </div>
       </div>


       <!--  <div class="col-lg-4 col-sm-6 col-12">
              <div class="camptime"><br>
                <span>VENUE TIME</span>
              <input type="time" class="camptimeclass">
         </div>
       </div>-->
       </div>


   <!--    <div class="fdivc">
         <div class="col-lg-6 col-sm-6 col-12">
            <div class="dodate">
              <span>VENUE DATE</span>
         <input type="date" class="donationreg">
         </div>
         </div> 

         <div class="col-lg-6 col-sm-6 col-12">
            <div class="mdono">
            <span>VENUE TIME</span>
            <input type="time" class="optionreg">
         </div>
       </div>
         <div class="col-lg-4 col-sm-4 col-12">
             <div class="reminder">
              <span>REMINDER SERVICE</span>
              <select class="reminderreg">
                 <option>EMAIL</option>
                 <option>SMS</option>
              </select>
         </div>
       </div>
     </div>-->
      
       <div class="fidivh">
        <div class="col-lg-12 col-sm-12 col-12">

         <center><input type="submit" name="submit" value="ADD HOSPITAL" class="hosregtable"></center>
        </div> 
       </div>
       <?php

       class hospital_registration{
       
           public $_name,$_pk_email,$_add,$_city,$_contactno,$password;
       
           public function __construct() {
               $this->_pk_email=$_POST["txthosemail"];
               $this->_name=$_POST["txthos_name"];
               $this->_add=$_POST["txthos_add"];
               $this->_city=$_POST["txthos_city"];
               $this->_contactno=$_POST["txthos_num"];
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
       
               $this->conn = mysqli_connect("localhost", "root", "", "bloodbank");
               if (mysqli_connect_errno()) {
                   echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
              else{
                          $this->sql="call  pr_hospital('$this->_name','$this->_pk_email','$this->_city','$this->_contactno','$this->_add','$this->password')";
                if (mysqli_query($this->conn, $this->sql)) {
                 ?>  <div class="alert alert-success">
       <strong>SUCCESS :</strong>
       SUCCESSFULLY REGISTERED
       </div> <?php
                              } else {
                   ?>  <div class="alert alert-warning">
       <strong>ERROR : :</strong>
       REGISTRATION FAILED
       </div><?php
              }
           }
          
       
       }
       }
       if (isset($_POST['submit'])) {
       
       $reg = new hospital_registration();
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