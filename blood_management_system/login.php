<?php
session_start();
?>

<?php
include('home_header.php');

?>

            <div class="container">

                <div class="row no-gutters">
                    <div class="col-lg-12 col-sm-12 col-12 ad">
                        <div class="admin"><br>
                            <span>LOGIN</span>
                        </div>
                        <form method="POST">
                            <br><br>

                            <span class="name">USERNAME :</span> <input name="username" type="email" class="user" placeholder="  Enter Username"> <br><br>
                            <span class="password"> PASSWORD  : </span><input name="password" type="password" class="pass" placeholder="   Enter Password"> <br><br>
                            <select class="lgtype" name="lgtype">Type
                            <option>-- Select --</option>
                            <option value="Blood Bank">Blood Bank</option>
                            <option value="Hospital">Hospital</option>
                            <option value="Organization">Organization</option>
                            <option value="Donor">Donor</option></select><br><br>
                            
                            <input name="submit" type="submit" value="LOG IN" class="btn">  <span class="adminforget"><ul><li><a href="forget_password.php"> Forget Password ?</a></li></ul><span>
                                    </form>

                                    </div>
                                    </div>
                                    </div>
                                    </div>

                                    <?php

                                    class User_login {

                                        public $username, $password;

                                        public function __construct() {
                                            $this->username = $_POST["username"];
                                            $this->password = $_POST["password"];
                                            $this->lgtype=$_POST["lgtype"];
                                            $_SESSION['user_username'] = $this->username;
                                        }

                                        public function login() {
                                            
                                            $this->conn = mysqli_connect("localhost", "root", "", "BloodBank");
                                            if (mysqli_connect_errno()) {
                                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                            } 
                                            if($this->lgtype == 'Donor'){

                                                $this->sql = "select * from tbl_donor where donor_email='$this->username' and donor_password='$this->password'";
                                                
                                                $this->result = mysqli_query($this->conn, $this->sql);
                                                $this->count = mysqli_num_rows($this->result);
                                              
                                                if ($this->count == 1) {
                                                    ?>  <div class="alert alert-success">
                                                        <strong>SUCCESS :</strong>
                                                        SUCCESSFULLY LOGGED IN
                                                    </div> <?php
                                                    $_SESSION['donor_username']= $this->username;
                                                    echo '<script>window.location.href = "user/user.php";</script>';
                                                } 
                                            }
                                        
                                                if($this->lgtype == 'Hospital'){
                                                                                                        $this->sql = "select * from tbl_hospital where hospital_email='$this->username' and hospital_password='$this->password'";
                                                $this->result = mysqli_query($this->conn, $this->sql);
                                                $this->count = mysqli_num_rows($this->result);
                                                if ($this->count == 1) {
                                                    ?>  <div class="alert alert-success">
                                                        <strong>SUCCESS :</strong>
                                                        SUCCESSFULLY LOGGED IN
                                                    </div> <?php
                                                    $_SESSION['hospital_username']= $this->username;
                                                    echo '<script>window.location.href = "hospital/hospital.php";</script>';
                                                }
                                             }
                                        
                                              if($this->lgtype =='Blood Bank'){
                                                      $this->sql = "select * from tbl_blood_bank where bloodbank_email='$this->username' and bloodbank_password='$this->password'";
                                                $this->result = mysqli_query($this->conn, $this->sql);
                                                $this->count = mysqli_num_rows($this->result);
                                                if ($this->count == 1) {
                                                    ?>  <div class="alert alert-success">
                                                        <strong>SUCCESS :</strong>
                                                        SUCCESSFULLY LOGGED IN
                                                    </div> <?php
                                                    $_SESSION['bloodbank_username']= $this->username;
                                                   echo '<script>window.location.href = "bloodbank/bloodbank.php";</script>';
                                                }
                                             }
                                           
                                             if($this->lgtype =='Organization'){
                                                      $this->sql = "select * from tbl_organization where org_email='$this->username' and org_password='$this->password'";
                                                $this->result = mysqli_query($this->conn, $this->sql);
                                                $this->count = mysqli_num_rows($this->result);
                                                if ($this->count == 1) {
                                                    ?>  <div class="alert alert-success">
                                                        <strong>SUCCESS :</strong>
                                                        SUCCESSFULLY LOGGED IN
                                                    </div> <?php
                                                    $_SESSION['organ_username']= $this->username;
                                                    //echo  $_SESSION['org_username'];
                                                  echo '<script>window.location.href = "org/org_home.php";</script>';
                                                }
                                             }
                                          
                                            }
                                                }
                                                
                                                


                                                /*
                                                  $this->sql="call  pr_hospital('$this->_name','$this->_pk_email','$this->password','$this->_add','$this->_head','$this->_city','$this->_contactno')";
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


                                                  } */
                                            
                                        

                                    

                                    if (isset($_POST['submit'])) {


                                        $reg = new User_login();
                                        $reg->login();
                                    }
                                    ?>




<div class="container">
   <div class="row no-gutters">
     <div class="col-lg-12 col-sm-12 col-12">
     <div class="footerregistration">
        <center>2019, BLOOD BANK MANAGEMENT SYSTEM , DA-IICT , GANDHINAGAR , GUJARAT...</center>
      </div>
     </div>
   </div>
</div>
<br>
 </form>
                                    </body>
                                    </html>