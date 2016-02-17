<!DOCTYPE html>
<html lang="en">
<head><title>Sign In | Pages</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <!--Loading bootstrap css-->
    <link type="text/css"
          href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet"
          href="vendors/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css">
    <link type="text/css" rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="vendors/animate.css/animate.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/style-mango.css" id="theme-style">
    <link type="text/css" rel="stylesheet" href="css/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="css/vendors.css">
    <link type="text/css" rel="stylesheet" href="css/themes/grey.css" id="color-style">
    <link rel="shortcut icon" href="http://www.next-themes.com/mango/code/images/favicon.ico"> 
</head>
<body id="signin-page" style='background:#000000;' class="animated bounceInDown">
<div id="signin-page-content">
	<div align="center"><img src="rvce.jpg" align="middle"  width="100" height="100" class="img-responsive img-circle" alt="Leave Management System" /></div>
	
	<h2 class="block-heading" align="center">Leave Management System</h2>
	
    <form action="admin_login.php" class="form" method="post"><h3 class="block-heading" align="center">Sign In</h3>

        <p>Dear user, log in to access the admin area!</p>

        <div class="form-group">
            <div class="input-icon"><i class="fa fa-user"></i><input type="text" placeholder="Username" name="username"
                                                                     class="form-control"></div>
        </div>
        <div class="form-group">
            <div class="input-icon"><i class="fa fa-key"></i><input type="password" placeholder="Password"
                                                                    name="password" class="form-control"></div>
        </div>
        <div class="form-group">
           
        </div>
        <div class="form-group" align="center">
            <button type="submit" class="btn-lg btn-blue">Login
                &nbsp;<i class="fa fa-chevron-circle-right"></i></button>
           </div>
        <hr>
		 <div class="form-group" align="center">
            <a href="../LMS.html" class="btn-lg btn-green">Home</a>
           </div>
        
    </form>
</div>
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="../../../www.next-themes.com/mango/code/vendors/bootstrap-hover-dropdown.html"></script>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<script src="vendors/jquery-cookie/jquery.cookie.js"></script>
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
				$welcome='admin_home.php';
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
