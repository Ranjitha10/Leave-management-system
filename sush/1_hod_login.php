<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CDM</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>


<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><i><a href="#">Counsellor Details Management</a></i></h1>
		</div>
	</div>
</div>
<div id="page-wrapper">
	<div id="welcome" class="container">
		<p><b><font size=5.8>HOD login</font><b></p>
		
		<form method="post" action="1_hod_temp.php" >
				<center>
					<table>
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
				<center>
		</form>	
		
	</div>
</div>
<div class="wrapper">
	
	
</div>

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "richa";
$dbname = "counsellor";

$_SESSION["name1"]=$_POST['name'];
//$_SESSION["u_pass"]=$_POST['pass'];

//$name=$_POST['name'];
$pass=$_POST['pass'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*
$sql = "select * from counsellor.student";
$result=$conn->query($sql);

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
}*/
//header("Location : student_view.php");	
//echo $_SESSION["name1"];

mysqli_close($conn);
?>

</body>
</html>
