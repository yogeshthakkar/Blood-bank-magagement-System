

<?php 
session_start();
?>
<?php
 include('home_header.php');
?>
   <form method="POST">
            <div class="container">
           
                <div class="row no-gutters">
                    <div class="col-lg-12 col-sm-12 col-12 ad">
                        <div class="admin"><br>
                            <span>ADMINSTRATION LOGIN</span>
                        </div>
                        
                            <br><br>

                            <span class="name">USERNAME :</span> <input name="username" type="email" class="user" placeholder="  Enter Username"> <br><br>
                            <span class="password"> PASSWORD  : </span><input name="password" type="password" class="pass" placeholder="   Enter Password"> <br><br>
                            <input type="submit" value="LOGIN"  name="submit" class="btn">  <span class="adminforget">  <ul><li><a href="admin_forget_password.php  "> Forget Password ?</a></li></ul><span>

                                  
                                    <?php
                                  class Admin_login {
       
           public $username,$password;
       
           public function __construct() {
               $this->username=$_POST["username"];
               $this->password=$_POST["password"];
               $_SESSION['admin_username']= $this->username;
               
               
           }
          
       
           public function login() {
       
               $this->conn = mysqli_connect("localhost", "root", "", "BloodBank");
               if (mysqli_connect_errno()) {
                   echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
              else{
                    
                   $this->sql="select * from tbl_admin where admin_email='$this->username' and admin_password='$this->password'";
                   $this->result= mysqli_query($this->conn, $this->sql);
                   $this->count= mysqli_num_rows($this->result);
                   if($this->count==1){
                        ?>  <div class="alert alert-success">
       <strong>SUCCESS :</strong>
       SUCCESSFULLY LOGGED IN
       </div> <?php
     
       echo '<script>window.location.href = "admin/admin_home.php";</script>';
                   }
                   else{
                        ?>  <div cl•ass="alert alert-warning">
       <strong>ERROR : :</strong>
       LOGIN FAILED
       </div> <br><br><?php
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
          
       
       }*/
       }
           }
                                  }
                                  
           
       if (isset($_POST['submit'])) {
           
       
       $reg = new Admin_login();
       $reg->login();
       }
     
       ?>
                                    </div>
                                    </div>
             
                                    </div>
                                    </div>
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


                                

                                    </form>
                                    </body>
                                    </html>