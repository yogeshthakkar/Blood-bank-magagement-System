<?php 
session_start();

?>
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
              <span>NAME OF DONOR</span>
            <input type="text" class="rname" placeholder="name" name="d_name"  pattern="[a-zA-Z\s]+" required>
            </div>
          </div>
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="gender" >
            <span>GENDER</span>
            <select class="radioreg" required name="d_gender">
                   <option disabled>-- Select --</option>
                   <option>MALE</option>
                   <option>FEMALE</option>
                   <option>OTHERS</option>

            </select>
            </div>
         </div> 
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="birth">
            <span>DATE OF BIRTH</span>
            <input type="date" class="datereg" name="d_dob" required>
            </div>
         </div>
       </div>
         
         
       <div class="sdiv">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="email">
              <span>EMAIL</span>
            <input type="email" class="emailreg" placeholder="EMAIL" name="d_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
          </div>
        </div>
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="district">
              <span>CITY</span>
            <select class="districtreg" name="d_city" required>
                <option disabled>-- select --</option>
                <option>Gandhinagar</option>
            </select>
          </div>
         </div>
         <div class="col-lg-3 col-sm-4 col-12">
           <div class="mob">

            <span>MOBILE NO</span>
           <input type="text" class="mobreg" placeholder="MOBILE" name="d_mob" pattern="^\d{10}$" required>
         </div>
       </div>
       </div>

        <div class="tdiv">
         <div class="col-lg-8 col-sm-6 col-12">
              <div class="address">
                <span>ADDRESS</span>
              <textarea class="addressreg" name="d_address" placeholder="Address" required></textarea>
         </div>
       </div>
         <div class="col-lg-4 col-sm-6 col-12">
              <div class="group"><br>
                <span>BLOOD GROUP</span>
              <select class="groupreg" name="d_bgroup" required>
                <option disabled>-- Select -- </option>
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
         <div class="col-lg-3 col-sm-6 col-12">
            <div class="dodate">
              <span>BLOOD DONATION DATE</span>
         <input type="date" class="donationreg" name="d_donation_date" required>
         </div>
         </div> 

         <div class="col-lg-3 col-sm-6 col-12">
            <div class="mdono">
            <span>OPTION FOR DONATION</span>
            <select class="optionreg"  name="d_validity" required>
              <option disabled>-- In Months --</option>
              <option>3</option>
              <option>6</option>
              <option>12</option>
            </select>
         </div>
       </div>
         <div class="col-lg-3 col-sm-6 col-12">
             <div class="reminder" required>
              <span>REMINDER SERVICE</span>
              <select class="reminderreg" name="d_reminder" >
                <option disabled>-- Select --</option>

                 <option>EMAIL</option>
                 <option>SMS</option>
                 <option>BOTH</option>
              </select>
         </div>
       </div>
       <div class="col-lg-3 col-sm-6 col-12">
             <div class="area" >
              <span>AREA</span>
              <select class="areaset" required name="d_area">
                  <option disabled>-- Select --</option>
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
                        
  </div>
       <div class="fidiv">
        <div class="col-lg-12 col-sm-12 col-12">

         <center><input type="submit" name="submit" value="REGISTRATION" class="regtable"></center>
        </div> 
       </div>
      

       

         <?php

            class Donor_registration {

                public $d_pass,$d_name, $d_gender, $d_dob, $d_email, $d_city, $d_mob, $d_address, $d_bgroup, $d_donation_date, $d_validity, $d_reminder;

                public function __construct() {
                    $this->d_name = $_POST["d_name"];
                    $this->d_gender = $_POST['d_gender'];
                    $this->d_dob = $_POST['d_dob'];
                    $this->d_email = $_POST['d_email'];
                    $this->d_city = $_POST['d_city'];
                    $this->d_mob = $_POST['d_mob'];
                    $this->d_address = $_POST['d_address'];
                    $this->d_bgroup = $_POST['d_bgroup'];
                    $this->d_donation_date = $_POST['d_donation_date'];
                    $this->d_validity = $_POST['d_validity'];
                    $this->d_reminder = $_POST['d_reminder'];
                    $this->d_area = $_POST['d_area'];
                    $this->alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                    $this->pass = array(); //remember to declare $pass as an array
                    $this->alphaLength = strlen($this->alphabet) - 1; //put the length -1 in cache
    for ($this->i = 0; $this->i < 8; $this->i++) {
        $this->n = rand(0, $this->alphaLength);
        $this->pass[] = $this->alphabet[$this->n];
    }
    $this->d_pass= implode($this->pass);
  //  echo "Const";
}

                public function insertData() {
                   // echo "INS";
                    $this->conn = mysqli_connect("localhost", "root", "", "BloodBank");
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
                   else{
                       $this->sql= mysqli_query($this->conn, "select donor_email from tbl_donor where donor_email='$this->d_email'");
                        if(mysqli_num_rows($this->sql)!=0)
                        {
                             ?>  <div class="alert alert-warning">
  <strong>ERROR : :</strong>
  EMAIL ADDRESS ALREADY EXISTS
  </div> <?php
                          //  echo "Username already exists";
}
                        else{
                          $d_dob=$this->d_dob;
                          $today = date("Y-m-d");
                          $diff = date_diff(date_create($d_dob), date_create($today));
                          $age=$diff->format('%y');
                        
                          if($age > 18)
                       {
                        $this->sql="call pr_donor('$this->d_name','$this->d_gender','$this->d_dob','$this->d_email','$this->d_city','$this->d_area','$this->d_address','$this->d_mob','$this->d_bgroup','$this->d_donation_date','$this->d_validity','$this->d_reminder','$this->d_pass')";
                      
                        if (mysqli_query($this->conn, $this->sql)) {
                           include './Email.php';
                           $mail = new Email();
                         $mail->send("help.bloodbanksystem@gmail.com", "Registration successful", "Hello $this->d_name, <br><br> Your registration for blood donation is successful. <br> This is your login credential. <br> Username : $this->d_email <br> Password : $this->d_pass <br> Thank you, <br> Blood Bank ", $this->d_email);
                            
                          $ch = curl_init();
        $user = "soniya.daiict@gmail.com:sms123";
        $receipientno = $this->d_mob;
        $senderID = "TEST SMS";
        $msgtxt = "Registration successful! Username: $this->d_name  \nPassword: '$this->d_pass' \nThank you";
        curl_setopt($ch, CURLOPT_URL, "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
        $buffer = curl_exec($ch);
        if (empty($buffer)) {
            echo " buffer is empty ";
        } else {
            // echo $buffer;
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
                else{
                  ?>
                  <div class="alert alert-warning">
  <strong>ERROR : :</strong>
  Age MUST BE MORE THAN 18
  </div>
                  <?php
                }
                
              }

            }
            }
            }
            if (isset($_POST['submit'])) {

               
           $reg = new Donor_registration();
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

