<?php 
  include('bloodbank_header.php');
?>
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

 <form method="POST" action="">
<center> <br><br>
    <h1>
     
             <?php      
              class Admin_login {
       
           public $username,$password;
       
           public function __construct() {
           
           }
          
       
           public function login() {
       
               $this->conn = mysqli_connect("localhost", "root", "", "BloodBank");
               if (mysqli_connect_errno()) {
                   echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
              else{
                   $this->username="seva@gmail.com";
                   //  if(isset($_SESSION['admin_username'])){
                  
                 //   }
                   $this->sql="select * from tbl_organization where org_email='$this->username' ";
                   $this->result = mysqli_query($this->conn, $this->sql);
                   
if ($this->result->num_rows > 0) {
    while($this->row = $this->result->fetch_assoc()) {
        echo "Welcome,  " . $this->row["org_name"]."<br>";
    }
        }

       }
           }
         }

           ?>
    </h1>
</center>
<br>
<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" >
          <center>
              <button class="but" style="background-color: #ffffff; border: none;outline: none;" onclick="location.href = ' faculty_details.php'"  ><img src="image/icons8-page-64.png"  alt="" width="100px" height="100px"></button>
                                        
                                        <br><h3 style="color:black">Upload donor details </h3>
                                        <h4 style="color:black"> </h4>
                                        
                                        <?php
                                         $conn = mysqli_connect("localhost", "root", "", "BloodBank");
               if (mysqli_connect_errno()) {
                   echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
               $_SESSION['org_username']='seva@gmail.com';
               $username=$_SESSION['org_username'];
                                           $sql = "select count(*) from tbl_organization ";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($result)) {
                                                ?><a href="donation_details.php" style="text-decoration: none"><b><font style="color: #f48d00; font-size: 24px">
                                                    <?php echo "Click here";?></font></b></a>
                                                <?php
                                            }
                                        
                                        ?>
          </center>
</div>   
  

 <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" >
          <center>
                                        <button class="but" style="background-color: #ffffff; border: none;outline: none;" onclick="location.href = 'faculty_details.php'"  ><img src="image/icons8-welfare-96.png" alt="" width="100px" height="100px"></button>
                                        <br><h3 style="color:black">Donors </h3>
                                        <h4 style="color:black">Total donors </h4>
                                        
                                        <?php
                                         $conn = mysqli_connect("localhost", "root", "", "BloodBank");
               if (mysqli_connect_errno()) {
                   echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
                                           $sql = "select count(*) from tbl_donor ";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($result)) {
                                                ?><a href="" style="text-decoration: none"><b><font style="color: #f48d00; font-size: 24px">
                                                    <?php echo $row[0]; ?></font></b></a>
                                                <?php
                                            }
                                        
                                        ?>
          </center>
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

</body>
</html>                                                                                             