

<?php
include('hospital_header.php');
?>

<div class="container">

<div class="row no-gutters">
    <div class="col-lg-12 col-sm-12 col-12 ad">
        <div class="admin"><br>
            <span>Chanage Password</span>
        </div>
        <form method="POST">
            <br><br>

           
            <span class="name">OLD PASSWORD :</span> <input name="txtolpass" type="password" class="oldpass" placeholder="  Enter Old Password"> <br><br>
           <span class="name">NEW PASSWORD :</span> <input  name="txtnewpass" type="password" class="newpass" placeholder="  Enter New Password"> <br><br>
            
            <span class="password">CONFIRM PASSWORD  : </span><input name="txtnewpass1" type="password" class="conpass" placeholder="   Enter Confirm Password"> <br><br>
           
            
            <input  type="submit" name="changepas" class="passbtn">  <span class="adminforget">
                    </form>

                    </div>
              </div>
        </div>
</div>

                 

 </form>
                                    <?php

$eml=$_SESSION['user_username'] ;

if(isset($_POST['changepas']))
{
$_newpass=$_POST["txtnewpass"];
$_oldpass=$_POST["txtolpass"];
$_conpass=$_POST["txtnewpass1"];

  if($_newpass==$_conpass){  
  $conn = new mysqli("localhost", "root", "", "bloodbank");
  $sql="select * from tbl_hospital where  hospital_email='".$eml."' and hospital_password='".$_oldpass."' ";

  $res=$conn->query($sql);
  if($res->num_rows==1)
  {
      $sql="update tbl_hospital set hospital_password='".$_newpass."' where   hospital_email='".$eml."' ";

      $res=$conn->query($sql);
        return $res;
  }

  else
  {
echo '<div class="alert alert-danger" role="alert">';

echo "Your old password is incorrect";
echo '</div>';
  }
}
else{
echo '<div class="alert alert-danger" role="alert">';

echo "Your new password and confirm password Didnot match";
echo '</div>';
}
}


?>

                                    </body>
                                    </html>