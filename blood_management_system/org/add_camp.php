<?php

 include('org_header.php');
?>

<div class="container">
   <div class="row no-gutters">
     <div class="campde">
      
        <form method="POST">
         <div class="odivc">
         <div class="col-lg-6 col-sm-6 col-12">
            <div class="campname">
              <span>NAME OF ORG-CAMP</span>
            <input type="text" class="cname" pattern="[a-zA-Z\s]+" placeholder="campname" name="orgname" required>
            </div>
          </div>
         
         <!-- <div class="col-lg-3 col-sm-3 col-12">
            <div class="campregdate">
            <span>REGISTRAION DATE</span>
            <input type="date" class="dateregcamp" name="creg_date" required>
            </div>
         </div> -->
       
       <div class="col-lg-3 col-sm-3 col-12">
            <div class="campven">
            <span>VENUE DATE</span>
             <input type="date" class="campvendate" name="cvenue_date" required>
            </div>
         </div>
        </div>


        <div class="sdivc">
        <!-- <div class="col-lg-6 col-sm-4 col-12">
            <div class="campemail">
              <span>CAMP EMAIL</span>
            <input type="email" class="campemailreg" placeholder="EMAIL" name="cmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
          </div>
        </div> -->
        <!-- <div class="col-lg-3 col-sm-4 col-12">
            <div class="campdistrict">
              <span>CITY</span>
            <select class="campdistrictreg" name="ccity">
                <option>select</option>
                <option></option>
                  
            </select>
          </div>
         </div>-->
         <div class="col-lg-3 col-sm-4 col-12">
           <div class="campmob">

            <span>CONTACT NO</span>
           <input type="text" class="campmobreg" placeholder="MOBILE" name="ccon"  pattern="^\d{10}$" required>
         </div>
       </div>
       </div>

        <div class="tdivc">
         <div class="col-lg-8 col-sm-6 col-12">
              <div class="campaddress">
                <span>VENUE OF THE CAMP</span>
              <textarea class="campaddressreg" name="cvenue" required></textarea>
         </div>
       </div>


         <div class="col-lg-4 col-sm-6 col-12">
              <div class="camptime"><br>
                <span>VENUE TIME</span>
              <input type="time" class="camptimeclass" name="cvenue_time" required>
         </div>
       </div>
       </div>
<div class="fidivc">
        <div class="col-lg-12 col-sm-12 col-12">

         <center><input type="submit" value="ADD CAMP"  name="submit" class="campregtable"></center>
        </div> 
       </div>
      

       <?php

           class camp_registration {

           public $camp_organization_name, $camp_email, $camp_venue, $camp_registration_date, $camp_city, $camp_venue_date, $camp_contact, $camp_venue_time;

           public function __construct() {
            $this->camp_organization_name  = $_POST['orgname'];
           $this->camp_email = $_SESSION['organ_username'];
           $this->camp_venue = $_POST['cvenue'];
           $this->camp_registration_date = date('Y-m-d');
            
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
           $this->sql="call pr_camp('$this->camp_organization_name','$this->camp_email','$this->camp_venue_date','$this->camp_registration_date','$this->camp_venue','$this->camp_venue_time','$this->camp_contact')";
           if (mysqli_query($this->conn, $this->sql)) {
              $this->sql2="select * from tbl_donor";
              $this->result2= mysqli_query($this->conn, $this->sql2);
              while($this->row2=mysqli_fetch_assoc($this->result2)){
                include './Email.php';
                           $mail = new Email();
                         $mail->send("help.bloodbanksystem@gmail.com", "New Blood Camp", "Hello $this->row['donor_name'], <br><br>New blood donation camp has being organized. <br>It's the time again when you can save a life. <br>Details of camps are as follows.<br><br>Camp name: $this->camp_organization_name <br>Camp venue: $this->camp_venue<br>Date: $this->camp_venue_date<br>Time: $this->camp_venue_time<br>Contact no: $this->camp_contact<br><br> DONATE BLOOD, SAVE A LIFE!</b> <br><br> Thank you, <br> Blood Bank ", $this->row['donor_email']);
                            
                          $ch = curl_init();
        $user = "soniya.daiict@gmail.com:sms123";
        $receipientno = $this->org_mob;
        $senderID = "TEST SMS";
        $msgtxt = "New Blood Camp!\nDetails:\nCamp name: $this->camp_organization_name \nCamp venue: $this->camp_venue\nDate: $this->camp_venue_date\nTime: $this->camp_venue_time\nContact no: $this->camp_contact\n DONATE BLOOD, SAVE A LIFE!   \nThank you";
        curl_setopt($ch, CURLOPT_URL, "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
        $buffer = curl_exec($ch);
        if (empty($buffer)) {
            echo " buffer is empty ";
        } else {
            echo $buffer;
        }
        curl_close($ch);
              }

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