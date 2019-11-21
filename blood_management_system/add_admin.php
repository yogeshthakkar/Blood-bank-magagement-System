<?php 

include('admin_header.php');

?>









<!---->



<div class="container">
   
   <div class="row no-gutters">
      <div class="col-lg-12 col-sm-12 col-12 ad">
       <div class="admin"><br>
        <span>ADD ADMIN</span>
      </div>
         <form method="POST" action="">
          <br><br>

                <span class="nameadmin">NAME :</span> <input type="name" class="nadmin" placeholder="  Enter User Name" required="" name="admin_name" pattern="[a-zA-Z\s]+" required> <br><br>
                <span class="useradmin"> USER NAME  : </span><input type="email" class="uadmin" placeholder="   Enter Email" required="" name="admin_email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"> <br><br>
                 <span class="passwordadmin"> Contact : </span><input type="text" class="padmin" placeholder=" Mobile Number" required="" name="admin_contact" pattern="[0-9]*"> <br><br>
                 
                <input type="submit" value="ADD ADMIN" name="submit" class="btn"> <!-- <span class="adminforget"><ul><li><a href="#"> Forget Password ?</a></li></ul><span>
--> 
        <?php

        class Admin_registration {

            public $admin_name, $admin_email, $admin_contact, $admin_pass, $admin_con_pass, $admin_status;

            public function __construct() {
                $this->admin_name = $_POST['admin_name'];
                $this->admin_email = $_POST['admin_email'];
                $this->admin_contact = $_POST['admin_contact'];

                $this->admin_status = "1";

                $this->alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                $this->pass = array(); //remember to declare $pass as an array
                $this->alphaLength = strlen($this->alphabet) - 1; //put the length -1 in cache
                for ($this->i = 0; $this->i < 8; $this->i++) {
                    $this->n = rand(0, $this->alphaLength);
                    $this->pass[] = $this->alphabet[$this->n];
                }
                $this->admin_pass = implode($this->pass);
                // echo $this->d_pass;
                //turn the array into a string
            }

            public function insertData() {

                $this->conn = mysqli_connect("localhost", "root", "", "BloodBank");
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                } else {

                    $this->sql = "call pr_admin('$this->admin_name','$this->admin_contact','$this->admin_email','$this->admin_pass','$this->admin_status')";
                  
                    if (mysqli_query($this->conn, $this->sql)) {
                        include ('Email.php');

                        $this->e = new Email();
                        $this->e->send("help.bloodbanksystem@gmail.com", "Registration", "Hello, You're successfully registered as an admin", $this->admin_email);
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
          
//                         include './Email.php';
//                           $mail = new Email();
//                         $mail->send("help.bloodbanksystem@gmail.com", "Registration successful", "Hello $this->_name, <br><br> Your registration for blood donation is successful. <br> This is your login credential. <br> Username : $this->_pk_email <br> Password : $this->password <br> Thank you, <br> Blood Bank ", $this->_pk_email);
//                            
//                          $ch = curl_init();
//        $user = "soniya.daiict@gmail.com:sms123";
//        $receipientno = $this->_contactno;
//        $senderID = "TEST SMS";
//        $msgtxt = "Registration successful! Username: $this->_name \nPassword: '$this->password' \nThank you";
//        curl_setopt($ch, CURLOPT_URL, "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
//        $buffer = curl_exec($ch);
//        if (empty($buffer)) {
//            echo " buffer is empty ";
//        } else {
//            echo $buffer;
//        }
//        curl_close($ch);

            $reg = new Admin_registration();
            $reg->insertData();

        }
        ?>


         </form>
 
     </div>
    </div>
  </div>
  <br><br>




<!---->
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