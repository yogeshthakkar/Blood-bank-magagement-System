<?php
 include('hospital_header.php');
?>

<div class="container">
   <div class="row no-gutters">
     <div class="hospitalde">
      <!-- <div class="hospitallogin"><br>
         <ul><li><a href="hospitallogin.html">Hospital Login</a></li></ul>
       </div>
      -->
        <form>
         <div class="odivh">
         <div class="col-lg-6 col-sm-6 col-12">
            <div class="hospitalname">
              <span>NAME OF HOSPITAL</span>
            <input type="text" class="hosname" placeholder="Hospital Name">
            </div>
          </div>
         
         <div class="col-lg-6 col-sm-6 col-12">
            <div class="hosregdate">
            <span>DOCTOR NAME</span>
            <input type="text" class="hosdateregcamp" placeholder="Doctor Name">
            </div>
         </div>
       
      <!-- <div class="col-lg-3 col-sm-3 col-12">
            <div class="campven">
            <span></span>
             <input type="date" class="campvendate">
            </div>
         </div>-->
        </div>


       <div class="sdivh">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="hosemail">
              <span>EMAIL</span>
            <input type="email" class="hosemailreg" placeholder="EMAIL">
          </div>
        </div>
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="hosdistrict">
              <span>CITY</span>
            <select class="hosdistrictreg">
                <option></option>

                <option>sdjhgd</option>
                <option>sdjhgd</option>
                <option>sdjhgd</option>
            </select>
          </div>
         </div>
         <div class="col-lg-3 col-sm-4 col-12">
           <div class="hosmob">

            <span>CONTACT NO</span>
           <input type="number" class="hosmobreg" placeholder="MOBILE">
         </div>
       </div>
       </div>

        <div class="tdivh">
         <div class="col-lg-12 col-sm-12 col-12">
              <div class="hosaddress">
                <span>ADDRESS</span>
              <textarea class="hosaddressreg"></textarea>
         </div>
       </div>


       <!--  <div class="col-lg-4 col-sm-6 col-12">
              <div class="camptime"><br>
                <span>VENUE TIME</span>
              <input type="time" class="camptimeclass">
         </div>
       </div>-->
       </div>


   <!--    <div class="fdivc">
         <div class="col-lg-6 col-sm-6 col-12">
            <div class="dodate">
              <span>VENUE DATE</span>
         <input type="date" class="donationreg">
         </div>
         </div> 

         <div class="col-lg-6 col-sm-6 col-12">
            <div class="mdono">
            <span>VENUE TIME</span>
            <input type="time" class="optionreg">
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
      
       <div class="fidivh">
        <div class="col-lg-12 col-sm-12 col-12">

         <center><input type="submit" value="UPDATE" class="hosregtable"></center>
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

</body>
</html>                                                                                             