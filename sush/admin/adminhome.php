<!DOCTYPE html>
<!--
Template Name: Academic Education V2
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>LMS</title>
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
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top" style="background:#d9d9d9" >
<?php
			session_start();
			if( !(isset($_SESSION['username'])) )
				header("Location: admin_login1.php");
		?>
		
		<?php
			
				$con=@mysql_connect("localhost","root","");
			if(!$con){return false;}
			if(!mysql_select_db("leave_man",$con)){return false;}
			$usr=$_SESSION["username"];
			$query="SELECT title,f_name,l_name FROM staff WHERE staff_id='$usr'";
			$result=mysql_query($query);
			$row=mysql_fetch_assoc($result);
			echo  $row["title"] . " " . $row["f_name"] . " " . $row["l_name"] ;?>
			<?php
			
				$con=@mysql_connect("localhost","root","");
			if(!$con){return false;}
			if(!mysql_select_db("leave_man",$con)){return false;}
			$usr=$_SESSION["username"];
			$query="SELECT title,f_name,l_name FROM staff WHERE staff_id='$usr'";
			$result=mysql_query($query);
			$row=mysql_fetch_assoc($result);
			echo  $row["title"] . " " . $row["f_name"] . " " . $row["l_name"] ;?>
			<!-- ################################################################################################ -->
<div class="wrapper row0" style="background:#d9d9d9">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul>
        <li style="color:blue" ></a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1" style="background:#d9d9d9" >
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1 style="color:blue" >Leave Management System</h1>
      
    </div>
    <div class="fl_right">
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear" width="100%">
        <li class="active"><a style="color:blue" href="index.html">Home</a></li>
        
        <li><a style="color:blue" href="#">Create user account</a></li>
        <li><a style="color:blue" href="#">Staff Leave Report</a></li>
        <li><a style="color:blue" href="#">Graph</a></li>
      </ul>
     </nav>
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
	  	<div class="page-content animated fadeIn">
					
					
                <div style="height: 800px" class="row" align="middle">
                    <div class="col-lg-12">
					
                        <div class="panel">
                            <div class="panel-body">
                                <div class="row">
                                    
                                    <div class="col-md-9">
									<h1 class="animated rollIn"> <font color="black">Welcome <?php
			
				$con=@mysql_connect("localhost","root","");
			if(!$con){return false;}
			if(!mysql_select_db("leave_man",$con)){return false;}
			$usr=$_SESSION["username"];
			$query="SELECT title,f_name,l_name FROM staff WHERE staff_id='$usr'";
			$result=mysql_query($query);
			$row=mysql_fetch_assoc($result);
			echo  $row["title"] . " " . $row["f_name"] . " " . $row["l_name"] ;?>
			</font>  </h1>
									<br><br>
                                        <div  id="calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                </div>
            </div>
			</div>
				 
      
      <!-- ################################################################################################ --> 
      
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear" style="background:black"> 
    <!-- ################################################################################################ -->
    <p class="fl_left" style="background:black" style="color:white">Copyright &copy; 2015 - All Rights Reserved - LMS</p>
    <p class="fl_right"style="background:black" style="color:white" >Developed by <a style="background:black"  style="color:white" target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">Pooja & Prajnya</a></p>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>