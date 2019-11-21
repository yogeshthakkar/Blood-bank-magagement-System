<?php 

include('admin_header.php');

?>









<!---->



<div class="container">
   
   <div class="row no-gutters">
      <div class="col-lg-12 col-sm-12 col-12 ad">
       <div class="admin"><br>
        <?php
   
     //if($_SERVER["REQUEST_METHOD"]=="POST")
     //{
         $con=new mysqli("localhost","root","","bloodbank");
         if($con->connect_error)
         {
             echo "something went wrong";
         }
     
       $_pk_admin_id=$_GET["id"];
    
    
       $_admin_name="";
       $_contactno="";
       
  
          $sql="select * from tbl_admin where   admin_email="."'$_pk_admin_id'";
          $result=$con->query($sql);
         $row=$result->fetch_assoc();
         $_admin_name=$row["admin_name"];
         
         $_contactno=$row["admin_contact"];
 
     
      
      
 ?> 
        <span>UPDATE ADMIN</span>
      </div>
         <form role="form" method="post" action="edit_admin1.php" enctype="multipart/form-data">
          <br><br>

                <span class="nameadmin">NAME :</span> <input type="name" class="nadmin" value="<?php echo $_admin_name; ?>" placeholder="  Enter User Name" required="" name="admin_name"> <br><br>
                <span class="useradmin"> USER NAME  : </span><input type="email"  value="<?php echo $_pk_admin_id; ?>" class="uadmin" placeholder="   Enter Email" required="" name="admin_email"> <br><br>
                 <span class="passwordadmin"> Contact : </span><input type="text" value="<?php echo $_contactno; ?>" class="padmin" placeholder=" Mobile Number" required="" name="contact_num"> <br><br>
                 
                <input type="submit" value="UPDATE" class="btn"> <!-- <span class="adminforget"><ul><li><a href="#"> Forget Password ?</a></li></ul><span>
--> 

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