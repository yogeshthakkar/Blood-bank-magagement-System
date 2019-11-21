<?php 

include('admin_header.php');

?>


<!--add camp-->

<div class="container">
   <div class="row no-gutters">
     <div class="campde">
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
   <form role="form" method="post" action="edit_bank1.php" enctype="multipart/form-data">
        
         <div class="odivc">
         <div class="col-lg-6 col-sm-6 col-12">
            <div class="bankname">
              <span>NAME OF BLODDBANK</span>
            <input type="text" class="bname" placeholder="BloodBank Name" name="txtbname" required value="<?php echo $_hospital_name; ?>">
            </div>
          </div>
         
        <!-- <div class="col-lg-3 col-sm-3 col-12">
            <div class="campregdate">
            <span>REGISTRAION DATE</span>
            <input type="date" class="dateregcamp" name="creg_date">
            </div>
         </div>
       
       <div class="col-lg-3 col-sm-3 col-12">
            <div class="campven">
            <span>VENUE DATE</span>
             <input type="date" class="campvendate" name="cvenue_date">
            </div>
         </div>-->
        </div>


       <div class="sdivc">
         <div class="col-lg-6 col-sm-4 col-12">
            <div class="bankemail">
              <span>BLOODBANK EMAIL</span>
            <input type="email" class="bemailreg" placeholder="EMAIL"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required value="<?php echo $_pk_bloodbank_id; ?>" name="txtbemail">
          </div>
        </div>
         <div class="col-lg-3 col-sm-4 col-12">
            <div class="bankdistrict">
              <span>AREA</span>
            <select class="bdistrictreg" required  name="txtarea">
                <option><?php echo $_area; ?></option>
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
                  
            </select>
          </div>
         </div>
         <div class="col-lg-3 col-sm-4 col-12">
           <div class="bankmob">

            <span>CONTACT NO</span>
           <input type="text" class="bmobreg" placeholder="MOBILE" pattern="^\d{10}$" required name="txtbmob" value="<?php echo $_contactno; ?>" >
         </div>
       </div>
       </div>

        <div class="tdivc">
         <div class="col-lg-8 col-sm-6 col-12">
              <div class="bankaddress">
                <span>BLOODBANK ADDRESS</span>
              <textarea class="baddressreg" name="cvenue" placeholder="Address" required name="txtbaddress"><?php echo $_add; ?></textarea>
         </div>
       </div>


        <!--  <div class="col-lg-4 col-sm-6 col-12">
              <div class="camptime"><br>
                <span>VENUE TIME</span>
              <input type="time" class="camptimeclass" name="cvenue_time">
         </div>
       </div>-->
       </div>
<div class="fidivc">
        <div class="col-lg-12 col-sm-12 col-12">

         <center><input type="submit" value="UPDATE"  name="submit" class="bankregtable"></center>
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