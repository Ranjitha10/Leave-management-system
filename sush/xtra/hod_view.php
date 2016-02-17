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
					<font size=6.4em color="black">
						<?php 
						echo "HOD";
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
                <li><a href="hod_view_reg.php" target="iframe_a">STUDENT GENERAL DETAILS</a></li>
                <li><a href="hod_view_fee.php" target="iframe_a">FEE DETAILS</a></li>
                <li><a href="hod_view_cie.php" target="iframe_a">CIE MARKS</a></li>
		<li><a href="hod_view_hss.php" target="iframe_a">HSS DETAILS</a></li><li>
		<a href="hod_view_absence.php" target="iframe_a">ABSENCE DETAILS</a></li>
            </ul>
			</li>
        
        
        
        <li><a href="add_coun1.php" target="iframe_a">ASSIGN BATCH</a></li>
        
		

	</div>
		<iframe width=1360px" height="1000px" src="" name="iframe_a"></iframe>

</body>
</html>
