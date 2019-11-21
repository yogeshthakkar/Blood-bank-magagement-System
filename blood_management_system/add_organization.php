<?php 

include('admin_header.php');

?>

<!--add camp-->

<div class="container">
   <div class="row no-gutters">
     <div class="organizationde">
      
        <form method="POST">
         <div class="odivc">
         <div class="col-lg-6 col-sm-6 col-12">
            <div class="organame">
              <span>NAME OF ORGANIZATION</span>
            <input type="text" class="orname" placeholder="Organization Name" name="orgname" pattern="[a-zA-Z\s]+" required>
            </div>
          </div>
        <!-- 
         <div class="col-lg-3 col-sm-3 col-12">
            <div class="campregdate">
            <span>REGISTRAION DATE</span>
            <input type="date" class="dateregcamp" name="creg_date">
            </div>
         </div>
       
       <div class="col-lg-3 col-sm-3 col-12">
            <div class="campven">
            <span>VENUE DATE</span>
             <input type="date" class="campvendate" name="cvenue_date">
            </div>
         </div>-->
        </div>


       <div class="sdivc">
         <div class="col-lg-6 col-sm-6 col-12">
            <div class="orgemail">
              <span>ORGANIZATION EMAIL</span>
            <input type="email" class="oemailreg" placeholder="EMAIL" name="orgemail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
          </div>
        </div>
         
         <div class="col-lg-6 col-sm-6 col-12">
           <div class="orgmob">

            <span>CONTACT NO</span>
           <input type="text" class="omobreg" placeholder="MOBILE" name="orgmobile" pattern="^\d{10}$" required>
         </div>
       </div>
       </div>

        <div class="tdivc">
         <div class="col-lg-8 col-sm-6 col-12">
              <div class="orgaddress">
                <span>ADDRESS</span>
              <textarea class="oaddressreg" name="orgaddress" placeholder="Address" required></textarea>
         </div>
       </div>


         <!--<div class="col-lg-4 col-sm-6 col-12">
         
            <div class="camptime"><br>
                <span>VENUE TIME</span>
              <input type="time" class="camptimeclass" name="cvenue_time">
         </div>
       </div>-->
       </div>
<div class="fidivc">
        <div class="col-lg-12 col-sm-12 col-12">

         <center><input type="submit" value="ADD ORGANIZATION"  name="submit" class="oregtable"></center>
        </div> 
       </div>
      

       <?php

           class camp_registration {

           public $camp_organization_name, $camp_email, $camp_address, $camp_contact;

           public function __construct() {
           $this->camp_organization_name = $_POST['orgname'];
           $this->camp_email = $_POST['orgemail'];
           $this->camp_address= $_POST['orgaddress'];
           $this->camp_contact= $_POST['orgmobile'];
          

           $this->alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
           $this->pass = array(); //remember to declare $pass as an array
           $this->alphaLength = strlen($this->alphabet) - 1; //put the length -1 in cache
           for ($this->i = 0; $this->i < 8; $this->i++) {
           $this->n = rand(0, $this->alphaLength);
           $this->pass[] = $this->alphabet[$this->n];
           }
           $this->d_pass= implode($this->pass);
           // echo $this->d_pass;
           //turn the array into a string
           }

           public function insertData() {

           $this->conn = mysqli_connect("localhost", "root", "", "BloodBank");
           if (mysqli_connect_errno()) {
           echo "Failed to connect to MySQL: " . mysqli_connect_error();
           }
           else{
           $this->sql="call pr_Organization('$this->camp_organization_name','$this->camp_contact','$this->camp_email','$this->d_pass','$this->camp_address')";
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

           $reg = new camp_registration();
           $reg->insertData();
           }
           ?>

     </div>
   
   </div>
 </div>
</form>





 



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