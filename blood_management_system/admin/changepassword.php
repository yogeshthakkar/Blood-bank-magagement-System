

<?php

session_start();
include('admin_header.php');
?>

<div class="container">

<div class="row no-gutters">
    <div class="col-lg-12 col-sm-12 col-12 chad">
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

$eml=$_SESSION['admin_username'] ;
if(isset($_POST['changepas']))
{
$_newpass=$_POST["txtnewpass"];
$_oldpass=$_POST["txtolpass"];
$_conpass=$_POST["txtnewpass1"];
if($_newpass==$_conpass)
{    
$conn = new mysqli("localhost", "root", "", "bloodbank");
  $sql="select * from tbl_admin  where  admin_email='".$eml."' and admin_password='".$_oldpass."' ";

  $res=$conn->query($sql);
  if($res->num_rows==1)
  {
      $sql="update tbl_admin set admin_password='".$_newpass."' where   admin_email='".$eml."' ";

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