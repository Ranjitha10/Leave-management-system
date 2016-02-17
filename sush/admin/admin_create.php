<!DOCTYPE html>
<html lang="en">
<head><title>Admin-Create</title>
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
    <!--LOADING SCRIPTS FOR PAGE--><!--Loading style vendors-->
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
				header("Location: admin_login.php");
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
							
                    <a id="logo" href="admin_home1.php" class="navbar-brand" style="font-size:19px;color:white">Leave Management System</a></div>
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

					<div align="center"><img src="rvce.jpg" align="middle"  width="150" height="150" class="img-responsive img-circle" alt="Leave Management System" /></div>
					<h4><font color="white" align="center"> Dept Of Information Science</font></h4>
                        
                        <li class="sidebar-heading" ><h4>Main Menu</h4></li>
                        <li><a href="admin_home1.php"><i class="fa fa-home fa-fw"></i>&nbsp;
                            Manage Accounts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="admin_create.php" style="color:blue">Create User Account</a></li>
                                <!--<li><a href="admin_delete.php">Delete User Account</a></li>-->
                               
                            </ul>
						
						<li><a href="admin_report.php">Staff Leave Report</a></li>
						<li><a href="admin_graph.php">Graph</a></li>	
						
                        </li>
					
                    </ul>
                </div>
            </nav>
            
            <!--END SIDEBAR MENU-->
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN PAGE HEADER & BREADCRUMB-->
                <div class="page-header-breadcrumb">
                    <div class="page-heading hidden-xs"><h1 class="page-title" style="color:blue">ADMINISTRATOR</h1></div>
                    <ol class="breadcrumb page-breadcrumb">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="admin_home1.php">Home</a>&nbsp;&nbsp;<i
                                class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>

                    </ol>
                </div>
                <!--END PAGE HEADER & BREADCRUMB-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
				
				
				
				
				<div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel">
                                            <div class="panel-heading" ><h2 align="center" style="color:blue" >Create User Accounts</h2></div>
                                            <div class="panel-body pan">
                                                <form action="admin_create.php" class="form-horizontal form-seperated " method="post">
                                                    
													<div class="form-body pal">	
															 
															<div class="form-group">
															<h4 class="col-md-3 control-h4"><font color="black">Title</font><span class='require'>*</span> </h4>
																<span class="col-md-9">
																	<select class="form-control" name="title" style="width:100px" > 
																	<option value="" selected="selected"></option>
																	<option value="1" >Dr.</option>
																	<option value="2" >Mrs</option>
																	<option value="3" >Mr</option>
																	<option value="4" >Ms</option>
																	</select>
																		<br>
															</span>
														
														</div>
														<br>
                                                        <div class="form-group"><h4 for="inputUsername"
                                                                                       class="col-md-3 control-h4"><font color="black">First Name</font>
                                                            <span class='require'>*</span></h4>

                                                            <div class="col-md-9">
                                                                <div class="input-icon"><i class="fa fa-user"></i><input
                                                                        name="fname" type="text" 
                                                                        placeholder="First name" class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>
														<br>
												            <div class="form-group"><h4 
                                                                                       class="col-md-3 control-h4"><font color="black">Last Name</font>
                                                            <span class='require'>*</span></h4>

                                                            <div class="col-md-9">
                                                                <div class="input-icon"><i class="fa fa-user"></i><input
                                                                        name="lname" type="text" 
                                                                        placeholder="Last name" class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>
														<br>
														<div class="form-group">
															<h4 class="col-md-3 control-h4"><font color="black">Gender</font><span class='require'>*</span> </h4>
																<span class="col-md-9">
																	<select class="form-control" name="gender" style="width:100px" > 
																	<option value="" selected="selected"></option>
																	<option value="1" >Male</option>
																	<option value="2" >Female</option>													
																	</select>
																		<br>
															</span>
														
														</div>
														
														<div class="form-group"><h4 
                                                                                       class="col-md-3 control-h4"><font color="black">Designation</font>
                                                            <span class='require'>*</span></h4>
															<span class="col-md-9">
																	<select class="form-control" name="post" style="width:250px" > 
																	<option value="" selected="selected"></option>
																	<option value="10">Associate Professor</option>	
																		<option value="10">Assistant Professor</option>											
																	</select>
																	<br>
															</span>
                                                            
															<br>
                                                        </div>
																		<br>			
																		<div class="form-group">
															<h4 class="col-md-3 control-h4"><font color="black">Department</font><span class='require'>*</span> </h4>
																<span class="col-md-9">
																	<select class="form-control" name="dept" style="width:250px" > 
																	<option value="" selected="selected"></option>
																		<option value="10">Information Science & Engineering</option>											
																	</select>
																	<br>
															</span>
															
														</div>
														<br>
													
												        <div class="form-group">
															<h4 class="col-md-3 control-h4"><font color="black">Teaching/Non-Teaching</font><span class='require'>*</span> </h4>
															<span class="col-md-9">
															<input name="teach"  type="radio" value="1" />
															<label  class="choice" ><font color="black">Teaching</font></label>
															&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
															<input name="teach"  type="radio" value="2" />
															<label class="choice"><font color="black">Non-Teaching</font></label>
															</span> 
															<br>
														</div>	
															<br>
														<div class="form-group">
															<h4 class="col-md-3 control-h4" ><font color="black">Permanent/Temporary</font><span class='require'>*</span> </h4>
															<span class="col-md-9">
															<input name="perm"  type="radio" value="1" />
															<label class="choice" ><font color="black">Permanent</font></label>
															&nbsp; &nbsp;
															<input name="perm"  type="radio" value="2" />

															<label class="choice" ><font color="black">Temporary</font></label>
															
															</span> 
															<br>
														</div>			
														<br>
                                                        <div class="form-group"><h4 for="inputEmail"
                                                                                       class="col-md-3 control-h4"><font color="black">Email</font>
                                                            <span class='require'>*</span></h4>

                                                            <div class="col-md-9">
                                                                <div class="input-group"><span
                                                                        class="input-group-addon"><i
                                                                        class="fa fa-envelope"></i></span><input
                                                                        
																		type="email"
																		name="email"		
																		placeholder="Email Address"
                                                                        class="form-control"/></div>
                                                            </div>
                                                        </div>
													
														<br>
                                       	
										
										<div class="col-lg-12">
                                        <div class="panel panel-white" align="center" font-style="bold">
                                            <div class="panel-heading" style="color:blue">Account Details</div>
                                            </div>
											
											<div class="form-group"><h4  class="col-md-3 control-h4"><font color="black">Username</font>
                                                            <span class='require'>*</span></h4>

                                                            <div class="col-md-9">
                                                                <div class="input-group"><span
                                                                        class="input-group-addon"><i class="fa fa-user"></i></span><input
                                                                        type="text" placeholder="Username" 
																		name="username"
                                                                        class="form-control"/></div>
                                                            </div>
                                                        </div>
											
											<div class="form-group"><h4  class="col-md-3 control-h4"><font color="black">Password</font>
                                                            <span class='require'>*</span></h4>

                                                            <div class="col-md-9">
                                                                <div class="input-group"><span
                                                                        class="input-group-addon"></span><input
                                                                        type="password" placeholder="Password" 
																		name="password"
                                                                        class="form-control"/></div>
                                                            </div>
                                                        </div>
														
														
											
											<div class="form-group"><h4  class="col-md-3 control-h4"><font color="black">Confirm Password</font>
                                                            <span class='require'>*</span></h4>

                                                            <div class="col-md-9">
                                                                <div class="input-group"><span
                                                                        class="input-group-addon"></span><input
                                                                        type="password" placeholder="Confirm Password" 
																		name="confirmPassword"
                                                                        class="form-control"/></div>
                                                            </div>
                                                        </div>			
														
											
												
                                                    <div class="form-actions">
                                                        <div class="col-md-offset-3 col-md-9">
														<input id="saveForm" class="btn btn-orange btn-outlined" type="submit" name="submit" value="Submit" />
			  
                                                            
                                                           
                                                        </div>
                                                    </div>
													</div>
                                                </form>

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
<script src="vendors/jquery-validation/dist/jquery.validate.js"></script>
<script src="js/form-validation.js"></script>
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
$con=@mysql_connect("localhost","root","");
if(!$con){return false;}
if(!mysql_select_db("leave_man",$con)){return false;}
if(isset($_POST["title"])&&isset($_POST["fname"])&&isset($_POST["lname"])&&isset($_POST["gender"])&&isset($_POST["post"])&&isset($_POST["dept"])&&isset($_POST["teach"])&&isset($_POST["perm"])&&isset($_POST["email"])&&isset($_POST["username"])&&isset($_POST["password"])&&isset($_POST["confirmPassword"]))   
{
	$title=$_POST["title"];$fname=$_POST["fname"];	$lname=$_POST["lname"];	$gender=$_POST["gender"];	$post=$_POST["post"];
	

	
	if($_POST["teach"] == "1")
	{	$type1="Teaching";	}
	else	{$type1="Non-Teaching";}
	
	
	
	if($_POST["perm"] == "1")	{$type2="Permanent";	}
	else	{$type2="Temporary";}
		
	$dept=$_POST["dept"]; $email=$_POST["email"];	
	$username=$_POST["username"];	$pwd=$_POST["password"];	$rpwd=$_POST["confirmPassword"];
	
	
	
	if($type1=="Teaching")
	{
		if($type2=="Permanent") 
			{
				$staff_type="teaching permanent";
				$desgn=1;
			}
		else 
			{
				$staff_type="teaching temporary";
				$desgn=2;
			}
	}
	else
		{
			if($type2=="Permanent") 
			{	
				$staff_type="non-teaching permanent";
				$desgn=3;
			}
			else 
			{
				$staff_type="non-teaching temporary";
				$desgn=4;
			}
	}
	switch($dept)
	{
			case 1 :$dept="Administration";break;
			case 2 :$dept="Architecture";break;
            case 3 :$dept="biotechnology";break;
            case 4 :$dept="Chemical Engineering";break;
            case 5 :$dept="Civil Engineering";break;
			case 6 :$dept="Computer Science Engineering";break;
            case 7 :$dept= "Electrical and Electronics Engineering";break;
            case 8 :$dept="Electronics & Communication Engineering";break;
            case 9 :$dept="Industrial Engineering & Management";break;
			case 10 :$dept="Information Science & Engineering";break;
            case 11 :$dept="Instrumentation Technology";break;
	}
	
	switch($title)
	{
		case 1:$title="Dr.";break;
		case 2:$title="Mrs.";break;
		case 3:$title="Mr.";break;
		case 4:$title="Ms.";break;
	}
	
	if($gender==1) $gender="Male"; else $gender="Female";
	if($pwd!=$rpwd) {
						echo '<script language="javascript">';
						echo 'alert("Passwords Do not match")';
						echo '</script>';
						$welcome="inserterrorB.html";
					}	
	else
	{
	$namepattern = "/^[[:alpha:].’ -]{2,15}$/";

if (!preg_match($namepattern, $fname))
{ 
$bool='1';
echo 'alert("enter proper firstname")';
 }

else
{

		$query1="INSERT INTO staff VALUES('$username','$fname','$lname','$title','$gender','$post','$dept','$staff_type','$email','$desgn')";
		$query2="INSERT INTO login VALUES('$username','$pwd')";
		if($query_run=mysql_query($query1))
		{
			if($query_run=mysql_query($query2))
			
			{
		
			$query1="SELECT cl FROM leave_structure WHERE dno=$desgn";
			$query_run=mysql_query($query1);
			$query_data=mysql_fetch_assoc($query_run);
			$cl=$query_data["cl"];
			$query1="SELECT rh FROM leave_structure WHERE dno=$desgn";
			$query_run=mysql_query($query1);
			$query_data=mysql_fetch_assoc($query_run);
			$rh=$query_data["rh"];
			$query1="SELECT el FROM leave_structure WHERE dno=$desgn";
			$query_run=mysql_query($query1);
			$query_data=mysql_fetch_assoc($query_run);
			$el=$query_data["el"];
			$query1="SELECT co FROM leave_structure WHERE dno=$desgn";
			$query_run=mysql_query($query1);
			$query_data=mysql_fetch_assoc($query_run);
			$co=$query_data["co"];
			$query1="INSERT INTO leave_balance VALUES('$username',$cl,$rh,$el,$co,0,0,0,0)";
			$query_run=mysql_query($query1);
	
			}
			echo '<script language="javascript">';
			echo 'alert("User Account Created")';
			echo '</script>';
			$welcome="insertsuccessful.html";
		}
		else	
		
			echo '<script language="javascript">';
			
			echo 'alert("Username already exists")';
			echo '</script>';
		$welcome="inserterrorA.html";
	}
	if($bool=='1')
	{
	echo 'alert("enter valid name")';}
}
}
else


//echo'<div class="modal">';
//echo'<div class="modal-body"><p>Enter All Fields</p></div>';
//echo'<div class="modal-footer">';
//echo'<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
//echo'</div></div><!-- /.modal -->';
	//	echo'<div class="modal">';
		echo '<script language="javascript">';
			echo 'alert("Enter all fields")';
			echo '</script>';
		//	echo'</div>';
			
 	
$welcome="inserterrorC.html";
//header('Location: '.$welcome);}
?>


</body>
</html>
