<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Counsellor view page</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
    ul{
        padding: 5px;
        list-style: none;
    }
    ul li{
        float: left;
        width: 250px;
    }
    ul li a{
        display: block;
        padding: 10px 20px;
		font-size: 1.5em;
        color: #ffffff;background: #0a7f99;
		text-decoration: none;
    }
    ul li a:hover{
        color: #ffffff;
        background: #0a7f99;
    }
    ul li ul{
        display: none;
    }
    ul li:hover ul{
        display: block;
    }
</style>
</head>
<body>
<div id="outer">
	<div id="header1">
					<h1>
					<font size=6.4em>
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
					
					<p style="text-align:right;float:right;font-size:.7em ">
		<a href="admin.php">Logout</a> 
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			</p>
				</h1>
		</div>
		<div id="header2">
		
    <ul>
        <li><a href="#">VIEW</a>
		<ul>
                <li><a href="coun_view_reg.php" target="iframe_a">STUDENT GENERAL DETAILS</a></li>
                <li><a href="coun_view_fee.php" target="iframe_a">FEE DETAILS</a></li>
                <li><a href="coun_view_cie.php" target="iframe_a">CIE MARKS</a></li>
		<li><a href="coun_view_hss.php" target="iframe_a">HSS DETAILS</a></li><li>
		<a href="coun_view_absence.php" target="iframe_a">ABSENCE DETAILS</a></li>
            </ul>
			</li>
        <li><a href="#">INSERT</a>
		<ul>
                <li><a href="marks1.php" target="iframe_a">CIE MARKS</a></li>

            </ul>
			</li>
        
        </li>
		
	<li><a href="report.php" target="iframe_a">REPORT</a>
            
        </li>
        
        
        <li><a href="add_stu1.php" target="iframe_a">NEW STUDENT</a></li>
        
		

	</div>
		<iframe width=1360px" height="1000px" src="" name="iframe_a"></iframe>

</body>
</html>
