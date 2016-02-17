<!DOCTYPE HTML>
<html>
<head>
	 
        <title>Login</title>
            
    </head>
        <br>
     <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<body bgcolor="#0a7f99">
   
<center>
      <form method="post" action="" >
					<table>
					<tr><td style="color:white"><B><font size=7.5> Student Login</font></B></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>User Name:</font></td><td><input type="text" name="name"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Password:</font></td><td><input type="password" name="pass"/></td></tr>	
							<tr><td><br></td></tr>
							<tr><td><br></td></tr>
					<tr><td>      </td><td><input type="submit" name="submit" value="Sign in"></td></tr>
					
					</table>
					</form>		
					</center> 


</body>
</html>
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "counsellor";

$error='';
if(isset($_POST['submit']))
{
	if(empty($_POST['name']) || empty($_POST['pass']))
		$error= "username or password invalid";
}

else
{
	$name=$_POST['name'];
	$pass=$_POST['pass'];	

}


//$_SESSION["name"]=$_POST['name1'];
//$_SESSION["u_pass"]=$_POST['pass1'];

//$name=$_POST['name1'];
//$pass=$_POST['pass1'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from counsellor.student where user_name=$name and pwd=$pass";
$result=$conn->query($sql);

$row=mysql_fetch_array($result);

echo $row["name"];

if(is_array($row))
{
$_SESSION["name"]=$row["name"];
}

//$_SESSION["name"]=$name;

else
{
$error="username or password is invalid";
}


//echo $_SESSION["name"];

if(!isset($_SESSION["name"])){
ob_start();
header("Location: http://localhost/student_view.php");
exit();
}
/*
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		if(strcmp($row["user_name"],$_SESSION["name"])==0 && strcmp($row["pwd"],$pass)==0)
		{
			//echo "LOGGED IN!!!";
			break;
		}

		//echo $row["name"]."<br>";
	}
	//echo "WRONG USERNAME AND PASSWORD COMBINATION"
}

if ($conn->query($sql) == TRUE) {
  //echo "THANK YOU!!!!YOUR SUBMISSION HAS BEEN RECORDED SUCCESSFULLY.";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

*/
echo"end";
mysqli_close($conn);
?>

