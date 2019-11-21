<?php 
session_start();
?>

<?php

 include('home_header.php');
?>
<!--header over-->

<div class="container">
   <div class="row no-gutters">
     <div class="orgde">
      <!-- <div class="hospitallogin"><br>
         <ul><li><a href="hospitallogin.html">Hospital Login</a></li></ul>
       </div>
      -->
        <form method="post">
         <div class="orgdivh">
         <div class="col-lg-12 col-sm-12 col-12">
            <div class="orgname">
              <span>Org Name</span>
            <input type="text" name="org_name"  class="orname" placeholder="Organization Name" required>
            </div>
          </div>
         
        <!-- <div class="col-lg-6 col-sm-6 col-12">
            <div class="hosregdate">
            <span>DOCTOR NAME</span>
            <input type="text" class="hosdateregcamp" placeholder="Doctor Name">
            </div>
         </div>
       -->
      <!-- <div class="col-lg-3 col-sm-3 col-12">
            <div class="campven">
            <span></span>
             <input type="date" class="campvendate">
            </div>
         </div>-->
        </div>


       <div class="sorgdivh">
         <div class="col-lg-6 col-sm-6 col-12">
            <div class="orgemail">
              <span>Email</span>
            <input type="email" name="org_email" class="oremail" placeholder="EMAIL" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
          </div>
        </div>
        <!-- <div class="col-lg-3 col-sm-4 col-12">
            <div class="hosdistrict">
              <span>CITY</span>
            <select class="hosdistrictreg">
                <option></option>

                <option>sdjhgd</option>
                <option>sdjhgd</option>
                <option>sdjhgd</option>
            </select>
          </div>
         </div>-->
         <div class="col-lg-6 col-sm-6 col-12">
           <div class="orgmob">

            <span>CONTACT NO</span>
           <input type="text" name="org_mob" class="ormob" placeholder="MOBILE" pattern="^\d{10}$" required>
         </div>
       </div>
       </div>

        <div class="torgdivh">
         <div class="col-lg-12 col-sm-12 col-12">
              <div class="orgaddress">
                <span>ADDRESS</span>
              <textarea name="org_add" class="oraddress" required></textarea>
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
      
       <div class="fiorgdivh">
        <div class="col-lg-12 col-sm-12 col-12">

         <center><input type="submit" name="submit" value="REGISTRATION" class="orgtable"></center>
        </div> 
       </div>
      </form>


     </div>
   
   </div>
 </div>



<!--over-->
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



</body>
</html>

