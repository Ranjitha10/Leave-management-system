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
							
                    <a id="logo" href="admin_home.php" class="navbar-brand" style="font-size:19px">Leave Management System</a></div>
                <div class="topbar-main"><a id="menu-toggle" href="#" class="btn hidden-xs"><i class="fa fa-bars"></i></a>
				

                    <ul class="nav navbar-top-links navbar-right">
                 
				 
                        <li class="dropdown hi"><a data-toggle="dropdown" href="#" class="dropdown-toggle"><img
                                src="images\cauvery.jpg"	alt="" class="img-responsive img-circle"/>&nbsp;
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
                                                    src="images\cauvery.jpg" alt=""
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
                                       <div align="middle">     <span class="input-group-btn"><a href="adminlogout.php" type="button" class="btn btn-green btn-sm">
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
                        
                        <li class="sidebar-heading"><h4>Main Menu</h4></li>
                        <li><a href="admin_home.php"><i class="fa fa-home fa-fw"></i>&nbsp;
                            Manage Accounts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="admin_create.php">Create User Account</a></li>
                                <li><a href="admin_delete.php">Delete User Account</a></li>
                               
                            </ul>
						<li><a href="admin_approvals.php">Leave Applications</a></li>
						<li><a href="admin_report.php">Staff Leave Report</a></li>
						<li><a href="admin_graph.php">Graph</a></li>	
						<li><a href="co_incrementor.php">Increment CO</a></li>
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
				<div class="panel panel-yellow">
         <div class="panel-heading" align="middle"><h2>Leave Applications</h2></div>
				
				<div class="portlet">
                            <div class="portlet-header">
                               
                                <div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal"
                                                                                      data-target="#modal-config"
                                                                                      class="fa fa-cog"></i><i
                                        class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="mytable">
                                        <thead>
                                        <tr>
                                            <th>App ID</th>
											<th>Staff Name</th>
											<th>Type</th>
											<th>Start Date</th>
											<th>End Date</th>
											<th>No.of Days</th>
											<th>App Date</th>
											<th>Alternative Arragements</th>
											<th>Status</th>
											<th>Reason</th>
											<th>Approve</th>
											<th>Reject</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                                <?php
		   // session_start();
        	$con=@mysql_connect("localhost","root","");
			if(!$con){return false;}
			if(!mysql_select_db("leave_man",$con)){return false;}
 			
				$query="SELECT * FROM leave_app WHERE status='Pending'";
            $result=mysql_query($query);
			$rows=mysql_num_rows($result);
			
						$alter_status="Accepted";

			
           for($i=0;$i<$rows;$i++)
            {
            	$appid=mysql_result($result,$i,'app_id');
				//$_SESSION["app"]=$appid;
				
				$q="select * from alter_arr where app_id='$appid'";
				$res=mysql_query($q);
				$row_1=mysql_num_rows($res);
				if($row_1==0)
				{
					$alter_status="No classes";
				}
				
				for($j=0;$j<$row_1;$j++)
			{				
				$status = mysql_result($res,$j,'status');
				if($status=="pending")
				{
					$alter_status="Pending";		
				}		
			
			}
			if($alter_status!="Pending")
			{	
				
                $username=mysql_result($result,$i,'staff_id');
				$namequery="SELECT f_name,l_name FROM staff WHERE staff_id='$username'";
				$query_run=mysql_query($namequery);
				$query_data=mysql_fetch_assoc($query_run);
				$fname=$query_data["f_name"];
				$lname=$query_data["l_name"];
                $type=mysql_result($result,$i,'type');
                $startdate=mysql_result($result,$i,'start_date');
                $enddate=mysql_result($result,$i,'end_date');
                $days=mysql_result($result,$i,'no_of_days');
                $appdate=mysql_result($result,$i,'date_of_applying');
                $status=mysql_result($result,$i,'status');
                $reason=mysql_result($result,$i,'reason');
								echo "<tr><td>" . $appid . "</td><td>" . $fname . " " . $lname . "</td><td>" . $type . "</td><td>" . $startdate . "</td><td>" . $enddate . "</td><td>" . $days . "</td><td>" . $appdate . "</td><td>" . $alter_status . "</td><td>" . $status . "</td><td>" . $reason . "</td>";
								echo "<td><input id='appr' name='approved' type='checkbox' ></td></td>";
								echo "<td><input id='rej' name='rejected' type='checkbox' ></td></tr>";
						
								$flag=1;
							
			}	
		}
			
			
			
		  	
			
          ?>
                                        </tbody>
                                    </table>
									
										<a onClick="isChecked()" class="btn btn-orange"> Save </a>
									
                                </div>
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
<script>
var isChecked=function(){
	
	var flag=0;
	var x=$("#mytable>tbody>tr");
	var arr=[];
	var arr2=[];
	for(var i=0;i<x.length;i++)
	{
		//alert (x.length);
		var a=x[i];
		a=$(a);
		
		var d = a.find("#appr").prop('checked');
		var e = a.find("#rej").prop('checked');
				
	//alert(d);
	//alert(e);
		if((d==e)&& (d==true) && (e==true)){alert("Either Accept or Reject");exit();}
		else
		{
		var b=a.find("#appr:checked");
		var c=a.find("#rej:checked");
	
		//alert(c);
		console.log(b);
		console.log(c);
		if(b.length!==0)
		{
			var appid=$(a.find("td")[0]).text();
			arr.push(appid);
			console.log(appid);
		}
		if(c.length!==0)
		{
			var appid2=$(a.find("td")[0]).text();
			//alert(appid);
			arr2.push(appid2);
			console.log(appid2);
		}
	
	var data={"appid":arr,"appid2":arr2};
	console.log(data);
	$.post("approvals.php",data,function(data){
		console.log(data);
		if (flag==0)
		{
		alert("Leave Applications Processed");
		flag=1;
		}
		location.reload(true);exit();
	//	location.pathname="/WP_test/AdminApproval.php";
		});
}
}
}
</script>

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
<!--LOADING SCRIPTS FOR PAGE--><!--CORE JAVASCRIPT-->
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