<?php

 include('home_header.php');
?> 
<!--header over-->

<div class="container">
   <div class="row no-gutters">
     <div class="campde">
      
        <form>
         <div class="odivc">
         <div class="col-lg-6 col-sm-6 col-12">
            <div class="campname">
              <span>NAME OF ORGANIZER</span>
            <input type="text" class="orgname" placeholder="campname" name="orgname"  pattern="[a-zA-Z]*" required>
            </div>
          </div>
         
         <div class="col-lg-3 col-sm-3 col-12">
            <div class="campregdate">
            <span>REGISTRAION DATE</span>
            <input type="date" class="dateregcamp" name="creg_date"  required>
            </div>
         </div>
       
       <div class="col-lg-3 col-sm-3 col-12">
            <div class="campven">
            <span>VENUE DATE</span>
             <input type="date" class="campvendate" name="cvenue_date"  required>
            </div>
         </div>
        </div>


       <div class="sdivc">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="campemail">
              <span>CAMP EMAIL</span>
            <input type="email" class="campemailreg" placeholder="EMAIL" name="cmail"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
          </div>
        </div>
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="campdistrict">
              <span>CITY</span>
            <select class="campdistrictreg" name="ccity" required>
                <option>select</option>

            </select>
          </div>
         </div>
         <div class="col-lg-3 col-sm-4 col-12">
           <div class="campmob">

            <span>CONTACT NO</span>
           <input type="number" class="campmobreg" placeholder="MOBILE" name="ccon" pattern="^\d{10}$" required>
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
      
       <div class="fidivc">
        <div class="col-lg-12 col-sm-12 col-12">

         <center><input type="submit" value="REGISTRATION" name="submit"  class="campregtable"></center>
        </div> 
       </div>
      </form>
    <?php

           class camp_registration {

           public $camp_organization_name, $camp_email, $camp_venue, $camp_registration_date, $camp_city, $camp_venue_date, $camp_contact, $camp_venue_time;

           public function __construct() {
           $this->camp_organization_email = $_POST["cmail"];
           $this->camp_name = $_POST["orgname"];
           $this->camp_location= $_POST["cvenue"];
           $this->camp_registration_date =$_POST["creg_date"];
           $this->camp_venue_date= $_POST["cvenue_date"];
           $this->camp_venue_time= $_POST["cvenue_time"];
           $this->camp_contact= $_POST["ccon"];
           $this->camp_city = $_POST["ccity"];
          
           }

           public function insertData() {

           $this->conn = mysqli_connect("localhost", "root", "", "BloodBank");
           if (mysqli_connect_errno()) {
           echo "Failed to connect to MySQL: " . mysqli_connect_error();
           }
           else{
           $this->sql="call pr_camp('$this->camp_name','$this->camp_organization_email','$this->camp_venue_date','$this->camp_registration_date','$this->camp_location','$this->camp_venue_time','$this->camp_contact')";
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

<!--over-->
<div class="container">
   <div class="row no-gutters">
     <div class="col-lg-12 col-sm-12 col-12">
     <div class="footerregistration">
        <center>2019, BLOOD BANK MANAGEMENT SYSTEM , DA-IICT , GANDHINAGAR , INDIA..</center>
      </div>
     </div>
   </div>
</div>
<br>



</body>
</html>

