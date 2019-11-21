<?php

  include('org_header.php');
?>
    
     <?php
   
   //if($_SERVER["REQUEST_METHOD"]=="POST")
   //{
       $con=new mysqli("localhost","root","","bloodbank");
       if($con->connect_error)
       {
           echo "something went wrong";
       }
   
     $_pk_org_id=$_GET["id"];
  

     $_org_name="";
     $_add="";
     $_contactno;
     

        $sql="select * from tbl_organization where org_email="."'$_pk_org_id'";
        $result=$con->query($sql);
       $row=$result->fetch_assoc();
       $_org_name=$row["org_name"];
       $_contactno=$row["org_contact"];
      $_add=$row["org_address"];
       
   
    
    
?>

     <form role="form" method="post" action="org_edit1.php" enctype="multipart/form-data">
<div class="container">
   <div class="row no-gutters">
     <div class="orgde">
      
        
         <div class="odivc">
         <div class="col-lg-6 col-sm-6 col-12">
            <div class="oname">
              <span>NAME OF ORGANIZATION</span>
            <input type="text" class="orgname" placeholder="Organization Name" name="txtorgname" value="<?php echo $_org_name; ?>">
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
            <input type="email" class="orgemailreg" placeholder="EMAIL" name="txtorgemail"  value="<?php echo $_pk_org_id; ?>">
          </div>
        </div>

         <div class="col-lg-6 col-sm-6 col-12">
           <div class="orgmob">

            <span>CONTACT NO</span>
           <input type="text" class="orgmobreg" placeholder="MOBILE" name="txtorgmob" value="<?php echo $_contactno; ?>">
         </div>
       </div>
       </div>

        <div class="tdivc">
         <div class="col-lg-8 col-sm-6 col-12">
           
              <div class="orgaddress">
                <span>ADDRESS</span>
              <textarea class="orgaddressreg" name="txtorgadd" placeholder="Address"> <?php  echo $_add; ?> </textarea>
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

         <center><input type="submit" value="UPDATE ORGANIZATION"  name="submit" class="orgregtable"></center>
        </div> 
       </div>
      
</from>
      <!-- <?php

           class camp_registration {

           public $camp_organization_name, $camp_email, $camp_venue, $camp_registration_date, $camp_city, $camp_venue_date, $camp_contact, $camp_venue_time;

           public function __construct() {
           $this->camp_organization_name = $_POST['orgname'];
           $this->camp_email = $_POST['cmail'];
           $this->camp_venue = $_POST['cvenue'];
           $this->camp_registration_date = $_POST['creg_date'];
           $this->camp_city = $_POST['ccity'];
           $this->camp_venue_date= $_POST['cvenue_date'];
           $this->camp_contact= $_POST['ccon'];
           $this->camp_venue_time= $_POST['cvenue_time'];
          

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
           $this->sql="call pr_camp('$this->camp_organization_name','$this->camp_email','$this->camp_venue','$this->camp_registration_date','$this->camp_city','$this->camp_venue_date','$this->camp_contact','$this->camp_venue_time')";
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

-->




 



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