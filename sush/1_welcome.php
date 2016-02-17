<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LMS</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>


<body class="b">
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1 style="color:blue" ><a style="color:blue" href="#">Leave Management System</a></h1>
		</div>
	</div>
</div>
<div id="page-wrapper">
	<div id="welcome" class="container">
		
		<img src="rvce.jpg" class="image image-full" alt="" />
	</div>
</div>

<div class="wrapper" style="bg-color:white">
	<div id="three-column" class="container">
		<div><span class="arrow-down"></span></div>
		<div id="tbox1">
			<div class="title">
				<h2 style="color:blue" >HOD</h2>
			</div>
			
			<a href="hod/hod_login.php" class="button">Sign In</a> </div>
		<div id="tbox2">
			<div class="title">
				<h2 style="color:blue">ADMIN</h2>
			</div>
			
			<a href="admin/admin_login1.php" class="button">Sign In</a> </div>
		<div id="tbox3">
			<div class="title">
				<h2 style="color:blue">STAFF</h2>
			</div>
			
			<a href="staff/staff_login.php" class="button">Sign In</a> </div>
	</div>
	
</div>
<div align="center">

<button type="button" onclick="loadDoc()" class="button">About Us</button>
<br><br>
<table id="demo" width="10%"> </table>
</div>
<!--<div id="copyright" class="container" style="color:blue">
	<p style="color:blue"> Designed by </p>
		<div id="two-column" class="container">
		<div><span class="arrow-down"></span></div>
		<div id="tbox1">
			<div class="title">
				<p><b><i>POOJA</i></b></p>
			</div>
			<p><i>Final year(2016 batch),Information Science and Engineering Dept,RVCE.</i></p>
		</div>
		<br>
		<div id="tbox2">
			<div class="title">
				<p><b><i>PRAJNYA</i></b></p>
			</div>
			<p><i>Final year(2016 batch),Information Science and Engineering Dept,RVCE.</i</p>
		</div>
		
	</div>
</div>-->

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      myFunction(xhttp);
    }
  };
  xhttp.open("GET", "cd_catalog.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Name</th><th>Department</th></tr>";
  var x = xmlDoc.getElementsByTagName("CD");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("DEPT")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>
</body>
</html>
