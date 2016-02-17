<html>
    <head>
		<title>Registration Details</title>
		<style>
.error {color: #FF0000;}
</style>
	</head>
        <br>
		<br>
		<br>
     <body bgcolor="#0a7f99">
	 <?php
$nameErr = $dobErr = $sexErr = $yoaErr = $usnErr = $e_idErr = $phErr = $addressErr = $modeErr = $rankErr = $f_nameErr = $f_noErr = $f_idErr = $m_nameErr = $m_noErr = $m_id = $b_noErr = "";
$name = $dob = $sex = $yoa = $usn = $e_id = $ph = $address = $mode = $rank = $f_name = $f_no = $f_id = $m_name = $m_no = $m_id = $b_no = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
  
    if (empty($_POST["sex"])) {
     $sexErr = "Gender is required";
   } else {
     $sex = test_input($_POST["sex"]);
   }
   if (empty($_POST["yoa"])) {
     $yoaErr = "YOA is required";
   } else {
     $yoa = test_input($_POST["yoa"]);
   }

  if(!empty($_POST["usn"])){
    if (!preg_match("/^[a-z0-9A-Z]*$/",$usn)) 
    {
      $usnErr = "Only letters and digit allowed"; 
    }
  }
  else
  {
    $usnErr = "Please enter usn";
  } 
    
   if (empty($_POST["e_id"])) {
     $e_idErr = "Email is required";
   } else {
     $e_id = test_input($_POST["e_id"]);
     if (!filter_var($e_id, FILTER_VALIDATE_EMAIL)) {
       $e_idErr = "Invalid email format"; 
     }
   }
  
if (!preg_match("/^[0-9]*$/",$ph)) 
  {
    $phErr = "Only numbers allowed"; 
  } 
if (!preg_match("/^[0-9]*$/",$rank)) 
  {
    $rankErr = "Only numbers allowed"; 
  }   
  
  if (empty($_POST["f_name"])) {
     $f_nameErr = "Name is required";
   } else {
     $f_name = test_input($_POST["f_name"]);
     
     if (!preg_match("/^[a-zA-Z ]*$/",$f_name)) {
       $f_nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (!preg_match("/^[0-9]*$/",$f_no)) 
  {
    $f_noErr = "Only numbers allowed"; 
  } 
  
   if (empty($_POST["f_id"])) {
     $f_idErr = "Email is required";
   } else {
     $f_id = test_input($_POST["f_id"]);
    if (!filter_var($f_id, FILTER_VALIDATE_EMAIL)) {
       $f_idErr = "Invalid email format"; 
     }
   }
   
   if (empty($_POST["m_name"])) {
     $m_nameErr = "Name is required";
   } else {
     $m_name = test_input($_POST["m_name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$m_name)) {
       $m_nameErr = "Only letters and white space allowed"; 
     }
   }

   if (!preg_match("/^[0-9]*$/",$m_no)) 
  {
    $m_noErr = "Only numbers allowed"; 
  } 

  
   if (empty($_POST["m_id"])) {
     $m_idErr = "Email is required";
   } else {
     $m_id = test_input($_POST["m_id"]);
     // check if e-mail address is well-formed
     if (!filter_var($m_id, FILTER_VALIDATE_EMAIL)) {
       $m_idErr = "Invalid email format"; 
     }
   }
  } 
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
 ?>
	 
<center>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onSubmit=return formsubmit()>
	  <p><span class="error"></span></p>
					<table>
					<tr><td><b><font color="white" size=6>Enter the following details:</font></b></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Name:</font></td><td><input type="text" name="name" value="<?php echo $name;?>">
   <span class="error"> <?php echo $nameErr;?></span></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>DOB:</font></td><td><input type="date" name="dob" value="<?php echo $dob;?>">
   <span class="error"> <?php echo $dobErr;?></span></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>sex:</font></td><td>
					<input type="radio" name="sex" <?php if (isset($sex) && $sex=="male") echo "checked";?> value="Male"><font color="White" size=4>Male</font></input>
					<input type="radio" name="sex" <?php if (isset($sex) && $sex=="female") echo "checked";?> value="Female"><font color="White" size=4>Female</font></input>
						<span class="error"><?php echo $sexErr;?></span>
					</td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Year of Admission:</font></td><td><input type="text" name="yoa" value="<?php echo $yoa;?>">
   <span class="error"><?php echo $yoaErr;?></span></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>USN:</font></td><td><input type="text" name="usn" value="<?php echo $usn;?>">
   <span class="error"> <?php echo $usnErr;?></span></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Email ID:</font></td><td><input type="text" name="e_id" value="<?php echo $e_id;?>">
   <span class="error"> <?php echo $e_idErr;?></span></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Phone no:</font></td><td><input type="text" name="ph"/></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Address:</font></td><td><textarea rows=4 name="address" cols=50></textarea></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Mode of Admission :</font></td><td><select id="text" name="mode"/>
					 
						<option value='-1'>Select</option> 
						<option value='CET'>CET</option>
						<option value='COMEDK'>COMEDK</option>
						<option value='MQ'>MQ</option>
					</select>
							</td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Rank:</font></td><td><input type="text" name="rank"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Father's Name:</font></td><td><input type="text" name="f_name" value="<?php echo $f_name;?>">
   <span class="error"><?php echo $f_nameErr;?></span></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Father's Contact No.:</font></td><td><input type="text" name="f_no" value="<?php echo $f_no;?>">
   <span class="error"><?php echo $f_noErr;?></span></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Father's Email ID:</font></td><td><input type="text" name="f_id"/></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Mother's Name:</font></td><td><input type="text" name="m_name" value="<?php echo $m_name;?>">
   <span class="error"> <?php echo $m_nameErr;?></span></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Mother's Contact No.:</font></td><td><input type="text" name="m_no" value="<?php echo $m_no;?>">
   <span class="error"><?php echo $m_noErr;?></span></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Mother's Email ID:</font></td><td><input type="text" name="m_id"/></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Batch no:</font></td><td><input type="text" name="b_no" value="<?php echo $b_no;?>">
   <span class="error"><?php echo $b_noErr;?></span></td></tr>	
							<tr><td><br></td></tr>
							<tr><td><br></td></tr>
					<tr><td>      </td><td><input type="submit" value="Submit"></td></tr>
					
					</table>
					</form>		
					</center>          
   

<br>
    <br>
    <br>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "counsellor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

  $sql = "insert into counsellor.student values('$name','$usn','$sex','$dob','$yoa','$mode','$rank','$e_id','$ph','$f_name','$f_id','$f_no','$m_name','$m_id','$m_no','$b_no','$address')";
//$sql = "insert into counsellor.student values(".$name.",".$usn.",".$sex.",".$dob.",".$yoa.",".$mode.",".$rank.",".$e_id.",".$ph.",".$f_name.",".$f_id.",".$f_no.",".$m_name.",".$m_id.",".$m_no.",".$b_no.",".$address.");";

if ($conn->query($sql) === TRUE) {

	echo "<script>alert('Details Entered!!!');</script>";
 // echo "THANK YOU!!!!YOUR SUBMISSION HAS BEEN RECORDED SUCCESSFULLY.";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);
?>

    </body>
</html>
