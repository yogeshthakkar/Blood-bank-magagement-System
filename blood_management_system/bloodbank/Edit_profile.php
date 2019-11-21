<?php
  include('bloodbank_header.php');
?>
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
   
     $_pk_bloodbank_id=$_GET["id"];
  
  
     $_bloodbank_name="";
     $_add="";
     $_area="";

     $_contactno;
     

        $sql="select * from tbl_blood_bank where bloodbank_email="."'$_pk_bloodbank_id'";
        $result=$con->query($sql);
       $row=$result->fetch_assoc();
       $_hospital_name=$row["bloodbank_name"];
       $_add=$row["bloodbank_address"];
      
       $_area=$row["bloodbank_area"];

       $_contactno=$row["bloodbank_contact"];

   
    
    
?>
   
      
        <form role="form" method="post" action="edit_bloodbank1.php" enctype="multipart/form-data">
         <div class="odiv">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="donorname">
              <span>BLOOD BANK NAME</span>
            <input type="text" class="rname" name="txtbname" placeholder="Bank name" value="<?php echo $_hospital_name; ?>">
            </div>
          </div>
         <!--<div class="col-lg-3 col-sm-4 col-12">
            <div class="gender">
            <span>GENDER</span>
            <select class="radioreg">
                   <option>MALE</option>
                   <option>FEMALE</option>
                   <option>OTHERS</option>

            </select>
            </div>
         </div> 
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="birth">
            <span>DATE OF BIRTH</span>
            <input type="date" class="datereg">
            </div>
         </div>-->
       </div>
         
         
       <div class="sdiv">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="email">
              <span>EMAIL</span>
            <input type="email" class="emailreg" placeholder="EMAIL" value="<?php echo $_pk_bloodbank_id; ?>" name="txtbemail">
          </div>
        </div>
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="district">
              <span>AREA</span>
            <select class="districtreg" value="" name="txtarea">
                <option default> <?php echo $_area; ?></option>
             
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
                 
            </select>
          </div>
         </div>
         <div class="col-lg-3 col-sm-4 col-12">
           <div class="mob">

            <span>MOBILE NO</span>
           <input type="text" pattern="^\d{10}$" class="mobreg" placeholder="MOBILE" name="txtbmob" value="<?php echo $_contactno; ?>">
         </div>
       </div>
       </div>

        <div class="tdiv">
         <div class="col-lg-8 col-sm-6 col-12">
              <div class="address">
                <span>ADDRESS</span>
              <textarea class="addressreg" name="txtbaddress"><?php echo $_add; ?></textarea>
         </div>
       </div>
        <!-- <div class="col-lg-4 col-sm-6 col-12">
              <div class="group"><br>
                <span>BLOOD GROUP</span>
              <select class="groupreg">
                
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
       </div>-->
       </div>

<!--
       <div class="fdiv">
         <div class="col-lg-4 col-sm-4 col-12">
            <div class="dodate">
              <span>BLOOD DONATION DATE</span>
         <input type="date" class="donationreg">
         </div>
         </div> 

         <div class="col-lg-4 col-sm-4 col-12">
            <div class="mdono">
            <span>OPTION FOR DONATION</span>
            <select class="optionreg">
              <option>3</option>
              <option>6</option>
              <option>12</option>
            </select>
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

       <div class="fidiv">
        <div class="col-lg-12 col-sm-12 col-12">

         <center><input type="submit" value="UPDATE" class="regtable"></center>
        </div> 
       </div>
      </form>


     </div>
   
   </div>
 </div>



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