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
<body>
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
                    <a id="logo" href="index.html" class="navbar-brand" style="font-size:19px">Leave Management System</a></div>
                <div class="topbar-main"><a id="menu-toggle" href="#" class="btn hidden-xs"><i class="fa fa-bars"></i></a>

                    <ul class="nav navbar-top-links navbar-right">
                 
                        <li class="dropdown hi"><a data-toggle="dropdown" href="#" class="dropdown-toggle"><img
                                src="images\admin.png"	alt="" class="img-responsive img-circle"/>&nbsp;
                            Admin
                            &nbsp;<span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-user pull-right animated bounceInLeft">
                                <li>
                                    <div class="navbar-content">
                                        <div class="row">
                                            <div class="col-md-5 col-xs-5"><img
                                                    src="images\admin.png" alt=""
                                                    class="img-responsive img-circle"/>

                                                
                                            </div>
                                            <div class="col-md-7 col-xs-5"><span>Admin</span>
											<div class="divider"></div>

                                               <div align="center" ><a href="#" class="btn btn-primary btn btn-blue">Change
                                                    Password</a></div>
													<br>
                                            <span
                                                class="input-group-btn"><button type="button" class="btn btn-green btn-sm">
                                            Sign out
                                        </button></span>

                                                
                                               
                                        </div>
                                    </div>
                                    <div class="navbar-footer">
                                        <div class="navbar-footer-content">
                                            <div class="row">
                                               
                                            </div>
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
                        <li class="clock"><strong id="get-date"></strong>

                            <div class="digital-clock">
                                <div id="getHours" class="get-time"></div>
                                <span>:</span>

                                <div id="getMinutes" class="get-time"></div>
                                <span>:</span>

                                <div id="getSeconds" class="get-time"></div>
                            </div>
                        </li>
                        <li class="sidebar-heading"><h4>Main Menu</h4></li>
                        <li><a href="admin_home.php"><i class="fa fa-home fa-fw"></i>&nbsp;
                            Manage Accounts<span class="fa arrow"></span><span class="badge btn-primary">3</span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="admin_create.php">Create User Account</a></li>
                                <li><a href="admin_delete.php">Delete User Account</a></li>
                                <li><a href="admin_modify.php">Modify User Account</a></li>
                            </ul>
						<li><a href="admin_approvals.php">Leave Applications</a></li>
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
                    <div class="page-heading hidden-xs"><h1 class="page-title">ADMINISTRATOR</h1></div>
                    <ol class="breadcrumb page-breadcrumb">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="admin_home.php">Home</a>&nbsp;&nbsp;<i
                                class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>

                    </ol>
                </div>
                <!--END PAGE HEADER & BREADCRUMB-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
				
				                            
							
							                            <div class="row">
                    <div class="col-lg-12">
                        <div class="panel">
                            <div class="panel-body"><h4 class="block-heading">Form Register</h4>

                                <form id="form-register" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="control-label">First Name
                                                &nbsp;<span class="required">*</span></label><input type="text"
                                                                                                    name="firstname"
                                                                                                    class="form-control"/>
                                            </div>
                                            <div class="form-group"><label class="control-label">Last Name
                                                &nbsp;<span class="required">*</span></label><input type="text"
                                                                                                    name="lastname"
                                                                                                    class="form-control"/>
                                            </div>
                                            <div class="form-group"><label class="control-label">Email Address
                                                &nbsp;<span class="required">*</span></label><input type="text"
                                                                                                    name="email"
                                                                                                    class="form-control"/>
                                            </div>
                                            <div class="form-group"><label class="control-label">Password
                                                &nbsp;<span class="required">*</span></label><input type="password"
                                                                                                    name="password"
                                                                                                    class="form-control"/>
                                            </div>
                                            <div class="form-group"><label class="control-label">Confirm Password
                                                &nbsp;<span class="required">*</span></label><input type="password"
                                                                                                    name="confirmPassword"
                                                                                                    class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="control-label">Gender</label>

                                                <div class="radio-list"><label class="radio-inline"><input type="radio"
                                                                                                           name="gender"
                                                                                                           value="0"
                                                                                                           checked="checked"/>&nbsp;
                                                    Male</label><label class="radio-inline"><input type="radio"
                                                                                                   name="gender"
                                                                                                   value="1"/>&nbsp;
                                                    Female</label></div>
                                            </div>
                                            <div style="margin-bottom:0;" class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group"><label class="control-label">Zip Code
                                                        &nbsp;<span class="required">*</span></label><input type="text"
                                                                                                            name="zipcode"
                                                                                                            class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group"><label class="control-label">City
                                                        &nbsp;<span class="required">*</span></label><input type="text"
                                                                                                            name="city"
                                                                                                            class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="control-label">Phone
                                                Number</label><input type="text" name="phone" class="form-control"/>
                                            </div>
                                            <hr/>
                                            <div class="form-group"><label class="control-label">Would you like to
                                                review Mango emails?</label>

                                                <div class="radio-list"><label class="radio-inline"><input type="radio"
                                                                                                           name="newsletter"
                                                                                                           value="0"/>&nbsp;
                                                    Yes</label><label class="radio-inline"><input type="radio"
                                                                                                  name="newsletter"
                                                                                                  value="1"
                                                                                                  checked="checked"/>&nbsp;
                                                    No</label></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div><span class="required">*</span>&nbsp;
                                                Required fields
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-8"><label><input type="checkbox"/>&nbsp;
                                            Please agree to our policy</label></div>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
					</div>
					</div>	
							
							
				
				
				</div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div class="page-footer">
                    <div class="copyright">2014 © LMS</div>
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


</html>


<?php
$con=@mysql_connect("localhost","root","");
if(!$con){return false;}
if(!mysql_select_db("leave_man",$con)){return false;}

if(isset($_POST["title"])&&isset($_POST["fname"])&&isset($_POST["lname"])&&isset($_POST["gender"])&&isset($_POST["post"])&&isset($_POST["dept"])&&isset($_POST["teach"])&&isset($_POST["perm"])&&isset($_POST["email"])&&isset($_POST["username"])&&isset($_POST["password"])&&isset($_POST["rpassword"]))
{
	$title=$_POST["title"];$fname=$_POST["fname"];	$lname=$_POST["lname"];	$gender=$_POST["gender"];	$post=$_POST["post"];
	if($_POST["teach"] == "1")
	{	$type1="Teaching";	}
	else	{$type1="Non-Teaching";}
	
	if($_POST["perm"] == "1")	{$type2="Permanent";	}
	else	{$type2="Temporary";}
		
	$dept=$_POST["dept"]; $email=$_POST["email"];	
	$username=$_POST["username"];	$pwd=$_POST["password"];	$rpwd=$_POST["rpassword"];
	
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
	if($pwd!=$rpwd) $welcome="inserterrorB.html";
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
			$welcome="insertsuccessful.html";
		}
		else	$welcome="inserterrorA.html";
	}
}
else	$welcome="inserterrorC.html";
header('Location: '.$welcome);
?>