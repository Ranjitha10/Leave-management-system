<!DOCTYPE html>
<html lang="en">
<head><title>Admin-Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <!--<link href="images/icons/favicon.ico" rel="shortcut icon">-->
    <!--Loading bootstrap css-->
    <link type="text/css"
          href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet"
          href="vendors/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css">
    <link type="text/css" rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <!--LOADING SCRIPTS FOR PAGE-->
	<link type="text/css" rel="stylesheet" href="vendors/fullcalendar/fullcalendar.css">
    <link type="text/css" rel="stylesheet" href="vendors/fullcalendar/fullcalendar.print.css">
	<!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="vendors/jquery-pace/pace.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/style-mango.css" id="theme-style">
    <link type="text/css" rel="stylesheet" href="css/vendors.css">
    <link type="text/css" rel="stylesheet" href="css/themes/default.css" id="color-style">
    <link type="text/css" rel="stylesheet" href="css/style-responsive.css">
    <link rel="shortcut icon" href="http://www.next-themes.com/mango/code/images/favicon.ico">
</head>
<body class="animated fadeIn">

	<?php
			session_start();
			if( !(isset($_SESSION['username'])) )
				header("Location: admin_login1.php");
		?>
    <div >
        <!--BEGIN TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP-->
        <!--BEGIN WRAPPER-->
        <div id="wrapper">
            <!--BEGIN TOPBAR-->
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" class="navbar navbar-default navbar-static-top">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span
                            class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span></button>
							
                    <a id="logo" href="admin1_home.php" class="navbar-brand" style="font-size:19px">Leave Management System</a></div>
                <div class="topbar-main"><a id="menu-toggle" href="#" class="btn hidden-xs"><i class="fa fa-bars"></i></a>
				

                    <ul class="nav navbar-top-links navbar-right">
                 
				 
                        <li class="dropdown hi"><a data-toggle="dropdown" href="#" class="dropdown-toggle"><img
                                src="images\user.jpg"	alt="" class="img-responsive img-circle"/>&nbsp;
                           <?php
			
				$con=@mysql_connect("localhost","root","");
			if(!$con){return false;}
			if(!mysql_select_db("leave_man",$con)){return false;}
			$usr=$_SESSION["username"];
			$query="SELECT title,f_name,l_name FROM staff WHERE staff_id='$usr'";
			$result=mysql_query($query);
			$row=mysql_fetch_assoc($result);
			echo  $row["title"] . " " . $row["f_name"] . " " . $row["l_name"] ;?>
                            &nbsp;<span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-user pull-right animated bounceInLeft">
                                <li>
                                    <div class="navbar-content">
                                        <div class="row">
                                            <div class="col-md-5 col-xs-5"><img
                                                    src="images\user.jpg" alt=""
                                                    class="img-responsive img-circle"/>

                                                
                                            </div>
                                            <div class="col-md-7 col-xs-5"><h4><?php
			
				$con=@mysql_connect("localhost","root","");
			if(!$con){return false;}
			if(!mysql_select_db("leave_man",$con)){return false;}
			$usr=$_SESSION["username"];
			$query="SELECT title,f_name,l_name FROM staff WHERE staff_id='$usr'";
			$result=mysql_query($query);
			$row=mysql_fetch_assoc($result);
			echo  $row["title"] . " " . $row["f_name"] . " " . $row["l_name"] ;?></h4>
											<div class="divider"></div>

                                               <div align="middle" ><a href="#" class="btn btn-primary btn btn-blue">Change
                                                    Password</a></div>
													<br>
                                       <div align="middle">     <span class="input-group-btn"><a href="adminlogout1.php" type="button" class="btn btn-green btn-sm">
                                            Sign out
                                        </a></span>

										<br>				
                                               
                                        </div>
                                    </div>
                                    
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--END TOPBAR-->
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
                <div class="sidebar-collapse menu-scroll">
                    <ul id="side-menu" class="nav">
				<li class="clock">
					<div align="center"><img src="rvce.jpg" align="middle"  width="150" height="150" class="img-responsive img-circle" alt="Leave Management System" /></div>
					
                  </li>   
						<h4><font color="white" align="center"> Dept Of Information Science</font></h4>	
                        <li class="sidebar-heading"><h4>Main Menu</h4></li>
                        <li><a href="admin_home1.php"><i class="fa fa-home fa-fw"></i>&nbsp;
                            Manage Accounts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="admin_create.php">Create User Account</a></li>
                                <li><a href="admin_delete.php">Delete User Account</a></li>
                               
                            </ul>
						
						<li><a href="admin_report.php">Staff Leave Report</a></li>
						<li><a href="admin_graph.php">Graph</a></li>	
						
                        </li>
					<!--<li class="clock">
						<strong id="get-date"></strong>

                            <div class="digital-clock">
                                
								
                                <div id="get-date" class="get-time" align="center"></div>
                                
                            </div>
                        </li>-->
                    </ul>
                </div>
            </nav>
            <!--END SIDEBAR MENU-->
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN PAGE HEADER & BREADCRUMB-->
                <div class="page-header-breadcrumb">
                    <div class="page-heading hidden-xs"><h1 class="page-title">ADMINISTRATOR</h1></div>
                    <ol class="breadcrumb page-breadcrumb">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="admin_home1.php">Home</a>&nbsp;&nbsp;<i
                                class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
								

                    </ol>
                </div>
                <!--END PAGE HEADER & BREADCRUMB-->
                <!--BEGIN CONTENT-->
                	<div class="page-content">
					
					
                
                <div class="page-content">
				<div align="middle">
                 <div class="panel panel-yellow">
                  <div class="panel-heading"><h2>Delete User Account</h2></div>
                   <div class="panel-body pan">
				<form  method="post" action="admin_delete.php">
					<div class="form_description">
						
					</div>						
					<ul>
			
					
						<label class="description"><h2>Username</h2> </label>
				<div>
					<br>
					
					<select  class="form control input-lg" type="text" style="width:160px;" name="usrnam" value="usrnam"/>
					<span>
				 
					<?php

						session_start();
						$con=@mysql_connect("localhost","root","");

					if(!$con){die("Error");}
					if(!mysql_select_db("leave_man",$con)){die("Error");}

					$usr=$_SESSION["username"];

					$q = "select staff_id,f_name,l_name from staff where staff_id!='admin'";
					$res = mysql_query($q);
					
					while($row = mysql_fetch_array($res)) {
					$sid = $row["staff_id"];
					$fname= $row["f_name"];
					$lname= $row["l_name"];
					echo("<option value='$sid'>".$sid."      - ".$fname." ".$lname."</option>");
					}
					
					?>
				</span>
				 </select>
				 <br>
				 <input type="text" name="dun" >
				<br><br>
				<br>
				<div>
				
				<br>
				 <input id="saveForm" class="btn btn-orange btn-lg" type="submit" name="submit" value="Delete" />
				</div>
				</div>
				</form>
				<?php
				$un=$_POST['dun'];
				echo $un;
				?>
				</div>
				</div>
				</div>
				</div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div class="page-footer">
                    <div class="copyright">2015 © LMS</div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
			</div>
				 
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div class="page-footer">
                    <div class="copyright">2015 © LMS</div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
</body>

<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<script src="vendors/metisMenu/jquery.metisMenu.js"></script>
<script src="vendors/slimScroll/jquery.slimscroll.js"></script>
<script src="vendors/jquery-cookie/jquery.cookie.js"></script>
<script src="js/jquery.menu.js"></script>
<script src="vendors/jquery-pace/pace.min.js"></script>
<!--LOADING SCRIPTS FOR PAGE-->
<script src="vendors/fullcalendar/fullcalendar.min.js"></script>
<script src="js/page-fullcalendar.js"></script>
<script src="js/transitions.js"></script>
<!--CORE JAVASCRIPT-->
<script src="js/app.js"></script>
<script src="js/main.js"></script>
<script src="js/holder.js"></script>
<script type="text/javascript">(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');
ga('create', 'UA-145464-11', 'next-themes.com');
ga('send', 'pageview');

</script>
<?php
error_reporting(0);
session_start();
$con=mysql_connect("localhost","root","");
if(!$con)
{echo  "Error Connecting server!";}

if(!mysql_select_db("leave_man",$con))	{echo " Error Selecting db"; }
if(!empty($_POST["dun"]))
{
if(!isset($_SESSION["username"]))
{
echo "Query Failed";
			echo '<script language="javascript">';
			echo 'alert("Invalid id or empty fields")';
			echo '</script>';
			$welcome="AdminDeleteError1.html";
}
else
{
$un=$_POST['dun']; 
$qrry="DELETE FROM leave_balance WHERE staff_id=$un";
$rssl=mysql_query($qrry);
$qry="DELETE FROM staff WHERE staff_id=$un";
$rslt=mysql_query($qry);
if(!$rssl||!rslt)
{
   echo "Query Failed";
			echo '<script language="javascript">';
			echo 'alert("not deleted")';
		
			echo '</script>';
			$welcome="AdminDeleteError1.html";
}
else 
{
echo '<script language="javascript">';
			echo 'alert("Deleted Successfully")';
			echo '</script>';
			$welcome="AdminDeleteSuccess.html";
}
}
}
else
{
echo '<script language="javascript">';
			echo 'alert("Enter all fields")';
			echo '</script>';
	$welcome="AdminDeleteError1.html";
}


?>

</html>