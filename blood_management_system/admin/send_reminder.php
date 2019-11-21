<?php
  include('admin_header.php');

?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $conn = new mysqli("localhost", "root", "", "BloodBank");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
      include '../Email.php';
                           $mail = new Email();
                  $sql="select * from tbl_donor where DATEDIFF(CURRENT_DATE,donation_date)>93 and DATEDIFF(CURRENT_DATE,donation_date)<=185";
          $result=mysqli_query($conn, $sql);
          
          while($row=mysqli_fetch_assoc($result)){
                      $email= $row['donor_email'] ;
                    
                      if(($row['donor_service']=='E') && ($row['donor_status']==0)){
                        
                        
                        $mail->send("help.bloodbanksystem@gmail.com", "Donation Reminder", "Hello '".$row['donor_name']."', <br><br> You donated blood three months ago. <br> It's the time again when you can save a life. <br> Visit BloodBank System to know about nearest blood donation camp in your area. <b><br><br> DONATE BLOOD, SAVE A LIFE!</b> <br><br> Thank you, <br> Blood Bank ", $row['donor_email']);
                       $sql="update tbl_donor set donor_status=1 where donor_email='$email'";
                         mysqli_query($conn, $sql);
                         
                         }
                      
                      if(($row['donor_service']=='S')&& ($row['donor_status']==0) ){
//                              $row['donor_status']=1;
//                               $email= $row['donor_email'] ;
//                              $sql="update tbl_donor set donor_status=1 where donor_email='$email'";
//                       mysqli_query($conn, $sql);
//                          $ch = curl_init();
//        $user = "soniya.daiict@gmail.com:sms123";
//        $receipientno = $row['donor_contact'];
//        $senderID = "TEST SMS";
//        $msgtxt = "Donation Reminder!Hello '".$row['donor_name']."' , \n You donated blood three months ago. \n It's the time again when you can save a life. \n Visit BloodBank System to know about nearest blood donation camp in your area. \n\n DONATE BLOOD, SAVE A LIFE!\n\nThank you, \n Blood Bank ";
//        curl_setopt($ch, CURLOPT_URL, "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
//        $buffer = curl_exec($ch);
//        if (empty($buffer)) {
//            echo " buffer is empty ";
//        } else {
//            echo $buffer;
//        }
//        curl_close($ch);
                        
                         
                      }
                      
                        if(($row['donor_service']=='B') && ($row['donor_status']==0) ){
                            $row['donor_status']=1;
                             $email= $row['donor_email'] ;
                            $mail->send("help.bloodbanksystem@gmail.com", "Donation Reminder", "Hello '".$row['donor_name']."', <br><br> You donated blood three months ago. <br> It's the time again when you can save a life. <br> Visit BloodBank System to know about nearest blood donation camp in your area. <b><br><br> DONATE BLOOD, SAVE A LIFE!</b> <br><br> Thank you, <br> Blood Bank ", $row['donor_email']);
                                  $sql="update tbl_donor set donor_status=1 where donor_email='$email'";
                       mysqli_query($conn, $sql);
//                                               
//                                                                       $ch = curl_init();
//        $user = "soniya.daiict@gmail.com:sms123";
//        $receipientno = $row['donor_contact'];
//        $senderID = "TEST SMS";
//        $msgtxt = "Donation Reminder!Hello '".$row['donor_name']."' , \nYou donated blood three months ago. \nIt's the time again when you can save a life. \nVisit BloodBank System to know about nearest blood donation camp in your area. \n\nDONATE BLOOD, SAVE A LIFE!\n\nThank you, \nBlood Bank ";
//        curl_setopt($ch, CURLOPT_URL, "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
//        $buffer = curl_exec($ch);
//        if (empty($buffer)) {
//            echo " buffer is empty ";
//        } else {
//            echo $buffer;
//        }
//        curl_close($ch);
                            
                        }
                              
                      
                      
              
              
          }
          
                    $sql="select * from tbl_donor where DATEDIFF(CURRENT_DATE,donation_date)>186 and DATEDIFF(CURRENT_DATE,donation_date)<=365";
          $result=mysqli_query($conn, $sql);
          
          while($row=mysqli_fetch_assoc($result)){
                     
                      if(($row['donor_service']=='E') && ($row['donor_status']==0)){
                          $row['donor_status']=1;
                           $email= $row['donor_email'] ;
                          
                           $sql="update tbl_donor set donor_status=1 where donor_email='$email'";
                         mysqli_query($conn, $sql);
                        
                         $mail->send("help.bloodbanksystem@gmail.com", "Donation Reminder", "Hello '".$row['donor_name']."', <br><br> You donated blood six months ago. <br> It's the time again when you can save a life. <br> Visit BloodBank System to know about nearest blood donation camp in your area. <b><br><br> DONATE BLOOD, SAVE A LIFE!</b> <br><br> Thank you, <br> Blood Bank ", $row['donor_email']);
                      }
                      
                      if(($row['donor_service']=='S') && ($row['donor_status']==0) ){
                           $email= $row['donor_email'] ;
                          //  $sql="update tbl_donor set donor_status=1 where donor_email='$email'";
                    //     mysqli_query($conn, $sql);
//                              $row['donor_status']=1;
//                          $ch = curl_init();
//        $user = "soniya.daiict@gmail.com:sms123";
//        $receipientno = $row['donor_contact'];
//        $senderID = "TEST SMS";
//        $msgtxt = "Donation Reminder!Hello '".$row['donor_name']."' , \n You donated blood six months ago. \n It's the time again when you can save a life. \n Visit BloodBank System to know about nearest blood donation camp in your area. \n\n DONATE BLOOD, SAVE A LIFE!\n\nThank you, \n Blood Bank ";
//        curl_setopt($ch, CURLOPT_URL, "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
//        $buffer = curl_exec($ch);
//        if (empty($buffer)) {
//            echo " buffer is empty ";
//        } else {
//            echo $buffer;
//        }
//        curl_close($ch);
                        
                         
                      }
                      
                        if(($row['donor_service']=='B') && ($row['donor_status']==0) ){
                            $row['donor_status']=1;
                             $email= $row['donor_email'] ;
                            $mail->send("help.bloodbanksystem@gmail.com", "Donation Reminder", "Hello '".$row['donor_name']."', <br><br> You donated blood six months ago. <br> It's the time again when you can save a life. <br> Visit BloodBank System to know about nearest blood donation camp in your area. <b><br><br> DONATE BLOOD, SAVE A LIFE!</b> <br><br> Thank you, <br> Blood Bank ", $row['donor_email']);
                                             $sql="update tbl_donor set donor_status=1 where donor_email='$email'";
  mysqli_query($conn, $sql);
//                                                           
//                                                                       
//                                                                                               $ch = curl_init();
//        $user = "soniya.daiict@gmail.com:sms123";
//        $receipientno = $row['donor_contact'];
//        $senderID = "TEST SMS";
//        $msgtxt = "Donation Reminder!Hello '".$row['donor_name']."' , \nYou donated blood six months ago. \nIt's the time again when you can save a life. \nVisit BloodBank System to know about nearest blood donation camp in your area. \n\nDONATE BLOOD, SAVE A LIFE!\n\nThank you, \nBlood Bank ";
//        curl_setopt($ch, CURLOPT_URL, "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
//        $buffer = curl_exec($ch);
//        if (empty($buffer)) {
//            echo " buffer is empty ";
//        } else {
//            echo $buffer;
//        }
//        curl_close($ch);
                            
                        }
                              
                      
                      
              
              
          }
          
                    $sql="select * from tbl_donor where DATEDIFF(CURRENT_DATE,donation_date)>365 ";
          $result=mysqli_query($conn, $sql);
          
          while($row=mysqli_fetch_assoc($result)){
                  
                      if(($row['donor_service']=='E') && ($row['donor_status']==0)){
                          $row['donor_status']=1;
                           $email= $row['donor_email'] ;
                        
                        $mail->send("help.bloodbanksystem@gmail.com", "Donation Reminder", "Hello '".$row['donor_name']."', <br><br> You donated blood one year ago. <br> It's the time again when you can save a life. <br> Visit BloodBank System to know about nearest blood donation camp in your area. <b><br><br> DONATE BLOOD, SAVE A LIFE!</b> <br><br> Thank you, <br> Blood Bank ", $row['donor_email']);
                      $sql="update tbl_donor set donor_status=1 where donor_email='$email'";
                         mysqli_query($conn, $sql);
                         }
                      
                      if(($row['donor_service']=='S') && ($row['donor_status']==0)){
                           $email= $row['donor_email'] ;
//                  $sql="update tbl_donor set donor_status=1 where donor_email='$email'";
                   //      mysqli_query($conn, $sql);
//                              
//                                                          $row['donor_status']=1;
//                          $ch = curl_init();
//        $user = "soniya.daiict@gmail.com:sms123";
//        $receipientno = $row['donor_contact'];
//        $senderID = "TEST SMS";
//        $msgtxt = "Donation Reminder!Hello '".$row['donor_name']."' , \n You donated blood one year ago. \n It's the time again when you can save a life. \n Visit BloodBank System to know about nearest blood donation camp in your area. \n\n DONATE BLOOD, SAVE A LIFE!\n\nThank you, \n Blood Bank ";
//        curl_setopt($ch, CURLOPT_URL, "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
//        $buffer = curl_exec($ch);
//        if (empty($buffer)) {
//            echo " buffer is empty ";
//        } else {
//            echo $buffer;
//        }
//        curl_close($ch);
                        
                         
                      }
                      
                        if(($row['donor_service']=='B')  && ($row['donor_status']==0)){
                          
                             $email= $row['donor_email'] ;
                             echo $email;
                           $mail->send("help.bloodbanksystem@gmail.com", "Donation Reminder", "Hello '".$row['donor_name']."', <br><br> You donated blood one year ago. <br> It's the time again when you can save a life. <br> Visit BloodBank System to know about nearest blood donation camp in your area. <b><br><br> DONATE BLOOD, SAVE A LIFE!</b> <br><br> Thank you, <br> Blood Bank ", $row['donor_email']);
       $sql="update tbl_donor set donor_status=1 where donor_email='$email'";
                         mysqli_query($conn, $sql);
//                                               
//                                                                              
//                                                                                                                                            $ch = curl_init();
//        $user = "soniya.daiict@gmail.com:sms123";
//        $receipientno = $row['donor_contact'];
//        $senderID = "TEST SMS";
//        $msgtxt = "Donation Reminder!Hello '".$row['donor_name']."' , \nYou donated blood one year ago. \nIt's the time again when you can save a life. \nVisit BloodBank System to know about nearest blood donation camp in your area. \n\nDONATE BLOOD, SAVE A LIFE!\n\nThank you, \nBlood Bank ";
//        curl_setopt($ch, CURLOPT_URL, "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
//        $buffer = curl_exec($ch);
//        if (empty($buffer)) {
//            echo " buffer is empty ";
//        } else {
//            echo $buffer;
//        }
//        curl_close($ch);
                            
                        }
                              
                      
                      
              
              
          }
          
          
          
          
          
          
          
          
          
          
          
          
          
              }
          
                  
              
          
    
    
    





        ?>
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
