<?php
 include('bloodbank_header.php');
?>

<div class="container">
   <div class="row no-gutters">
     <div class="bregis">

      
     <?php
	 
   //if($_SERVER["REQUEST_METHOD"]=="POST")
   //{
       $con=new mysqli("localhost","root","","bloodbank");
       if($con->connect_error)
       {
           echo "something went wrong";
       }
   
     $_pk_blood_id=$_GET["id"];
  

     $_group="";
     $_givendate="";
     $_D_id;
     

        $sql="select * from tbl_blood where blood_id="."'$_pk_blood_id'";
        $result=$con->query($sql);
       $row=$result->fetch_assoc();
       $_group=$row["blood_group"];;
       $_givendate=$row["blood_givenDate"];
       $_D_id=$row["blood_donor_email"];
      

   
    
    
?>





     <form role="form" method="post" action="edit_blood1.php" enctype="multipart/form-data">
         <div class="odiv">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="bloodname">
              <span>BLOOD ID</span>
            <input type="text" class="bname" placeholder="name" name="bid" value="<?php echo $_pk_blood_id; ?>">
            </div>
          </div>
         <!-- <div class="col-lg-3 col-sm-4 col-12">
            <div class="gender">
            <span>GENDER</span>
            <select class="radioreg">
                   <option>MALE</option>
                   <option>FEMALE</option>
                   <option>OTHERS</option>

            </select>
            </div>
         </div>  -->
         <!-- <div class="col-lg-3 col-sm-4 col-12">
            <div class="birth">
            <span>DATE OF BIRTH</span>
            <input type="date" class="datereg">
            </div>
         </div>
       </div>
          -->
       </div>  
       <div class="sdiv">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="bloodemail">
              <span>BLOOD GROUP</span>
             
              <select  class="bemailreg"  name="bgroup"  placeholder="EMAIL">
                <option><?php echo $_group; ?></option>
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
         <!-- <div class="col-lg-3 col-sm-4 col-12">
            <div class="district">
              <span>CITY</span>
            <select class="districtreg">
                <option>sdjhgd</option>

                <option>sdjhgd</option>
                <option>sdjhgd</option>
                <option>sdjhgd</option>
            </select>
          </div>
         </div> -->
         <div class="col-lg-3 col-sm-4 col-12">
           <div class="bloodmob">

            <span>GIVEN DATE</span>
           <input type="text" class="bmobreg" name="bdate" value="<?php echo $_givendate; ?>" placeholder="MOBILE">
         </div>
       </div>
       </div>

        <div class="tdiv">
         <div class="col-lg-8 col-sm-6 col-12">
              <div class="bloodaddress">
                <span>Donor_ID</span>
                <input type="text" name="bdid" value="<?php echo $_D_id; ?>" class="baddressreg" >
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
       </div>
       </div>


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
       </div> -->
       </div>
       <div class="fidiv">
        <div class="col-lg-12 col-sm-12 col-12">

         <center><input type="submit" value="UPDATE" class="bregtable"></center>
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