<?php

 include('home_header.php');
?>
<!--header over-->

<div class="container">
   <div class="row no-gutters">
     <div class="regis">

       <!--<div class="donorlogin"><br>
         <ul><li><a href="donorlogin.html">Donor Login</a></li></ul>
       </div>
      -->
        <form method="POST">
         <div class="odiv">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="donorname">
              <span>NAME OF RECIPIENT</span>
            <input type="text" class="reciname" placeholder="name" name="txtrec_name" required pattern="[a-zA-Z\s]+">
            </div>
          </div>
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="gender">
            <span>GENDER OF PATIENT</span>
            <select class="radioreg" name="txtrec_gender">
                   <option disabled>-- Select -- </option>
                   <option>MALE</option>
                   <option>FEMALE</option>
                   <option>OTHERS</option>

            </select>
            </div>
         </div> 
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="relation">
            <span>RELATION</span>
            <input type="text" class="relationset" placeholder="Relation" pattern="[a-zA-Z]*" required name="txtrec_relation">
            </div>
         </div>
       </div>
         
         
       <div class="sdiv">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="patientname">
              <span>PATIENT NAME</span>
            <input type="text" class="pname" placeholder="Patient Name" pattern="[a-zA-Z\s]+" required name="txtrec_patient">
          </div>
        </div>
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="district">
              <span>AREA</span>
            <select class="districtreg" name="txtrec_area">
             <option disabled>select</option>
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
                <option>Sector 28</option>
                <option>Sector 29</option>
                <option>Sector 30</option>
                
            </select>
          </div>
         </div>
         <div class="col-lg-3 col-sm-4 col-12">
           <div class="mob">

            <span>MOBILE NO</span>
           <input type="text" class="mobreg" placeholder="MOBILE" pattern="^\d{10}$" required name="txtrec_mob">
         </div>
       </div>
       </div>

        <div class="tdiv">
         <div class="col-lg-8 col-sm-6 col-12">
              <div class="address" >
                <span>ADDRESS</span>
              <textarea class="addressreg" placeholder="Address" name="txtrec_address"></textarea>
         </div>
       </div>
         <div class="col-lg-4 col-sm-6 col-12">
              <div class="group"><br>
                <span>BLOOD GROUP</span>
              <select class="groupreg" name="txtrec_bgroup">
                <option disabled >-- Select --</option>
                
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
         <div class="col-lg-6 col-sm-6 col-12">
            <div class="docname">
              <span>NAME OF DOCTOR</span>
         <input type="text" class="setdoc" placeholder="Doctor Name"  pattern="[a-zA-Z\s]+" required name="txtrec_doctor">
         </div>
         </div> 

         <div class="col-lg-6 col-sm-6 col-12">
            <div class="hosname">
            <span>NAME OF HOSPITAL</span>
          <input type="text" class="sethos" placeholder="Hospital Name" pattern="[a-zA-Z\s]+" required name="txtrec_hospital">
         </div>
       </div>
         <!--<div class="col-lg-4 col-sm-4 col-12">
             <div class="reminder">
              <span>EMAIL</span>
              <input type="email" class="setemail" /> 
         </div>
       </div>-->
       </div>
       <div class="fidiv">
        <div class="col-lg-12 col-sm-12 col-12">

         <center><input type="submit" name="submit" value="REGISTRATION" class="regtable"></center>
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
    $this->sql="call  pr_recipient('$this->_name','$this->_gender','$this->_bgroup','$this->_contactno','$this->_area','$this->_add','$this->_relation','$this->_hname','$this->_dname','0','$this->_pname')";

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

<!--over-->
<div class="container">
   <div class="row no-gutters">
     <div class="col-lg-12 col-sm-12 col-12">
     <div class="footerregistration">
        <center> 2019, BLOOD BANK MANAGEMENT SYSTEM , DA-IICT , GANDHINAGAR , GUJARAT...</center>
      </div>
     </div>
   </div>
</div>
<br>



</body>
</html>

