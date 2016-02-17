<html>
    <head>
		<title>Student Details</title>
				
    </head>
        <br>
		<br>
		<br>
		<br>
		<br>
     <body bgcolor="#0a7f99">
	 <?php
session_start(); 
$usn2=$_SESSION["usn2"];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "counsellor";
$nameErr = $dobErr = $sexErr = $yoaErr = $usnErr = $e_idErr = $phErr = $addressErr = $modeErr = $rankErr = $fnameErr = $fnoErr = $fidErr = $mnameErr = $mnoErr = $mid = $batchErr = "";
$name = $dob = $sex = $yoa = $usn = $e_id = $ph = $address = $mode = $rank = $fname = $fno = $fid = $mname = $mno = $mid = $batch = "";


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
     $yoaErr = "year of admission is required";
   } else {
     $yoa = test_input($_POST["yoa"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[0-9]{4}$/",$yoa)) {
       $yoaErr = "invalid value"; 
     }
   }
   
  
   if (empty($_POST["e_id"])) {
     $e_idErr = "Email is required";
   } else {
     $e_id = test_input($_POST["e_id"]);
     if (!filter_var($e_id, FILTER_VALIDATE_EMAIL)) {
       $e_idErr = "Invalid email format"; 
     }
   }

   if (empty($_POST["ph"])) {
     $phErr = "phone no is required";
   } else {
     $ph = test_input($_POST["ph"]);
     
     if (!preg_match("/^[7-9]{1}+[0-9]{9}$/",$ph)) {
       $phErr = "invalid phone no"; 
     }
   }
	
 if (empty($_POST["rank"])) {
     $rankErr = "rank is required";
   } else {
     $rank = test_input($_POST["rank"]);
     
     if (!preg_match("/^[0-9]{4,6}$/",$rank)) {
       $rankErr = "invalid"; 
     }
   }
   
  if (empty($_POST["fname"])) {
     $fnameErr = "Name is required";
   } else {
     $fname = test_input($_POST["fname"]);
     
     if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
       $fnameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["fno"])) {
     $fnoErr = "phone no is required";
   } else {
     $fno = test_input($_POST["fno"]);
    
     if (!preg_match("/^[7-9]{1}+[0-9]{9}$/",$fno)) {
       $fnoErr = "invalid phone no"; 
     }
   }
  
   if (empty($_POST["fid"])) {
     $fidErr = "Email is required";
   } else {
     $fid = test_input($_POST["fid"]);
    if (!filter_var($fid, FILTER_VALIDATE_EMAIL)) {
       $fidErr = "Invalid email format"; 
     }
   }
   
   if (empty($_POST["mname"])) {
     $mnameErr = "Name is required";
   } else {
     $mname = test_input($_POST["mname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$mname)) {
       $mnameErr = "Only letters and white space allowed"; 
     }
   }

   if (empty($_POST["mno"])) {
     $mnoErr = "phone no is required";
   } else {
     $mno = test_input($_POST["mno"]);
   
     if (!preg_match("/^[7-9]{1}+[0-9]{9}$/",$mno)) {
       $mnoErr = "invalid no"; 
     }
   }
   
   if (empty($_POST["batch"])) {
     $batchErr = "batch no is required";
   } else {
     $batch = test_input($_POST["batch"]);
    
     if (!preg_match("/^[0-9]{1,2}$/",$batch)) {
       $batchErr = "invalid batch no"; 
     }
   }
  
   if (empty($_POST["mid"])) {
     $midErr = "Email is required";
   } else {
     $mid = test_input($_POST["mid"]);
     // check if e-mail address is well-formed
     if (!filter_var($mid, FILTER_VALIDATE_EMAIL)) {
       $midErr = "invalid emailformat"; 
     }
   }
  } 
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['Submit']))
{
$result1= $conn->query("select * from counsellor.student");

while($row1=$result1->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($row1["usn"],$usn2)))
	{
					$name=$row1["name"];
						$dob=$row1["dob"];
						$sex=$row1["sex"];
						$yoa=$row1["yoa"];
						$usn=$row1["usn"];
						
						$batch=$row1["batch"];
						$e_id=$row1["e_id"];
						$ph=$row1["ph"];
						$address=$row1["address"];
						$mode=$row1["mode"];
						$rank=$row1["rank"];
						$fname=$row1["fname"];
						$fid=$row1["fid"];
						$fno=$row1["fno"];
						$mname=$row1["mname"];
						$mid=$row1["mid"];
						$mno=$row1["mno"];

           				$name1=$_POST["name"]; 
						$dob1=$_POST["dob"];
						$sex1=$_POST["sex"];
						$yoa1=$_POST["yoa"];
						$usn1=$row1["usn"];
						$batch1=$_POST["batch"];
						$e_id1=$_POST["e_id"];
						$ph1=$_POST["ph"];
						$address1=$_POST["address"];
						$mode1=$_POST["mode"];
						$rank1=$_POST["rank"];
						$fname1=$_POST["fname"];
						$fid1=$_POST["fid"];
						$fno1=$_POST["fno"];
						$mname1=$_POST["mname"];
						$mid1=$_POST["mid"];
						$mno1=$_POST["mno"];
						
						$sql = "update counsellor.student set name=$name1, dob = $dob1, sex=$sex1, yoa=$yoa1,  e_id='$e_id1', ph=$ph1, address='$address1', mode=$mode1, rank=$rank1, fname=$fname1,  fno=$fno1,fid='$fid1', mname=$mname1, mno=$mno1, mid='$mid1'  where usn='$usn1'";
				}	
			}
		if ($conn->query($sql) == TRUE) {
	echo "<script>alert('Details updated!!!');</script>";
}
    }
-
mysqli_close($conn);	
?>

<center>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
					<tr><td><font color="white" size=5.8>Year of Admission:</font></td><td><input type="year" name="yoa" value="<?php echo $yoa;?>">
   <span class="error"><?php echo $yoaErr;?></span></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Email ID:</font></td><td><input type="text" name="e_id" value="<?php echo $e_id;?>">
   <span class="error"> <?php echo $e_idErr;?></span></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Phone no:</font></td><td><input type="text" name="ph" value="<?php echo $ph;?>">
   <span class="error"> <?php echo $phErr;?></span></td></tr>	
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
					<tr><td><font color="white" size=5.8>Rank:</font></td><td><input type="text" name="rank" value="<?php echo $rank;?>">
   <span class="error"> <?php echo $rankErr;?></span></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Father's Name:</font></td><td><input type="text" name="fname" value="<?php echo $fname;?>">
   <span class="error"><?php echo $fnameErr;?></span></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Father's Contact No.:</font></td><td><input type="text" name="fno" value="<?php echo $fno;?>">
   <span class="error"><?php echo $fnoErr;?></span></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Father's Email ID:</font></td><td><input type="text" name="fid"/></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Mother's Name:</font></td><td><input type="text" name="mname" value="<?php echo $mname;?>">
   <span class="error"> <?php echo $mnameErr;?></span></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Mother's Contact No.:</font></td><td><input type="int" name="mno" value="<?php echo $mno;?>">
   <span class="error"><?php echo $mnoErr;?></span></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Mother's Email ID:</font></td><td><input type="text" name="mid" value="<?php echo $mid;?>">
   <span class="error"><?php echo $midErr;?></span></td></tr>	
							<tr><td><br></td></tr>
					
							<tr><td><br></td></tr>
					<tr><td>      </td><td><input type="submit" value="Submit"></td></tr>
					
					</table>
					</form>		
					</center>          
   
</body>
</html>