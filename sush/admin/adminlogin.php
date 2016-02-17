<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LMS</title>
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
			<h1><i><a href="#">Leave Management System</a></i></h1>
		</div>
	</div>
</div>
<div id="page-wrapper">
	<div id="welcome" class="container">
		<p><b><font size=5.8>Admin login</font><b></p>
		
		<form method="post" action="1_coun_temp.php" >
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

</body>
</html>



<?php
$con=@mysql_connect("localhost","root","");
if(!$con){return false;}
if(!mysql_select_db("leave_man",$con)){return false;}
	/*if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die('Could not connect to MySQL: ' . mysql_error()); 
	}*/
if(isset($_POST["username"])&&isset($_POST["password"]))
{
	$username=$_POST["username"];
	$password=$_POST["password"];
	if(!empty($username)&&!empty($password))
	{
		session_start();
		$_SESSION["username"]=$username;
		$_SESSION["password"]=$password;

	
		$query="SELECT password FROM login where staff_id='$username'";
		if($query_run=mysql_query($query))
		{
			$query_data=mysql_fetch_assoc($query_run);
			if($query_data["password"]==$password && $username=="admin")
			{
				$welcome='admin_home1.php';
				header('Location: '.$welcome);
			}
			else
			{
				echo '<script language="javascript">';
					echo 'alert("Invalid Username or Password")';
					echo '</script>';
			}
		}
		else
		{
			echo '<script language="javascript">';
					echo 'alert("Invalid Username or Password")';
					echo '</script>';
		}
	}
	else
	{
		echo '<script language="javascript">';
					echo 'alert("Invalid Username or Password")';
					echo '</script>';
	}

}
?>
