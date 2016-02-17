<html>
    <head>
		<title>Counsellor-Batch Details</title>
	</head>
        <br>
		<br>
		<br>
		<br>
		<br>
     <body bgcolor="#0a7f99">
	 <?php
$s_nameErr = $s_idErr = $user_nameErr = $passErr = $batchErr = "";
$s_name = $s_id = $user_name = $pass = $batch = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
	if (empty($_POST["s_name"])) {
     $s_nameErr = "Staff Name is required";
   } else {
     $s_name = test_input($_POST["s_name"]);
    
     if (!preg_match("/^[a-zA-Z ]*$/",$s_name)) {
       $s_nameErr = "Only letters allowed"; 
     }
   }
   
   if (empty($_POST["s_id"])) {
     $s_idErr = "Staff Id is required";
   } else {
     $s_id = test_input($_POST["s_id"]);
     if (!preg_match("/^[a-zA-Z0-9]*$/",$s_id)) {
       $s_idErr = "Only letters and numbers allowed"; 
     }
   }
   
	if (empty($_POST["user_name"])) {
     $user_nameErr = "Name is required";
   } else {
     $user_name = test_input($_POST["user_name"]);
     
     if (!preg_match("/^[a-zA-Z]*$/",$user_name)) {
       $user_nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["batch"])) {
     $batchErr = "Batch is required";
   } else {
     $batch = test_input($_POST["batch"]);
     if (!preg_match("/^[1-9]{1,2}*$/",$batch)) {
       $batchErr = "invalid"; 
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
					<tr><td><b><font color="white" size=6>Counsellor-Batch details:</font></b></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>STAFF Name :</font></td><td><input type="text" name="s_name" value="<?php echo $s_name;?>">
   <span class="error"> <?php echo $s_nameErr;?></span></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>STAFF ID:</font></td><td><input type="text" name="s_id" value="<?php echo $s_id;?>">
   <span class="error"> <?php echo $s_idErr;?></span></td></tr>
								<tr><td><br></td></tr>
								<tr><td><font color="white" size=5.8>User Name :</font></td><td><input type="text" name="user_name" value="<?php echo $user_name;?>">
   <span class="error"> <?php echo $user_nameErr;?></span></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Password:</font></td><td><input type="password" name="pass"/>
					 
							</td></tr>	
							<tr><td><br></td></tr>
							<tr><td><font color="white" size=5.8>Batch:</font></td><td><input type="text" name="batch" value="<?php echo $batch;?>">
   <span class="error"> <?php echo $batchErr;?></span></td></tr>
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
$password = "";
$dbname = "counsellor";

$s_name=$_POST["s_name"];echo $s_name;
$s_id=$_POST["s_id"];echo $s_id;
$user_name=$_POST["user_name"];echo $user_name;
$pass=md5($_POST["pass"]);
$batch=$_POST["batch"];echo $batch;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/*$batch;
$sql1= "select * from counsellor.st";
$result1= $conn->query($sql1);

while($row1=$result1->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($row1["user"],$u_name)))
	{
		$batch=$row1["batch"];	
		$sql = "insert into counsellor.student1 values('$usn','$user_name',$pass,$batch)";
	}
}*/
$sql2 = "select * from counsellor.st"; 
$result2 = mysql_query($sql2); 

while($row1=$result2->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($row1["user"],$user_name)))
	{
		$user_nameErr = "please enter another username"; 
		exit(); 
	}
}

$sql = "insert into counsellor.st values ('$s_name','$s_id','$user_name','$pass',$batch)";

if ($conn->query($sql) == TRUE) {

	echo "<script>alert('Details Entered!!!');</script>";
 // echo "THANK YOU!!!!YOUR SUBMISSION HAS BEEN RECORDED SUCCESSFULLY.";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);
?>
    </body>
</html>