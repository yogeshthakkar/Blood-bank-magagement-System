<?php
  include('user_header.php');

?>
<!--sidebar-->

<div class="container">
   <div class="row no-gutters">
     <div class="regis">
 <?php
   
     //if($_SERVER["REQUEST_METHOD"]=="POST")
     //{
         $con=new mysqli("localhost","root","","bloodbank");
         if($con->connect_error)
         {
             echo "something went wrong";
         }
     
       $_pk_donor_id=$_GET["id"];
    
    
       $_donor_name="";
     $_donor_gender="";
     $_donor_dob="";
     $_donor_city="";
     $_donor_area="";
     $_donor_address="";
     $_donor_contact="";
     $_donor_blood_group="";
     $_donation_date="";
     $_donor_service="";
     $_donor_donation_months="";
       
    $sql="select * from tbl_donor where   donor_email="."'$_pk_donor_id'";
  
          $result=$con->query($sql);
         $row=$result->fetch_assoc();
       
       
      $_donor_gender=$row["donor_gender"];
      $_donor_name=$row["donor_name"];
       $_donor_dob=$row["donor_dob"];
       $_donor_city=$row["donor_city"];
       $_donor_area=$row["donor_area"];
       $_donor_address=$row["donor_address"];
       $_donor_contact=$row["donor_contact"];
       $_donor_blood_group=$row["donor_blood_group"];
       $_donation_date=$row["donation_date"];
       $_donor_service=$row["donor_service"];
       $_donor_donation_months=$row["donor_donation_months"];
       
         
 
     
      
      
 ?>

      
         <form role="form" method="post" action="edit_user1.php" enctype="multipart/form-data">
         <div class="odiv">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="donorname">
              <span>NAME OF DONOR</span>
            <input type="text" class="rname" placeholder="name" name="txthos_donor_name" value="<?php echo $_donor_name; ?>" >
            </div>
          </div>
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="gender">
            <span>GENDER</span>
            <select class="radioreg" name="txthos_donor_gender" value="<?php echo $_donor_gender; ?>">
                   <option>MALE</option>
                   <option>FEMALE</option>
                   <option>OTHERS</option>

            </select>
            </div>
         </div> 
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="birth">
            <span>DATE OF BIRTH</span>
            <input type="date" class="datereg" name="txthos_donor_dob" value="<?php echo $_donor_dob; ?>">
            </div>
         </div>
       </div>
         
         
       <div class="sdiv">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="email">
              <span>EMAIL</span>
            <input type="email" class="emailreg" name="txthosemail" placeholder="EMAIL" value="<?php echo $_pk_donor_id; ?>">
          </div>
        </div>
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="district">
              <span>CITY</span>
            <select class="districtreg" name="txthos_donor_city" value="<?php echo $_donor_city; ?>">
                <option>gandhinagar</option>

            </select>
          </div>
         </div>
         <div class="col-lg-3 col-sm-4 col-12">
           <div class="mob">

            <span>MOBILE NO</span>
           <input type="number" class="mobreg" name="txthos_donor_contact" placeholder="MOBILE" value="<?php echo $_donor_contact; ?>">
         </div>
       </div>
       </div>

        <div class="tdiv">
         <div class="col-lg-8 col-sm-6 col-12">
              <div class="address">
                <span>ADDRESS</span>
              <textarea class="addressreg" name="txthos_donor_address"><?php echo $_donor_address; ?></textarea>
         </div>
       </div>
         <div class="col-lg-4 col-sm-6 col-12">
              <div class="group"><br>
                <span>BLOOD GROUP</span>
              <select class="groupreg" name="txthos_donor_blood_group">
                <option><?php echo $_donor_blood_group?></option>
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
         <input type="date" class="donationreg" name="txthos_donation_date" required value="<?php echo $_donation_date; ?>">
         </div>
         </div> 

         <div class="col-lg-3 col-sm-6 col-12">
            <div class="mdono">
            <span>OPTION FOR DONATION</span>
            <select class="optionreg"  name="txthos_donor_donation_months"  value="<?php echo $_donor_donation_months; ?>" required>
              <option> <?php echo $_donor_donation_months; ?></option>
              <option>3</option>
              <option>6</option>
              <option>12</option>
            </select>
         </div>
       </div>
         <div class="col-lg-3 col-sm-6 col-12">
             <div class="reminder"   required>
              <span>REMINDER SERVICE</span>
              <select class="reminderreg"  name="txthos_donor_service">
                <option><?php echo $_donor_service; ?></option>
                 <option>EMAIL</option>
                 <option>SMS</option>
              </select>
         </div>
       </div>
       <div class="col-lg-3 col-sm-6 col-12">
             <div class="area" name="d_area">
              <span>AREA</span>
              <select class="areaset" required  name="txthos_donor_area">
                  <option><?php echo $_donor_area; ?></option>
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
                 
              </select>
         </div>
       </div>
                        
  </div>
       <div class="fidiv">
        <div class="col-lg-12 col-sm-12 col-12">

         <center><input type="submit" value="Edit Profile" class="regtable"></center>
        </div> 
       </div>
      </form>


     </div>
   
   </div>
 </div>



<!--
 <div class="openprofile" id="clpro" >

   <div class="setproimage">
      <i class="fa fa-times" id="setfaicon" onclick="closepro()"></i>

        <img src="image/d.png"><br>
    <ul><li><a href="">Edit Profile</a></li></ul>
   </div>
   
    <div>
    <table  class="setprocon">
    <tr><span><td>NAME  </td><td>sdwsfew</td></span></tr>  
    <tr><span><td>EMAIL </td><td>ededew</td></span></tr>
    <tr><span><td>MOBILE </td><td>wdd</td></span></tr>
     <tr><span><td>GENDER </td><td>wed</td></span></tr>
    <tr><span><td>BLOOD GROUP </td><td>dwe</td></span></tr>
    <tr><span><td>CITY </td><td>wde</td></span></tr>
    <tr><span><td>ADDRESS </td><td>wdw</td></span></tr>
   <tr><span><td> DOB  </td><td>ewdw</td></span></tr>
 
  </table>

  </div>

</div>
-->
<script>
$(document).ready(function(){
    $('#showpro').click(function() {
      $('.openprofile').toggle("slide");
    });
});
function closepro() {
  document.getElementById("clpro").style.display = "none";
}
</script>



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