<?php

 include('home_header.php');
?>
<!--header over-->

<div class="container">
   <div class="row no-gutters">
     <div class="hospitalde">
      <!-- <div class="hospitallogin"><br>
         <ul><li><a href="hospitallogin.html">Hospital Login</a></li></ul>
       </div>
      -->
        <form method="POST">
         <div class="odivh">
         <div class="col-lg-6 col-sm-6 col-12">
            <div class="hospitalname">
              <span>NAME OF HOSPITAL</span>
            <input type="text" class="hosname" name="txthos_name"  placeholder="Hospital Name" required pattern="[a-zA-Z\s]+">
            </div>
          </div>
         
         <div class="col-lg-6 col-sm-6 col-12">
            <div class="hosregdate">
            <span>AREA</span>
            <select class="hosdateregcamp"  name="txthos_area" placeholder="Area Name" required>
                     <option disabled>--Select--</option>
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
       
      <!-- <div class="col-lg-3 col-sm-3 col-12">
            <div class="campven">
            <span></span>
             <input type="date" class="campvendate">
            </div>
         </div>-->
        </div>


       <div class="sdivh">
         <div class="col-lg-6 col-sm-6 col-12">
            <div class="hosemail">
              <span>EMAIL</span>
            <input type="email" name="txthosemail" class="hosemailreg" placeholder="EMAIL" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
          </div>
        </div>
      
         <div class="col-lg-6 col-sm-6 col-12">
           <div class="hosmob">

            <span>CONTACT NO</span>
           <input type="text" name="txthos_num"  class="hosmobreg" placeholder="MOBILE" pattern="^\d{10}$" required>
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

         <center><input type="submit" name="submit" value="REGISTRATION" class="hosregtable"></center>
        </div> 
       </div>
          <?php

class hospital_registration {

    public $_name,$_pk_email,$_add,$_area,$_contactno,$password;

    public function __construct() {
        $this->_pk_email=$_POST["txthosemail"];
      
        $this->_name=$_POST["txthos_name"];
        $this->_add=$_POST["txthos_add"];
        $this->_area=$_POST["txthos_area"];
       
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

        $this->conn = mysqli_connect("localhost", "root", "", "BloodBank");
        
        if (mysqli_connect_errno()) 
        {
          
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
       else
       {
            $this->sql= mysqli_query($this->conn, "select hospital_email from tbl_hospital where hospital_email='$this->_pk_email'");
                        if(mysqli_num_rows($this->sql)!=0)
                        {
                             ?>  <div class="alert alert-warning">
  <strong>ERROR : :</strong>
  EMAIL ADDRESS ALREADY EXISTS
  </div> <?php
                          //  echo "Username already exists";
}
                        else{
                       
        $this->sql="call  pr_hospital('$this->_name','$this->_pk_email','$this->_area','$this->_contactno','$this->_add','$this->password')";
       
                   if (mysqli_query($this->conn, $this->sql))
                    {
//                       echo $this->sql;
                         include './Email.php';
                           $mail = new Email();
                         $mail->send("help.bloodbanksystem@gmail.com", "Registration successful", "Hello $this->_name, <br><br> Your registration for Hospital is successful. <br> This is your login credential. <br> Username : $this->_pk_email <br> Password : $this->password <br> Thank you,<br> <br> Blood Bank ", $this->_pk_email);
                            
                          $ch = curl_init();
        $user = "soniya.daiict@gmail.com:sms123";
        $receipientno = $this->_contactno;
        $senderID = "TEST SMS";
        $msgtxt = "Registration successful! Username: $this->_name \nPassword: '$this->password' \nThank you";
        curl_setopt($ch, CURLOPT_URL, "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
        $buffer = curl_exec($ch);
        if (empty($buffer)) {
            // echo " buffer is empty ";
        } else {
            // echo $buffer;
        }
        curl_close($ch);
          ?>  
          <div class="alert alert-success">
<strong>SUCCESS :</strong>
SUCCESSFULLY REGISTERED
</div> <?php
                       } else {
                           echo 'FAILED';
                        
            ?>  <?php
       }
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

<!--over-->
<div class="container">
   <div class="row no-gutters">
     <div class="col-lg-12 col-sm-12 col-12">
     <div class="footerregistration">
        <center>2019, BLOOD BANK MANAGEMENT SYSTEM , DA-IICT , GANDHINAGAR , GUJARAT..</center>
      </div>
     </div>
   </div>
</div>
<br>



</body>
</html>

