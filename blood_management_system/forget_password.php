<?php

 include('home_header.php');
?> 
<!--header over-->

<div class="container">
   <form method="POST">
   
   <div class="row no-gutters">
      <div class="col-lg-12 col-sm-12 col-12 ad">
       <div class="admin"><br>
        <span>FORGET PASSWORD</span>
      </div>
         
          <br><br>

                <span class="name">USER NAME :</span> <input type="email" class="user" name="username" placeholder="  Enter User Name"  required> <br><br>
                <select class="fortype" name="type">Type:</span> 
                    <option>-- Select --</option>
                    <option>Blood Bank</option>
                    <option>Donor</option>
                    <option>Organization</option>
                    <option>Hospital</option>
                    
                </select><br><br>

                <input type="submit" name="submit" value="Send" class="forbtn">  <span class="adminforget"></ul><span>
        
 
  
                                    <?php

                                    class User_login {

                                        public $username, $password,$type;
                                        //$_uname=$_POST["username"]; 
                                        public function __construct() {
                                            $this->username = $_POST["username"];
                                            $this->type=$_POST["type"];
                                            $this->alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                                            $this->pass = array(); //remember to declare $pass as an array
                                            $this->alphaLength = strlen($this->alphabet) - 1; //put the length -1 in cache
                            for ($this->i = 0; $this->i < 8; $this->i++) {
                                $this->n = rand(0, $this->alphaLength);
                                $this->pass[] = $this->alphabet[$this->n];
                            }
                            $this->password= implode($this->pass);
                                            
                                        }

                                        public function login() {

                                            $this->conn = mysqli_connect("localhost", "root", "", "BloodBank");
                                            if (mysqli_connect_errno()) {
                                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                            } else{
                                            include './Email.php';
                                                $mail = new Email();
                                              $mail->send("help.bloodbanksystem@gmail.com", "Password changed", "Hello, <br><br> Your password for $this->username is changed. <br> New password is: <br><br>   Username : $this->username <br> Password : $this->password <br> Thank you, <br> Blood Bank ", $this->username);
                                              
                                            
                                            
                                              if ($this->type=="Donor") {
                                                  ?>  <div class="alert alert-success">
                                                      <strong>SUCCESS :</strong>
                                                      SUCCESSFULLY CHANGED
                                                  </div> <?php
                                             
                                                $this->sql="update tbl_donor set donor_password='$this->password' where donor_email='$this->username'";
                                                mysqli_query($this->conn,$this->sql);

                                                 
                                              } 
                                              
                                              else{
                                                 if ($this->type=="Hospital") {
                                                   $this->sql = "select * from tbl_hospital where hospital_email='$this->username' ";
                                              $this->result = mysqli_query($this->conn, $this->sql);
                                              $this->count = mysqli_num_rows($this->result);
                                              if ($this->count == 1) {
                                                ?>  <div class="alert alert-success">
                                                    <strong>SUCCESS :</strong>
                                                    SUCCESSFULLY CHANGED
                                                </div> <?php
                                           
                                              $this->sql="update tbl_hospital set hospital_password='$this->password' where hospital_email='$this->username'";
                                              mysqli_query($this->conn,$this->sql);
                                               }
                                            } 
                                               else{
                                                 if ($this->type=="Blood Bank") {
                                                    $this->sql = "select * from tbl_blood_bank where bloodbank_email='$this->username' and bloodbank_password='$this->password'";
                                              $this->result = mysqli_query($this->conn, $this->sql);
                                              $this->count = mysqli_num_rows($this->result);
                                              if ($this->count == 1) {
                                                ?>  <div class="alert alert-success">
                                                    <strong>SUCCESS :</strong>
                                                    SUCCESSFULLY CHANGED
                                                </div> <?php
                                           
                                              $this->sql="update tbl_blood_bank set bloodbank_password='$this->password' where bloodbank_email='$this->username'";
                                              mysqli_query($this->conn,$this->sql);

                                               }
                                            } 
                                              else {
                                                 if ($this->type=="Organization") {
                                                    $this->sql = "select * from tbl_organization where org_email='$this->username' ";
                                                     $this->result = mysqli_query($this->conn, $this->sql);
                                              $this->count = mysqli_num_rows($this->result);
                                                    if ($this->count == 1) {
                                                        ?>  <div class="alert alert-success">
                                                            <strong>SUCCESS :</strong>
                                                            SUCCESSFULLY CHANGED
                                                        </div> <?php
                                                   
                                                      $this->sql="update tbl_organization set org_password='$this->password' where org_email='$this->username'";
                                                      mysqli_query($this->conn,$this->sql);
      
                                                       }
                                                    } 
                                               else {
                                         
                                                  


                                              }
                                              }
                                              }
                                              }


                                                
                                                
                                            
                                            }
                                        }

                                    }

                                    if (isset($_POST['submit'])) {


                                        $reg = new User_login();
                                        $reg->login();
                                    }
                                    ?>

   </div>
    </div>
  </div>
</form>
</div>

<div class="container">
   <div class="row no-gutters">
     <div class="col-lg-12 col-sm-12 col-12">
     <div class="footer">
        <center> 2019, BLOOD BANK MANAGEMENT SYSTEM , DA-IICT , GANDHINAGAR , GUJARAT..</center>

      </div>
     </div>
   </div>
</div>
<br>

</body>
</html>