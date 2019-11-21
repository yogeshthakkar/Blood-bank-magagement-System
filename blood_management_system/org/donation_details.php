<?php
 include('org_header.php');
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
    
    
    <div class="outer-container">
        <form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div class="setexcel">
                <label>Choose Excel
                    File</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx"><br><br>
                <button type="submit" id="submit" name="import"
                    class="btn-submit">Import</button>
        
            </div>
        
        </form>
        
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    
	<?php
$conn = mysqli_connect("localhost","root","","BloodBank");

if (isset($_POST["import"]))
{
	$filename=$_FILES["file"]["tmp_name"]; 
	$check=0;   
     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
		$count=0; $status=0;
		
          while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {
              $count++;
			  
				$arr=explode("-",$getData[3]); // breaking string to create an array
				$yy=$arr[0]; // first element of the array is month
				$mm=$arr[1]; // second element is date
				$dd=$arr[2]; // third element is year
				
			   if(preg_match('/^[a-z ]+$/i',$getData[0]))
			   {
				   if($getData[1]=="A+" || $getData[1]=="A-" || $getData[1]=="B+" || $getData[1]=="B-" ||
				      $getData[1]=="O+" || $getData[1]=="O-" || $getData[1]=="AB+" || $getData[1]=="AB-")
				   {
					   if($getData[2]=="Female" || $getData[2]=="female" || $getData[2]=="Male" ||
					      $getData[2]=="male" || $getData[2]=="Others" || $getData[2]=="others")
						  {
							  if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$getData[3]))
							  {
								  if(preg_match("/^[_a-z0-9-+]+(\.[_a-z0-9-+]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/",$getData[4]))
								  {
									  if(preg_match('/^[0-9]{10}+$/', trim($getData[5],' ')))
										  {
												// $sql = "INSERT INTO `tbl_blood`(`blood_donor_name`, `blood_group`, `blood_donor_gender`,`blood_givenDate`, `blood_donor_email`, `blood_donor_contact`,`blood_status`) 
												// 	   values ('$getData[0]','$getData[1]','$getData[2]','$getData[3]','$getData[4]','$getData[5]','$status')";
												// 		   $result = mysqli_query($conn, $sql);
												// if(!isset($result))
												// {
												//   echo "<script type=\"text/javascript\">
												// 	  alert(\"Invalid File:Please Upload CSV File.\");
											  
												// 	  </script>";    
												// }
												// else 
												// {
												// 	echo "<script type=\"text/javascript\">
												// 	alert(\"CSV File has been successfully Imported.\");
												 
												//   </script>";
												// }
												$check=1;
										  }
										  else
										  {
											  echo "Invalid Contact number at $count line.";
											  $check=0;
                                                                                          break;
										  }
									}
									else
									{
											  echo "Invalid Email Address at $count line.";
											  $check=0;
                                                                                          break;
									}
							  }
							  else
								{
									 echo "Invalid date at $count line.";
									 $check=0;
                                                                         break;
								}
						  }
						  else
							{
								 echo "Invalid Gender at $count line.";
								 $check=0;
                                                                 break;
							}
					}
					else
					{
						echo "Invalid Blood group at $count line.";
						$check=0;
                                                break;
					}
			   }
			   else
				{
					 echo "Invalid Name at $count line.";
					 $check=0;
                                         break;
				}
           }
           fclose($file);  
	 }
	 if($check==1)
	 {
		if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
		$count=0; $status=0;
		
          while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {
              $count++;
			  
				$arr=explode("-",$getData[3]); // breaking string to create an array
				$yy=$arr[0]; // first element of the array is month
				$mm=$arr[1]; // second element is date
				$dd=$arr[2]; // third element is year
				$sql1="select * from tbl_donor";
				$result1=mysqli_query($conn,$sql1);
				while($row=mysqli_fetch_assoc($result1)){
					$email= $row['donor_email'] ;
					if($email==$getData[4])
					{
						$up= "update tbl_donor set donation_date='$getData[3]',donor_status=0 where donor_email='$email'";
						mysqli_query($conn,$up);
						
					}
				}
					$username=$_SESSION['organ_username'];
					
			   $sql = "INSERT INTO `tbl_blood`(`blood_donor_name`, `blood_group`, `blood_donor_gender`,`blood_givenDate`, `blood_donor_email`, `blood_donor_contact`,`blood_status`,`uploaded_by`) 
													   values ('$getData[0]','$getData[1]','$getData[2]','$getData[3]','$getData[4]','$getData[5]','$status','$username')";
														  mysqli_query($conn,$sql);
                                                                                                                  
														   
														   
												// if(!isset($result))
												// {
												//   echo "<script type=\"text/javascript\">
												// 	  alert(\"Invalid File:Please Upload CSV File.\");
											  
												// 	  </script>";    
												// }
												// else 
												// {
												// 	echo "<script type=\"text/javascript\">
												// 	alert(\"CSV File has been successfully Imported.\");
												 
												//   </script>";
												// }
											
											}   
		
           fclose($file);  
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