<?php 
session_start();
?>

<?php

 include('home_header.php');
?>
<!--header over-->

<div class="container">
   <div class="row no-gutters">
     <div class="orgde">
      <!-- <div class="hospitallogin"><br>
         <ul><li><a href="hospitallogin.html">Hospital Login</a></li></ul>
       </div>
      -->
        <form method="post">
         <div class="orgdivh">
         <div class="col-lg-12 col-sm-12 col-12">
            <div class="orgname">
              <span>Org Name</span>
            <input type="text" name="org_name"  class="orname" placeholder="Organization Name" required pattern="[a-zA-Z\s]+">
            </div>
          </div>
         
        <!-- <div class="col-lg-6 col-sm-6 col-12">
            <div class="hosregdate">
            <span>DOCTOR NAME</span>
            <input type="text" class="hosdateregcamp" placeholder="Doctor Name">
            </div>
         </div>
       -->
      <!-- <div class="col-lg-3 col-sm-3 col-12">
            <div class="campven">
            <span></span>
             <input type="date" class="campvendate">
            </div>
         </div>-->
        </div>


       <div class="sorgdivh">
         <div class="col-lg-6 col-sm-6 col-12">
            <div class="orgemail">
              <span>Email</span>
            <input type="email" name="org_email" class="oremail" placeholder="EMAIL" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
          </div>
        </div>
        <!-- <div class="col-lg-3 col-sm-4 col-12">
            <div class="hosdistrict">
              <span>CITY</span>
            <select class="hosdistrictreg">
                <option></option>

                <option>sdjhgd</option>
                <option>sdjhgd</option>
                <option>sdjhgd</option>
            </select>
          </div>
         </div>-->
         <div class="col-lg-6 col-sm-6 col-12">
           <div class="orgmob">

            <span>CONTACT NO</span>
           <input type="text" name="org_mob" class="ormob" placeholder="MOBILE" pattern="^\d{10}$" required>
         </div>
       </div>
       </div>

        <div class="torgdivh">
         <div class="col-lg-12 col-sm-12 col-12">
              <div class="orgaddress">
                <span>ADDRESS</span>
              <textarea name="org_add" class="oraddress" required></textarea>
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
      
       <div class="fiorgdivh">
        <div class="col-lg-12 col-sm-12 col-12">

         <center><input type="submit" name="submit" value="REGISTRATION" class="orgtable"></center>
        </div> 
       </div>
      </form>


     </div>
   
   </div>
 </div>
 <?php

class camp_registration {

public $org_name, $org_email, $org_mob, $org_add, $org_pass;

public function __construct() {
$this->org_name= $_POST['org_name'];
$this->org_email = $_POST['org_email'];
$this->org_mob= $_POST['org_mob'];
$this->org_add =$_POST['org_add'];
$this->alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
$this->pass = array(); //remember to declare $pass as an array
$this->alphaLength = strlen($this->alphabet) - 1; //put the length -1 in cache
for ($this->i = 0; $this->i < 8; $this->i++) {
$this->n = rand(0, $this->alphaLength);
$this->pass[] = $this->alphabet[$this->n];
}
$this->org_pass= implode($this->pass);


}

public function insertData() {

$this->conn = mysqli_connect("localhost", "root", "", "BloodBank");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
     $this->sql= mysqli_query($this->conn, "select org_email from tbl_organization where org_email='$this->org_email'");
                        if(mysqli_num_rows($this->sql)!=0)
                        {
                            
                             ?>  <div class="alert alert-warning">
  <strong>ERROR : :</strong>
  EMAIL ADDRESS ALREADY EXISTS
  </div> <?php
                          //  echo "Username already exists";
}
                        else{
                       
    
$this->sql="call pr_Organization('$this->org_name','$this->org_mob','$this->org_email','$this->org_pass','$this->org_add')";
if (mysqli_query($this->conn, $this->sql)) {
     include './Email.php';
                           $mail = new Email();
                         $mail->send("help.bloodbanksystem@gmail.com", "Registration successful", "Hello $this->org_name, <br><br> Your registration as organization is successful. <br> This is your login credential. <br> Username : $this->org_email <br> Password : $this->org_pass <br> <br>Thank you,<br> <br> Blood Bank ", $this->org_email);
                            
                          $ch = curl_init();
        $user = "soniya.daiict@gmail.com:sms123";
        $receipientno = $this->org_mob;
        $senderID = "TEST SMS";
        $msgtxt = "Registration successful! Username: $this->org_name \nPassword: '$this->org_pass' \nThank you";
        curl_setopt($ch, CURLOPT_URL, "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
        $buffer = curl_exec($ch);
        if (empty($buffer)) {
            //echo " buffer is empty ";
        } else {
          //  echo $buffer;
        }
        curl_close($ch);
    
    
    
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
}
if (isset($_POST['submit'])) {

$reg = new camp_registration();
$reg->insertData();
}
?>



<!--over-->
<div class="container">
   <div class="row no-gutters">
     <div class="col-lg-12 col-sm-12 col-12">
     <div class="footerregistration">
        <center>2019, BLOOD BANK MANAGEMENT SYSTEM , DA-IICT , GANDHINAGAR , INDIA...</center>
      </div>
     </div>
   </div>
</div>
<br>



</body>
</html>

