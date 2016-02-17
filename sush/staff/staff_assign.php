<!DOCTYPE html>
<html lang="en">
<head><title>Staff</title>
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
	<style>
	 div.container{
	 width: 1053px;
	 }
	</style>
	 <SCRIPT language="javascript">
		var rowCount;
        function addRow(tableID) {
 
            var table = document.getElementById(tableID);
            rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
 
            var cell2 = row.insertCell(0);
            if(rowCount>1)
			{
				cell2.innerHTML = rowCount;
			}
 
            var cell3 = row.insertCell(1);
            var element2 = document.createElement("input");
            element2.type = "date";
            element2.name = "date[]";
	        element2.className = "form-control";
            element2.style.width = "200px";
			element2.value= "yyyy-mm-dd";
            cell3.appendChild(element2);
			
	        var cell4 = row.insertCell(2);
            var element3 = document.createElement("input");
            element3.type = "text";
            element3.name = "time[]";
	        element3.className = "form-control";
            element3.style.width = "200px";
            cell4.appendChild(element3);

			var cell5 = row.insertCell(3);
            var element4 = document.createElement("input");
            element4.type = "text";
            element4.name = "sem[]";
            element4.className = "form-control";
            element4.style.width = "200px";
            cell5.appendChild(element4);
			
			var cell6 = row.insertCell(4);
			 var element5 = document.createElement("input");
            element5.type = "text";
            element5.name = "a_staff_id[]";
            element5.className = "form-control";
            element5.style.width = "200px";
            cell6.appendChild(element6);
			
            

        }
		function delRow()
		{
			if(rowCount>1)
			{
				document.getElementById("dataTable").deleteRow(rowCount--);
			}
		}
</SCRIPT>




</head>
<body  class="animated fadeIn">

	<?php
			session_start();
			if( !(isset($_SESSION['username'])) )
				header("Location: staff_login.php");
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
                                src="images\admin.png"	alt="" class="img-responsive img-circle"/>&nbsp;
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
                                                    src="images\admin.png" alt=""
                                                    class="img-responsive img-circle"/>

                                                
                                            </div>
                                            <div class="col-md-7 col-xs-5"><h4>
											<?php
			
											$con=@mysql_connect("localhost","root","");
											if(!$con){return false;}
											if(!mysql_select_db("leave_man",$con)){return false;}
											$usr=$_SESSION["username"];
											$query="SELECT title,f_name,l_name FROM staff WHERE staff_id='$usr'";
											$result=mysql_query($query);
											$row=mysql_fetch_assoc($result);
											echo  $row["title"] . " " . $row["f_name"] . " " . $row["l_name"] ;?></h4>
											<div class="divider"></div>

                                               <div align="center" ><a href="#" class="btn btn-primary btn btn-blue">Change
                                                    Password</a></div>
													<br>
                                          <div align="middle">  <span class="input-group-btn"><a href="stafflogout.php" type="button" class="btn btn-green btn-sm">
                                            Sign out
                                        </a></span>
											<br>
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
                       <div align="center"><img src="rvce.jpg" align="middle"  width="150" height="150" class="img-responsive img-circle" alt="Leave Management System" /></div>
					<h4><font color="white" align="center"> Dept Of Information Science</font></h4>
					   
					  
                        <li class="sidebar-heading"><h4>Main Menu</h4></li>
                        <li>
                        <a  href="alter_staff.php">Extra Classes</a>
                    </li>
					<li>
                        <a  href="StaffProfile.php#page-top">Profile</a>
                    </li>
					  <li>
                        <a  href="Staff_Apply.php#page-top">Application</a>
                    </li>
                    <li>
                        <a  href="StaffSummary.php#page-top">Leave Archive</a>
                    </li>
					<li>
						<a  href="staffcancel.php#page-top">Cancellation</a>
					</li>
					<li>
						<a href="TimeTable.php" target="_new">Time Table</a>
					</li>
					<li> <a href="Calendar.php" target="_new">Calendar of events</a> </li>
					
					<!--	<li class="clock">
					   
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
                    <div class="page-heading hidden-xs"><h1 class="page-title">STAFF</h1></div>
                    <ol class="breadcrumb page-breadcrumb">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="staff_home.php">Home</a>&nbsp;&nbsp;<i
                                class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>

                    </ol>
                </div>
                <!--END PAGE HEADER & BREADCRUMB-->
                <!--BEGIN CONTENT-->
				 <div class="page-content">
				 
				 
				 <div id="form_container">
<div class="container">

		
		<div class="col-lg-12">
         <div class="panel panel-white">
             <div class="panel-heading" align="left" style="color:blue"><h3>Assign Class</h3></div>
               <div class="panel-body pan">
		<form id="form_618809" class="form-horizontal form-seperated " method="post" >
					<div class="form_description">
						<div class="form-body pal">	
		
			
		</div>						
			<ul >
			<br><br>
			<div class="form-group"></div>
		<div><font color="black">		
		<br><br>
		<div class="form-group">
		
		<br><br>
		
		 
		 <div class="form-group" style="color:blue">
			<h4>Arrangements</h4>
    	        <INPUT type="button" class="btn btn-success" value="Add Row" onclick="addRow('dataTable')" />
				&nbsp; &nbsp;
                <button type="button" class="btn btn-success" onclick="delRow()" style="width:120px">Delete Row</button>
		     
		        <br><br>
				<div class="portlet-body">
    		   <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTable">
        	       <TR>
            		  <TD> Sl no. </TD>
            		  <TD> Date </TD>
			          <TD> Time </TD>
					  <TD>SEM</TD>
                      <TD> Staff id	 </TD>
                    </TR>
		            <TR>
            		  <TD> 1 </TD>
            		  <TD> <INPUT type="date" style="width:200px;" class= "form-control" name="date[]"  value= "yyyy-mm-dd" /> </TD>
			          <TD> <INPUT type="text" style="width:200px;" class= "form-control" name="time[]"/> </TD>
                      <TD> <INPUT type="text" style="width:200px;" class= "form-control" name="sem[]" /> </TD>
                      <TD> <select type="text" style="width:160px;" class= "form-control-lg" name="a_staff_id[]" value="a_staff_id"/>
					  <span>
				
					<?php

					$q = "select staff_id,f_name,l_name from staff where staff_id!='$usr' and staff_id!='admin'";
					$res = mysql_query($q);

					while($row = mysql_fetch_array($res)) {
					$sid = $row["staff_id"];
					$fname= $row["f_name"];
					$lname= $row["l_name"];
					echo("<option value='$sid'>".$sid."      - ".$fname." ".$lname."</option>");
					}

					?>
				</span>
					  </TD>
                     
				   </TR>
					
    	        </table>
				</div>
				</div>	
        </div>
		
		<br>
	
		</font>
			  <input id="saveForm" class="btn-lg btn-blue" type="submit" name="submit" value="Submit" />
			</ul>
		</form>	
		</div>
</div>
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

<?php
error_reporting(0);
$con=mysql_connect("localhost","root","");
if(!$con)
{echo  "Error Connecting server!";}

if(!mysql_select_db("leave_man",$con))	{echo " Error Selecting db"; }

if(!empty($_POST["date"])&&!empty($_POST["time"]) &&!empty($_POST["sem"])  )
{
	
	$usr=$_SESSION["username"];
	
	//if($dd1<10)$dd1="0$dd1";
	//if($dd2<10)$dd2="0$dd2";
	$date=$_POST['date']; 
	$time=$_POST['time'];
	$sem=$_POST['sem'];
	$a_staff_id=$_POST['a_staff_id'];
	$status="pending";
	$app="0";
	$num=count($a_staff_id);
				
					/*$date = $_POST['date'];
					$time = $_POST['time'];
					$sem = $_POST['sem'];
					$staff_id=$_POST['staff_id'];
					$status = "pending";
					$flag=1;
					$num=count($staff_id);*/
			$query1= "INSERT INTO assgin_class (class_id, staff_id, Tim, dat, sem, status) VALUES (default,'$a_staff_id[$index]','$time[$index]','$date[$index]','$sem[$index]','$status')";
			$res=mysql_query($query1);
			
			if(!$res)
			{
			echo "Query Failed";
				echo '<script language="javascript">';
			echo 'alert("Invalid dates or empty fields")';
			echo '</script>';
			$welcome="StaffApplyError1.html";
			}
			else
			{
		  
				foreach ($a_staff_id as $index => $num)
			{
				$sql = "INSERT INTO alter_arr(class_id,app_id, staff_id, date, sem, time, status) VALUES (default,$app,'$a_staff_id[$index]','$date[$index]','$sem[$index]','$time[$index]','$status')";
				if(mysql_query($sql)) {
					echo 'alert("Success")';
					$welcome='Staff.php';
					}
				else
					echo '<script language="javascript">';
			echo 'alert("Invalid dates or empty fields '.$subdays.' ")';
			echo '</script>';
					$welcome='StaffApplyError3.html'; 
			
			} 
			
		}
//header('Location: '.$welcome);
			
			
			
			echo '<script language="javascript">';
			echo 'alert("Request Submitted")';
			echo '</script>';
			$welcome="StaffApplySuccess.html";
			
		
}			
			
	else
			{
			echo '<script language="javascript">';
			echo 'alert("Enter all fields")';
			echo '</script>';
	$welcome="StaffApplyError1.html";
}
//header('location: '.$welcome);
 ?>
 