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
			element2. value= "yyyy-mm-dd";
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
			
			var cell7 = row.insertCell(4);
			 var element6 = document.createElement("input");
            element6.type = "text";
            element6.name = "al_staff_id[]";
            element6.className = "form-control";
            element6.style.width = "200px";
            cell7.appendChild(element6);
			
            

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
						<a href="staff_assign.php#page-top">Assign Class</a>
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
                    <div class="page-heading hidden-xs"><h1 class="page-title" style="color:blue">STAFF</h1></div>
                    <ol class="breadcrumb page-breadcrumb">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="staff_home.php">Home</a>&nbsp;&nbsp;<i
                                class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>

                    </ol>
                </div>
                <!--END PAGE HEADER & BREADCRUMB-->
                <!--BEGIN CONTENT-->
				 <div class="page-content">
				 
				 
				 <div id="form_container">
<div class="container" >

		
		<div class="col-lg-12">
         <div class="panel panel-white">
             <div class="panel-heading" align="center" style="color:blue"><h3>Leave Application</h3></div>
               <div class="panel-body pan">
		<form id="form_618809" class="form-horizontal form-seperated " method="post" >
					<div class="form_description">
						<div class="form-body pal">	
		
			
		</div>						
			<ul >
			<br><br>
			<div class="form-group"></div>
		<div><font color="black">
			
				<div class="form-group">	
		<h4 class="description" for="type">Type </h4>
		<br>
		<span>
			<input id="element_5_1" name="type"  type="radio" value="CL" />
<label class="choice" for="element_5_1">CL</label>
</span>
<!--&nbsp; &nbsp;
<span>
<input id="element_5_2" name="type"  type="radio" value="RH" />
<label class="choice" for="element_5_2">RH</label>
</span>-->
&nbsp; &nbsp;
<span>
<input id="element_5_3" name="type"  type="radio" value="EL" />
<label class="choice" for="element_5_3">EL</label>
</span>
&nbsp; &nbsp;
<span>
<input id="element_5_4" name="type"  type="radio" value="CO" />
<label class="choice" for="element_5_4">CO</label>
</span>
</div>



		
        <br><br>
		<div class="form-group">
		<h4 class="description">Start Date :</h4>
		<input type="date" name="sdate"  value="yyyy-mm-dd" style="width:200px;" class= "form-control" />
		<br>
		
		<label class="description" for="halffull1"> </label>
		<span>
			<input id="element_6_1" name="halffull1"  type="radio" value="1" />
<label class="choice" for="element_6_1">Half</label>
&nbsp; &nbsp;
<input id="element_6_2" name="halffull1"  type="radio" value="2" />
<label class="choice" for="element_6_2">Full</label>
</div>

		</span>
		<br><br>
		<div class="form-group">
		<h4 class="description">End Date :</h4>
		<input type="date" name="edate"  value="yyyy-mm-dd" style="width:200px;" class= "form-control" />
		<br>
<label class="description" for="halffull2"> </label>
		<span>
			<input id="element_7_1" name="halffull2"  type="radio" value="1" />
<label class="choice" for="element_7_1">Half</label>
&nbsp; &nbsp;
<input id="element_7_2" name="halffull2"  type="radio" value="2" />
<label class="choice" for="element_7_2">Full</label>
	</div>
	<br><br>
		
		   
		    
			<div class="form-group">
		<h4 class="description" for="element_4">Reason/Necessity </h4>
		<div>

			<textarea id="element_4" name="reason" class="element textarea medium"></textarea> 
		</div> 
		<br>
		</div>
		 <div >
		 <div class="form-group">
			<h4>Alternative Arrangements</h4><p>If Necessary</p>
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
                      <TD> <INPUT type="text" style="width:200px;" class= "form-control" name="al_staff_id[]"/></TD>
                     
				   </TR>
					
    	        </table>
				</div>
				</div>	
        </div>
		</div>
		<br>
	
		</font>
			  <input id="saveForm" class="btn-lg btn-blue" type="submit" name="submit" value="Apply" />
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

if(!mysql_select_db("leave_man",$con)){echo " Error Selecting db"; }

if(!empty($_POST["type"])&&!empty($_POST["sdate"]) &&!empty($_POST["edate"]) && !empty($_POST["halffull1"])&&!empty($_POST["halffull2"])&&!empty($_POST["reason"]))
{
	$type=$_POST['type']; 

	$app =$_POST['app_id'];
	//$user=$_POST['username'];
	$hf1=$_POST['halffull1'];
	$hf2=$_POST['halffull2'];
	$reason=$_POST["reason"];
	
	/*
	$dd1=$_POST['element_1_1'];
	$mm1=$_POST['element_1_2'];
	$yy1=$_POST['element_1_3'];
	$dd2=$_POST['element_2_1'];
	$mm2=$_POST['element_2_2'];
	$yy2=$_POST['element_2_3'];
	*/
	
	$usr=$_SESSION["username"];
	$type=$_POST['type'];
	//if($dd1<10)$dd1="0$dd1";
	//if($dd2<10)$dd2="0$dd2";
	$sdate=$_POST["sdate"];
	$edate=$_POST["edate"];
	
	$status="Pending";
	$no_of_days=0;
	//echo "hello";

		
		
		if( strtotime($sdate)<time() ||  strtotime($edate)<time()||  strtotime($sdate)>strtotime($edate))
		{
			echo '<script language="javascript">';
			echo 'alert("Invalid dates or empty fields")';
			echo '</script>';
			$welcome="StaffApplyError1.html";
		
			}
		
	else
{	
			
$query="INSERT INTO leave_app (app_id,staff_id,type,start_date,end_date,date_of_applying,reason,status)  VALUES (default,'$usr','$type','$sdate','$edate',curdate(),'$reason','$status')";
$res=mysql_query($query);
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
	$query="SELECT app_id FROM leave_app WHERE staff_id='$usr' AND type='$type' AND start_date='$sdate' AND end_date='$edate' AND status='$status' AND reason='$reason'";
		if($result=mysql_query($query))
		{
			$row=mysql_fetch_assoc($result);
			$appid=$row["app_id"];
	
		//	echo $appid;
			$subdays=0;
			if( ($hf1==1&& $type!="CL") ||  ($hf1==1&& $type!="CL"))
				{
					echo '<script language="javascript">';
					echo 'alert("Half days only for CL ")';
					echo '</script>';
				
				
				}
			
			else{	
					if($hf1==1)$subdays=$subdays+0.5;
					if(strtotime($sdate)!=strtotime($edate))
					{
						if($hf2==1)$subdays=$subdays+0.5;
					}
					echo $subdays;
				
					$al_staff_id = $_POST['al_staff_id'];
					$date = $_POST['date'];
					$sem = $_POST['sem'];
					$time = $_POST['time'];
					$status = "pending";
					$flag=1;
					$num=count($al_staff_id);
		  
		  
		  
				foreach ($al_staff_id as $index => $value)
{			
								
				if($sem[$index]<1 || $sem[$index]>8)
				{	echo '<script language="javascript">';
			echo 'alert("Invalid dates or empty fields ")';
			echo '</script>';
				$welcome='StaffApplyError1.html';
				}
			else
			{
				$sql = "INSERT INTO alter_arr (class_id,app_id, staff_id, date, sem, time, status) VALUES (default,'$appid','$al_staff_id[$index]','$date[$index]','$sem[$index]','$time[$index]','$status')";
				if(mysql_query($sql)) {
					echo "Success";
					$welcome='Staff.php';
					}
			/*	else
					echo '<script language="javascript">';
			echo 'alert("Invalid dates or empty fields '.$subdays.' ")';
			echo '</script>';
					$welcome='StaffApplyError3.html'; */
			
			} 
			
		}
//header('Location: '.$welcome);
			
			
			
			
			
			
			
			$query="UPDATE leave_app SET no_of_days=(((DATEDIFF(end_date,start_date))+1)-'$subdays') WHERE app_id=$appid";
			$result=mysql_query($query);
			
			$query2="select no_of_days from leave_app where app_id=$appid";
			$result2=mysql_query($query2);
			$row2=mysql_fetch_assoc($result2);
			$days=$row2["no_of_days"];
			echo $days;
			$query1="SELECT * FROM leave_balance WHERE staff_id='$usr'";
			$result=mysql_query($query1);
			$query_data=mysql_fetch_assoc($result);
			switch($type)
			{
				case 'CL':
					$bal=$query_data["balcl"];
					break;
				case 'RH':
					$bal=$query_data["balrh"];
					break;
				case 'EL':
					$bal=$query_data["balel"];
					break;
				case 'CO':
					$bal=$query_data["balco"];
					break;
			}
			echo "bal".$bal;
			if($days>$bal /*|| ($type=="CL" && $days>3) || ($type=="EL" && $days<5)*/)
			{
				$query1="DELETE FROM leave_app WHERE app_id=$appid";
				$result=mysql_query($query1);
				echo '<script language="javascript">';
			echo 'alert("Invalid dates or empty fields")';
			echo '</script>';
				$welcome="StaffApplyError3.html";
			}
			else if(!$result)
			{
		//	echo "Query Failed";
				echo '<script language="javascript">';
			echo 'alert("Invalid dates or empty fields")';
			echo '</script>';
			$welcome="StaffApplyError1.html";
			}
			else
			echo '<script language="javascript">';
			echo 'alert("Application Registered")';
			echo '</script>';
			$welcome="StaffApplySuccess.html";
			
		}
	}
	}
	}
}
else
			echo '<script language="javascript">';
			echo 'alert("Enter all fields")';
			echo '</script>';
$welcome="StaffApplyError1.html";
//header('location: '.$welcome);
 ?>









