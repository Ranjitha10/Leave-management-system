<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />


</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div>
					<h1>
					<font  size=6.4em color="white">
						<?php 
						echo "COUNSELLOR : ";
						?>
					</font>
					
					<font color="black">	
						<?php
						session_start();	
						echo $_SESSION["name1"];
						?>
					</font>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<p style="text-align:right;float:right;font-size:.5em;color:black">
						<a href="1_welcome.php">Sign out</a>				
				</h1>
		</div>
		
			<div id="menu">
				<ul>
							  <li>
								<span>View</span>
								<ul>
							  <li><a href="1_coun_view_reg.php" target="iframe_a">STUDENT GENERAL DETAILS</a></li>
                					  <li><a href="1_coun_view_fee.php" target="iframe_a">FEE DETAILS</a></li>
                					  <li><a href="1_coun_view_cie.php" target="iframe_a">CIE MARKS</a></li>
							  <li><a href="1_coun_view_hss.php" target="iframe_a">HSS DETAILS</a></li>
							  <li><a href="1_coun_view_absence.php" target="iframe_a">ABSENCE DETAILS</a></li>
								</ul>
							  </li>
							
							  <li>
								<span>Insert</span>
								<ul>
							    <li><a href="1_coun_insert_marks.php" target="iframe_a">CIE MARKS</a></li>
                					    
								</ul>
							  </li>	
							  <br>
							  
							  <li><a href="1_coun_report.php" target="iframe_a">GENERATE REPORT</a></li>
														
							  <li><a href="1_coun_add_stu.php" target="iframe_a">NEW STUDENT</a></li>
				</ul>
				
			</div>
			<iframe  width="1300px" height="1000px" src="" frameborder="0" name="iframe_a" ></iframe>
		
	</div>
</div>


</body>
</html>
