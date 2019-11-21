
<?php
 include('hospital_header.php');

?>


<div class="content1">
<div class="content2">
 <div class="container">
        <div class="table-wrapper">         
            <div class="table-title">
                <div class="row">
                        <h2>Blood <b>Details</b></h2>
                   
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
                    
              <th>Id</th>
              <th>Group</th>
              <th>Given Date</th>
              <th>Email</th>
              <th>Donor_Name</th>
              <th>Gender</th>
              <th>Contact</th>
                            
              <th>Action</th>
                      
                    
                       
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $conn = new mysqli("localhost", "root", "", "bloodbank");
                 // Check connection
                 $username=$_SESSION['hospital_username'];
                 
                 if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
                 } 
                   $sql="select * from tbl_blood WHERE `Blood_Status` = 0 and `uploaded_by`='$username'";
                   $result=$conn->query($sql);
                   $row;
                   if(mysqli_num_rows($result)>0)
                   {
                 
                       while($row= mysqli_fetch_assoc($result))
                       {
                        echo '</td><td>'.$row["blood_id"].'</td><td>'.$row["blood_group"].'</td><td>'.$row["blood_givenDate"].'</td><td>'.$row["blood_donor_email"].'</td><td>'.$row["blood_donor_name"].'</td><td>'.$row["blood_donor_gender"].'</td><td>'.$row["blood_donor_contact"].'</td><td>
                        <a href="edit_blood.php?id='. $row["blood_id"].'" class="edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                      
                       
                    
                        
                        <a href="blood_delete.php?id='. $row["blood_id"].'"  class="delete" title="Delete" data-toggle="tooltip" onclick="return checkDelete()"><i class="material-icons">&#xE872;</i></a>
                      
                                      </td></tr>';
                           
                       }
                   }  
                   ?>
                    
                                
               
                </tbody>
            </table>
        </div>



        </div>
    </div>
    </div>     
</div>



<div class="content1">
<div class="content2">
 <div class="container">
        <div class="table-wrapper">         
            <div class="table-title">
                <div class="row">
                        <h2>Blood <b>Details</b></h2>
                   
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
                     <th>Id</th>
              <th>Group</th>
              <th>Given Date</th>
              <th>Email</th>
              <th>Donor_Name</th>
              <th>Gender</th>
              <th>Contact</th>
                            
              <th>Action</th>
                            
                      
                    
                       
                    </tr>
                </thead>
                <tbody>
                
                
                    <?php 
                    $sql="UPDATE `tbl_blood` SET `Blood_Status`=1  WHERE NOW() >  `blood_givenDate` + INTERVAL 42 DAY and `uploaded_by`='$username'";
                    $result=$conn->query($sql);
                    $sql1="SELECT * FROM  tbl_blood
                    WHERE  NOW() >  `blood_givenDate` + INTERVAL 32 DAY and `uploaded_by`='$username'";
                   $result1=$conn->query($sql1);
                   $row1;
                  
                   if(mysqli_num_rows($result1)>0)
                   {
                    while($row1= mysqli_fetch_assoc($result1))
                    {
                    echo '</td><td>'.$row1["blood_id"].'</td><td>'.$row1["blood_group"].'</td><td>'.$row1["blood_givenDate"].'</td><td>'.$row1["blood_donor_email"].'</td><td>'.$row1["blood_donor_name"].'</td><td>'.$row1["blood_donor_gender"].'</td><td>'.$row1["blood_donor_contact"].'</td><td>
                    <a href="blood_delete.php?id='. $row1["blood_id"].'"  class="delete" title="Delete" data-toggle="tooltip" onclick="return checkDelete()"><i class="material-icons">&#xE872;</i></a>

                    </td></tr>';
         

                  }  
                }

                   ?>
                    
                                
               
                </tbody>
            </table>
        </div>



        </div>
    </div>
    </div>     
</div>




</body>
</html>                                                                                             