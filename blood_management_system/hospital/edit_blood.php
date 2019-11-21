

<?php 

include('hospital_header.php');

?>
















<!---->


<div class="container">
   <div class="row no-gutters">
     <div class="bloodregis">
      
        <form method="POST">
         <div class="odiv">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="bloodname">
              <span>NAME</span>
            <input type="text" class="blood_name" placeholder="name" name="d_name" pattern="[a-zA-Z]*" required>
            </div>
          </div>
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="bloodgender">
            <span>GENDER</span>
            <select class="blood_radioreg" name="blood_gender" required>
                   <option>-- Select --</option>
                 
                   <option>MALE</option>
                   <option>FEMALE</option>
                   <option>OTHERS</option>

            </select>
            </div>
         </div> 
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="blooddob">
            <span>ID</span>
            <input type="date" class="blood_datereg" name="blood_dob" required>
            </div>
         </div>
       </div>
         
         
       <div class="sdiv">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="bloodemail">
              <span>EMAIL</span>
            <input type="email" class="blood_emailreg" placeholder="EMAIL" name="blood_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
          </div>
        </div>
        <!-- <div class="col-lg-3 col-sm-4 col-12">
            <div class="district">
              <span>CITY</span> 
            <select class="districtreg" name="d_city" required>
                <option>-- Select --</option>

                <option>Gandhinagar</option>
              </select>
          </div>
         </div>-->
         <div class="col-lg-3 col-sm-4 col-12">
           <div class="bloodmob">

            <span>MOBILE NO</span>
           <input type="text" class="blood_mobreg" placeholder="MOBILE" name="blood_mob" pattern="^\d{10}$" required>
         </div>
       </div>
       </div>

        <div class="tdiv">
         <div class="col-lg-3 col-sm-6 col-md-3 col-12">
            <div class="blooddodate">
              <span>BLOOD DONATION DATE</span>
              <input type="date" class="blood_donationreg" name="blood_donation_date" required>
         </div>
       </div>
         <div class="col-lg-4 col-sm-6 col-12">
              <div class="bloodgroup"><br>
                <span>BLOOD GROUP</span>
              <select class="blood_groupreg" name="blood_bgroup" required>
                <option>-- Select --</option>
                
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


      <!-- <div class="fdiv">
        
        

         <!--<div class="col-lg-3 col-sm-6 col-md-3 col-12">
            <div class="mdono">
            <span>OPTION FOR DONATION</span>
            <select class="optionreg" name="d_validity" required>
             <option>-- Select --</option>
                 
              <option>3</option>
              <option>6</option>
              <option>12</option>
            </select>
         </div>
       </div>
         <div class="col-lg-3 col-sm-6 col-md-3 col-12">
             <div class="reminder">
              <span>REMINDER SERVICE</span>
              <select class="reminderreg" name="d_reminder" required>
                 <option>-- Select --</option>
                 
                 <option>EMAIL</option>
                 <option>SMS</option>
              </select>
         </div>
       </div>

         <div class="col-lg-3 col-sm-6 col-md-3 col-12">
             <div class="area">
              <span>AREA</span>
              <select class="areaset" name="d_reminder" required>
                 <option>-- Select --</option>
                 <option>-- Select --</option>
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
       -->
       <div class="fidiv">
        <div class="col-lg-12 col-sm-12 col-12">

         <center><input type="submit" name="submit" value="UPDATE" class="bloodregtable"></center>
        </div> 
       </div>


      </form>


     </div>
   
   </div>
 </div>






 



<!--sidebar-->
<!--
<div class="content1">
<div class="content2">
 <div class="container">
        <div class="table-wrapper">         
            <div class="table-title">
                <div class="row">
                        <h2>Customer <b>Details</b></h2>
                   
                        <div class="search-box">
                            <div class="input-group">                               
                                <input type="text" id="search" class="form-control" placeholder="Search by Name">
                                <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                        </div>
                    </div>

                </div>
            </div>
            <div id="set">
            <table class="table table-striped table-bordered" id="sc">
                <thead>
                    <tr>
                      
                        <th>Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Pin Code</th>
                        <th>Country</th>
                        <th>Actions</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>1</td>
                        <td>Thomas Hardy</td>
                        <td>89 Chiaroscuro Rd.</td>
                        <td>Portland</td>
                        <td>97219</td>
                        <td>USA</td>
                       
                       
                        <td>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>1</td>
                        <td>Thomas Hardy</td>
                        <td>89 Chiaroscuro Rd.</td>
                        <td>Portland</td>
                        <td>97219</td>
                        <td>USA</td>
                        <td>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>1</td>
                        <td>Thomas Hardy</td>
                        <td>89 Chiaroscuro Rd.</td>
                        <td>Portland</td>
                        <td>97219</td>
                        <td>USA</td>
                        <td>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <td>1</td>
                        <td>Thomas Hardy</td>
                        <td>89 Chiaroscuro Rd.</td>
                        <td>Portland</td>
                        <td>97219</td>
                        <td>USA</td>
                        <td>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Maria Anders</td>
                        <td>Obere Str. 57</td>
                        <td>Berlin</td>
                        <td>12209</td>
                        <td>Germany</td>
                        <td>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Fran Wilson</td>
                        <td>C/ Araquil, 67</td>
                        <td>Madrid</td>
                        <td>28023</td>
                        <td>Spain</td>
                        <td>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Dominique Perrier</td>
                        <td>25, rue Lauriston</td>
                        <td>Paris</td>
                        <td>75016</td>
                        <td>France</td>
                        <td>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Martin Blank</td>
                        <td>Via Monte Bianco 34</td>
                        <td>Turin</td>
                        <td>10100</td>
                        <td>Italy</td>
                        <td>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>        
                </tbody>
            </table>
        </div>



        </div>
    </div>
    </div>     
</div>

-->
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