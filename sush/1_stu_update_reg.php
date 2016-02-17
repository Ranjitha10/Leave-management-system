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
     <body>
	 <?php
	 $flag=1;
$nameErr = $dobErr = $sexErr = $yoaErr = $usnErr = $e_idErr = $phErr = $addressErr = $modeErr = $rankErr = $f_nameErr = $f_noErr = $f_idErr = $m_nameErr = $m_noErr = $m_id = $b_noErr = "";
$name = $dob = $sex = $yoa = $usn = $e_id = $ph = $address = $mode = $rank = $f_name = $f_no = $f_id = $m_name = $m_no = $m_id = $b_no = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {$flag=0;
       $nameErr = "Only letters and white space allowed"; 
     }
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
   
if (empty($_POST["m_id"])) {
     $m_idErr = "Email is required";
   } else {
     $m_id = test_input($_POST["m_id"]);
     // check if e-mail address is well-formed
     if (!filter_var($m_id, FILTER_VALIDATE_EMAIL)) {
       $m_idErr = "Invalid email format"; 
     }
   }
   
   
   if (empty($_POST["f_id"])) {
     $f_idErr = "Email is required";
   } else {
     $f_id = test_input($_POST["f_id"]);
    if (!filter_var($f_id, FILTER_VALIDATE_EMAIL)) {
       $f_idErr = "Invalid email format"; 
     }
   }
   
   if (empty($_POST["rank"])) {
     $rankErr = "rank is required";
   } else {
     $rank = test_input($_POST["rank"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[0-9]{4,6}$/",$rank)) {
       $rankErr = "invalid"; 
     }
   }
   
   if (empty($_POST["ph"])) {
     $phErr = "phone no is required";
   } else {
     $ph = test_input($_POST["ph"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[7-9]{1}+[0-9]{9}$/",$ph)) {
       $phErr = "invalid phone no"; 
     }
   }
   
   if (empty($_POST["f_name"])) {
     $f_nameErr = "Name is required";
   } else {
     $f_name = test_input($_POST["f_name"]);
     
     if (!preg_match("/^[a-zA-Z ]*$/",$f_name)) {
       $f_nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["f_no"])) {
     $f_noErr = "phone no is required";
   } else {
     $f_no = test_input($_POST["f_no"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[7-9]{1}+[0-9]{9}$/",$f_no)) {
       $f_noErr = "invalid phone no"; 
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

   if (empty($_POST["m_no"])) {
     $m_noErr = "phone no is required";
   } else {
     $m_no = test_input($_POST["m_no"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[7-9]{1}+[0-9]{9}$/",$m_no)) {
       $m_noErr = "invalid no"; 
     }
   }
   
   $sex = test_input($_POST["sex"]);
   $yoa = test_input($_POST["yoa"]);
  $ph = test_input($_POST["ph"]);
  $address = test_input($_POST["address"]);
  $dob = test_input($_POST["dob"]);
   $rank = test_input($_POST["rank"]);
   $e_id = test_input($_POST["e_id"]);
   $f_name = test_input($_POST["f_name"]);
   $f_no = test_input($_POST["f_no"]);
   $m_name = test_input($_POST["m_name"]);
   $f_id = test_input($_POST["f_id"]);
   $m_no = test_input($_POST["m_no"]);
   $m_id = test_input($_POST["m_id"]);
  /*
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
  if(!(preg_match("/[^0-9]/", '', $ph)) && strlen($ph) == 10)
{
  $phErr = "Invalid phone number";
}
//if (!preg_match("/^[0-9]*$/",$ph)) 
  //{
 //   $phErr = "Only numbers allowed"; 
 // } 
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
   }*/
  } 
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
 ?>
	 
<center>
      <form method="post" action="" >
					<table>
					<tr><td><b><font color="white" size=6>Enter the following details:</font></b></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Name:</font></td><td><input type="text" name="name" required="required" value="<?php echo $name;?>">
   <span class="error"> <?php echo $nameErr;?></span></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>DOB:</font></td><td><input type="int" name="dob" required="required" value="<?php echo $dob;?>"></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Sex:</font></td><td>
					<input type="radio" name="sex" value="Male"><font color="White" size=4>Male</font></input>
					<input type="radio" name="sex" value="Female"><font color="White" size=4>Female</font></input>
					</td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Year of Admission:</font></td><td><input type="text" name="yoa" required="required" value="<?php echo $yoa;?>">
   <span class="error"><?php echo $yoaErr;?></span></td></tr>
								
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Email ID:</font></td><td><input type="text" name="e_id" required="required" value="<?php echo $e_id;?>">
   <span class="error"> <?php echo $e_idErr;?></span></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Phone no:</font></td><td><input type="text" name="ph" required="required" value="<?php echo $ph;?>">
   <span class="error"> <?php echo $phErr;?></span></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Address:</font></td><td><textarea rows=4 name="address" required="required" value="<?php echo $address;?>" cols=50></textarea></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Mode of Admission :</font></td><td><select id="text" name="mode"/>
					 
						<option value='-1'>Select</option> 
						<option value='CET'>CET</option>
						<option value='COMEDK'>COMEDK</option>
						<option value='MQ'>MQ</option>
					</select>
							</td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Rank:</font></td><td><input type="text" name="rank" required="required" value="<?php echo $rank;?>">
   <span class="error"> <?php echo $rankErr;?></span></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Father's Name:</font></td><td><input type="text" name="f_name" required="required" value="<?php echo $f_name;?>">
   <span class="error"><?php echo $f_nameErr;?> </td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Father's Contact No.:</font></td><td><input type="text" name="f_no" required="required" value="<?php echo $f_no;?>">
   <span class="error"><?php echo $f_noErr;?></span></td></tr>	
						</td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Father's Email ID:</font></td><td><input type="text" name="f_id" required="required" value="<?php echo $f_id;?>">
   <span class="error"> <?php echo $f_idErr;?></span></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Mother's Name:</font></td><td><input type="text" name="m_name" required="required" value="<?php echo $m_name;?>">
   <span class="error"> <?php echo $m_nameErr;?></span></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Mother's Contact No.:</font></td><td><input type="text" name="m_no" required="required" value="<?php echo $m_no;?>">
   <span class="error"><?php echo $m_noErr;?></span></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Mother's Email ID:</font></td><td><input type="text" name="m_id" required="required" value="<?php echo $m_id;?>">
   <span class="error"> <?php echo $m_idErr;?></span></td></tr>	
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
session_start();
$u_name=$_SESSION["name1"];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "counsellor";

$name=$_POST["name"];echo $name;
$dob=$_POST["dob"];echo $dob;
$sex=$_POST["sex"];echo $sex;
$yoa=$_POST["yoa"];echo $yoa;
$e_id=$_POST["e_id"];echo $e_id;
$ph=$_POST["ph"];echo $ph;
$address=$_POST["address"];echo $address;
$mode=$_POST["mode"];echo $mode;
$rank=$_POST["rank"];echo $rank;
$f_name=$_POST["f_name"];echo $f_name;
$f_no=$_POST["f_no"];echo $f_no;
$f_id=$_POST["f_id"];echo $f_id;
$m_name=$_POST["m_name"];echo $m_name;
$m_no=$_POST["m_no"];echo $m_no;
$m_id=$_POST["m_id"];echo $m_id;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result1= $conn->query("select * from counsellor.student");

while($row1=$result1->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($row1["user_name"],$u_name)))
	{
		$usn=$row1["usn"];	
	}
}

$sql = "insert into counsellor.student1 values('$name',$dob,'$sex',$yoa,'$usn',1,'$e_id',$ph,'$address','$mode',$rank,'$f_name','$f_id',$f_no,'$m_name','$m_id',$m_no)";
  
//$sql = "insert into counsellor.student1 values('richa',9,'f',99,'67',33,'ds',99,'dws','efs',4,'d','ds',4,'sdv','sef',44)";
  if($flag==1){
if ($conn->query($sql) == TRUE) {

	echo "<script>alert('Details Entered!!!');</script>";
 // echo "THANK YOU!!!!YOUR SUBMISSION HAS BEEN RECORDED SUCCESSFULLY.";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
}

mysqli_close($conn);
?>

    </body>
</html>
