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
$usnErr = $user_nameErr = $passwordErr = "";
$usn = $user_name = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["usn"])) {
     $usnErr = "USN is required";
   } else {
     $usn = test_input($_POST["usn"]);
     if (!preg_match("/^[a-zA-Z0-9]*$/",$usn)) {
       $usnErr = "Only letters and digits are allowed"; 
     }
   }
  
  if (empty($_POST["user_name"])) {
     $user_nameErr = "User Name is required";
   } else {
     $user_name = test_input($_POST["user_name"]);
    
     if (!preg_match("/^[a-zA-Z]*$/",$user_name)) {
       $user_nameErr = "Only letters allowed"; 
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
					<tr><td><b><font color="white" size=6>Student details:</font></b></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>USN :</font></td><td><input type="text" name="usn" value="<?php echo $usn;?>">
   <span class="error"> <?php echo $usnErr;?></span></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>User name :</font></td><td><input type="text" name="user_name" value="<?php echo $user_name;?>">
   <span class="error"> <?php echo $user_nameErr;?></span></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Password :</font></td><td><input type="password" name="password"/>
					 
							</td></tr>	
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
//echo $_SESSION["name1"];  

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
$u_name=$_SESSION["name1"];

$usn=$_POST['usn'];

$sql2 = "select * from counsellor.student1 where user_name='" . $_POST['user_name'] . "'"; 
$result6 = mysql_query($sql2); 
if (mysql_num_rows($result6) >= 1) { 
 $user_nameErr = "please enter another username";
 exit(); 
}
$user_name=$_POST['user_name'];
$password=md5($_POST['password']);


$sql1= "select * from counsellor.staff"; 
$result=$conn->query($sql1);
$row=$result->fetch_array(MYSQLI_ASSOC);
  
if(!(strcmp($row["user_name"],$u_name)))
{
echo $row["batch"];
$batch=$row["batch"];
$sql = "insert into counsellor.student1 values('$usn',$user_name, $password ,$batch)";

}
if ($conn->query($sql) == TRUE) {
 echo "<script>alert('Details Entered!!!');</script>";
} else {
}


mysqli_close($conn);
?>
    </body>
</html>