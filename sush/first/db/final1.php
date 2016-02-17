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
<?php
$servername = "localhost";
$username = "root";
$password = "richa";
$dbname = "test";

$name=$_POST['name'];
$pass=$_POST['pass'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login VALUES ('$name','$pass')";

if ($conn->query($sql) === TRUE) {
  //echo "THANK YOU!!!!YOUR SUBMISSION HAS BEEN RECORDED SUCCESSFULLY.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);
?>

</body>
</html>
