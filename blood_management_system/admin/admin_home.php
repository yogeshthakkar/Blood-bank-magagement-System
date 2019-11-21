<?php 
session_start();
if(!isset($_SESSION['admin_username'])){
    ?>
<script>
    window.location.href = '../admin.php';
</script>

<?php
}

?>

<?php 

include('admin_header.php');

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
                   $this->username=$_SESSION['admin_username'];
                    if(isset($_SESSION['admin_username'])){
                  
                    }
                   $this->sql="select * from tbl_admin where admin_email='$this->username' ";
                   $this->result = mysqli_query($this->conn, $this->sql);
                   
if ($this->result->num_rows > 0) {
    while($this->row = $this->result->fetch_assoc()) {
        echo "Welcome,  " . $this->row["admin_name"]."<br>";
    }
}

       }
           }
                                  }
                                  
    
       
       $reg = new Admin_login();
       $reg->login();
   





?>
    </h1>
</center>
<br>
  <div class="container" >
                            <div class="container-fluid" >
                                <div class="row">

      <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" >
          <center>
                                        <button class="but" style="background-color: #ffffff; border: none;outline: none;" onclick="location.href = ' faculty_details.php'"  ><img src="image/icons8-welfare-96.png" alt="" width="100px" height="100px"></button>
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
                                                ?><a href="view_donor.php" style="text-decoration: none"><b><font style="color: #f48d00; font-size: 24px">
                                                    <?php echo $row[0]; ?></font></b></a>
                                                <?php
                                            }
                                        
                                        ?>
          </center>
                                    </div>
                                    
                                     <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" >
          <center>
              <button class="but" style="background-color: #ffffff; border: none;outline: none;" onclick="location.href = ' faculty_details.php'"  ><img src="image/icons8-hospital-64.png"  alt="" width="100px" height="100px"></button>
                                        
                                        <br><h3 style="color:black">Hospital </h3>
                                        <h4 style="color:black">Total hospitals </h4>
                                        
                                        <?php
                                         $conn = mysqli_connect("localhost", "root", "", "BloodBank");
               if (mysqli_connect_errno()) {
                   echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
                                           $sql = "select count(*) from tbl_hospital ";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($result)) {
                                                ?><a href="view_hospital.php" style="text-decoration: none"><b><font style="color: #f48d00; font-size: 24px">
                                                    <?php echo $row[0]; ?></font></b></a>
                                                <?php
                                            }
                                        
                                        ?>
          </center>
                                    </div>
                                    
                                    
                                     <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" >
          <center>
              <button class="but" style="background-color: #ffffff; border: none;outline: none;" onclick="location.href = ' faculty_details.php'"  ><img src="image/icons8-organization-64.png"  alt="" width="100px" height="100px"></button>
                                        
                                        <br><h3 style="color:black">Organization </h3>
                                        <h4 style="color:black">Total organizations </h4>
                                        
                                        <?php
                                         $conn = mysqli_connect("localhost", "root", "", "BloodBank");
               if (mysqli_connect_errno()) {
                   echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
                                           $sql = "select count(*) from tbl_organization ";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($result)) {
                                                ?><a href="view_organization.php" style="text-decoration: none"><b><font style="color: #f48d00; font-size: 24px">
                                                    <?php echo $row[0]; ?></font></b></a>
                                                <?php
                                            }
                                        
                                        ?>
          </center>
                                    </div>   
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </div>
                                <br><br><br>
                                <div class="row">
                                                               <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" >
          <center>
              <button class="but" style="background-color: #ffffff; border: none;outline: none;" onclick="location.href = ' faculty_details.php'"  ><img src="image/icons8-strike-64.png"  alt="" width="100px" height="100px"></button>
                                        
                                        <br><h3 style="color:black">Camp </h3>
                                        <h4 style="color:black">Total camps </h4>
                                        
                                        <?php
                                         $conn = mysqli_connect("localhost", "root", "", "BloodBank");
               if (mysqli_connect_errno()) {
                   echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
                                           $sql = "select count(*) from tbl_camp ";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($result)) {
                                                ?><a href="view_camp.php" style="text-decoration: none"><b><font style="color: #f48d00; font-size: 24px">
                                                    <?php echo $row[0]; ?></font></b></a>
                                                <?php
                                            }
                                        
                                        ?>
          </center>
                                    </div> 
                                    
                                                               <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" >
          <center>
              <button class="but" style="background-color: #ffffff; border: none;outline: none;" onclick="location.href = ' faculty_details.php'"  ><img src="image/WBMTE158_icon_pack_04-12-512.png"  alt="" width="100px" height="100px"></button>
                                        
                                        <br><h3 style="color:black">Blood Stock </h3>
                                        <h4 style="color:black">Total blood bottles </h4>
                                        
                                        <?php
                                         $conn = mysqli_connect("localhost", "root", "", "BloodBank");
               if (mysqli_connect_errno()) {
                   echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
                                           $sql = "select count(*) from tbl_organization ";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($result)) {
                                                ?><a href="view_blood.php" style="text-decoration: none"><b><font style="color: #f48d00; font-size: 24px">
                                                    <?php echo $row[0]; ?></font></b></a>
                                                <?php
                                            }
                                        
                                        ?>
          </center>
                                    </div> 
                                    
                                    
                                                               <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" >
          <center>
              <button class="but" style="background-color: #ffffff; border: none;outline: none;" onclick="location.href = ' faculty_details.php'"  ><img src="image/icons8-admin-settings-male-64.png"  alt="" width="100px" height="100px"></button>
                                        
                                        <br><h3 style="color:black">Administration </h3>
                                        <h4 style="color:black">Total admins </h4>
                                        
                                        <?php
                                         $conn = mysqli_connect("localhost", "root", "", "BloodBank");
               if (mysqli_connect_errno()) {
                   echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
                                           $sql = "select count(*) from tbl_admin ";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($result)) {
                                                ?><a href="view_admin.php" style="text-decoration: none"><b><font style="color: #f48d00; font-size: 24px">
                                                    <?php echo $row[0]; ?></font></b></a>
                                                <?php
                                            }
                                        
                                        ?>
          </center>
                                    </div> 
                                    
                                    
                                    
                                    
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

<!---->

   <!--chat-->
   <!--
             <div class="main-section" id="chat_box">
    <div class="row border-chat">
        <div class="col-md-12 col-sm-12 col-xs-12 first-section">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-6 left-first-section">
                    <p id="chat_name" class="user_chat_box">Chat With Admin</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 right-first-section">
                    <a href=""><i class="fa fa-minus" aria-hidden="true"></i></a>
           </div>
            </div>
        </div>
    </div>
    <div class="row border-chat"> 
        <div class="col-md-12 col-sm-12 col-xs-12 second-section">
            <div class="chat-section">
                <ul id="conversation">
                    <li>
                        <div class="left-chat">
                            <img src="/demo/man01.png">
                            <p>Lorem ipsum dolor sit ameeserunt.
                            </p>
                            <span>2 min</span>
                        </div>
                    </li>
                    <li>
                        <div class="right-chat">
                            <img src="/demo/man02.png">
                            <p>Lorem ipsum dolor sit ameeserunt.</p>
                            <span>2 min</span>
                        </div>
                    </li>
                    
                   
                </ul>
            </div>
        </div>
    </div>
    <div class="row border-chat">
        <div class="col-md-12 col-sm-12 col-xs-12 third-section">
            <div class="text-bar">
                <input type="text" placeholder="Write messege" id="input_chat"><a onClick="imsg_send();"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            
            </div>
            
        </div>
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
 <script>

$(document).ready(function(){
        $(".left-first-section").click(function(){
            $('.main-section').toggleClass("open-more");
        });
    });
  
    $(document).ready(function(){
        $(".fa-minus").click(function(){
            $('.main-section').toggleClass("open-more");
        });
    });
 </script>
<!--chat demo-->

<!--
<script>
    function imsg_send()
    {
      
      var from_id = '<?php echo @$this->session->userdata('user'); ?>';
      var to_id = 1;
      var msg = $('#input_chat').val();
        if(msg == ''){return false;}
        //alert(from_id);
        $.ajax({
          type:'POST',
          url:'<?php echo site_url('user/Dashboard/add_chat'); ?>',
          data:{from_id:from_id,to_id:to_id,msg:msg},
          dataType:'JSON',
          success:function(response){
            //console.log(response.conversation);return false;
            var html='';
            for(var i=0;i<response.conversation.length;i++){
              if(from_id == (response.conversation[i].from_id)){
                html += '<li><div class="right-chat"><p>'+response.conversation[i].msg+'</p></div></li>'; 
              }else{
                html += '<li><div class="left-chat"><p>'+response.conversation[i].msg+'</p></div></li>';  
              }
               
            }
            $('#conversation').html(html);
            $('#input_chat').val('');   
          }
        });
        
      
    }
        
    $(function(){
        
        
        var scr = $('#conversation');
      //  console.log(scr);
        var height = scr[0].scrollHeight;
        //console.log(height);
        scr.scrollTop(height);  
        
      });
      
      var $time = '';
      
      function auto_get_chat_func(from_id,to_id){
  
      clearTimeout($time);
      auto_get_chat(from_id,to_id); 
    }
    
    
      function auto_get_chat(from_id,to_id){
        //alert("dasd");
      //var from_id = from_id;
      //var to_id = to_id;
      //console.log(from_id);console.log(to_id);return false;
      //clearTimeout(time);
      $.ajax({
        type:'POST',
        url:'<?php echo site_url('user/Dashboard/get_chat_data'); ?>',
        data:{from_id:from_id,to_id:to_id},
        dataType:'JSON',
        success:function(response){
          //console.log(response.conversation);return false;
          var html='';
          for(var i=0;i<response.conversation.length;i++){
            if(from_id == (response.conversation[i].from_id)){
              html += '<li><div class="right-chat"><p>'+response.conversation[i].msg+'</p></div></li>'; 
            }else{
              html += '<li><div class="left-chat"><p>'+response.conversation[i].msg+'</p></div></li>';  
            }
             
          }
          $('#chat_box').show();
          $('#chat_name').text(response.chat_user_data.fname);
          $('#input_chat').attr('data-from_id',from_id);
          $('#input_chat').attr('data-to_id',to_id);
          $('#conversation').html(html);
        }
      });
      
      $time = setTimeout(function(){
        
        auto_get_chat(from_id,to_id)
      },3000);
      
    }
    
    
    $(document).ready(function(e) {
    
        //alert("asdsa");
    $('#input_chat').keyup(function(e){
      if(e.keyCode==13){
        var from_id = '<?php echo @$this->session->userdata('user'); ?>';
        var to_id = 1;
        var msg = $(this).val();
        if(msg == ''){return false;}
        //alert(from_id);
        $.ajax({
          type:'POST',
          url:'<?php echo site_url('user/Dashboard/add_chat'); ?>',
          data:{
              from_id:from_id,
              to_id:to_id,
              msg:msg
          },
          dataType:'JSON',
          success:function(response){
            //console.log(response.conversation);return false;
            var html='';
            for(var i=0;i<response.conversation.length;i++){
              if(from_id == (response.conversation[i].from_id)){
                html += '<li><div class="right-chat"><p>'+response.conversation[i].msg+'</p></div></li>'; 
              }else{
                html += '<li><div class="left-chat"><p>'+response.conversation[i].msg+'</p></div></li>';  
              }
               
            }
            $('#conversation').html(html);
            $('#input_chat').val('');   
          }
        });
        
      }
      });
    });
      
    
    $(document).on('click','.user_chat_box',function(){
      //alert();
      //console.log(time);
      var from_id = '<?php echo @$this->session->userdata('user'); ?>';
      var to_id = 1;
      $.ajax({
        type:'POST',
        url:'<?php echo site_url('user/Dashboard/get_chat_data'); ?>',
        data:{from_id:from_id,to_id:to_id},
        dataType:'JSON',
        success:function(response){
          //console.log(response.conversation);return false;
          
          var html='';
          for(var i=0;i<response.conversation.length;i++){
            if(from_id == (response.conversation[i].from_id)){
              html += '<li><div class="right-chat"><p>'+response.conversation[i].msg+'</p></div></li>'; 
            }else{
              html += '<li><div class="left-chat"><p>'+response.conversation[i].msg+'</p></div></li>';  
            }
             
          }
          //$('#chat_box').show();
          $('#chat_name').text(response.chat_user_data.fname);
          $('#input_chat').attr('data-from_id',from_id);
          $('#input_chat').attr('data-to_id',to_id);
          $('#conversation').html(html);
          
          var scr = $('#conversation');
          console.log(scr);
          var height = scr[0].scrollHeight;
//          alert(height);
          scr.scrollTop(height);      
          //clearTimeout(time);
          auto_get_chat_func(from_id,to_id);
        }
      });
    });
  
    
     $(document).ready(function(){
      $(".fa-minus").click(function(){
            $('.main-section').toggleClass("open-more").after(function(){
        var scr = $('#conversation');
        //console.log(scr);
        var height = scr[0].scrollHeight;
        //alert(height);
        scr.scrollTop(height);          
      });
      });
    });
    
    
    function chat_delete()
    {
      <?php 
          // @$from_id=@$this->session->userdata('user');
           //$this->Dashboard_model->chat_delete(@$from_id);  
      ?>
    }
 </script>


-->






</body>
</html>                                                                                             