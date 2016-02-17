<html>
    <head>
		<title>hss Details</title>
    </head>
        <br>
		<br>
		<br>
<body>

<center>
     <form action>
	 <font color=white size=6>Enter USN:</font></td><td>
	 <select id="text" name="usn" onchange="loadXMLDoc(this.value)"/>
					
					<option value='-1'>Select</option> 
					
					<?php
					
					session_start();
					$u_name=$_SESSION["name1"];
					//echo $u_name;
					
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "counsellor";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
    						die("Connection failed: " . $conn->connect_error);
					}
					
					$result3=$conn->query("select * from counsellor.staff");
					$result4=$conn->query("select * from counsellor.student1");
					
				while($row3=$result3->fetch_array(MYSQLI_ASSOC))
				{
					if(strcmp($u_name,$row3["name"])==0)
					{
						while($row4=$result4->fetch_array(MYSQLI_ASSOC))
						{	
							if($row3["batch"]==$row4["batch"])
							{
					
					
					?>
						<option value="<?php echo $row4['usn'];?>"><?php echo $row4['usn'];?></option>
					
					
					<?php
					
							}
						}
					}
				}
						?>
					<p id="demo">Info</p>
					</select>
					</form>
					<div id="txtHint"><p size="24">Student Registration Detail:</p></div>
	
					
	<center>
	<br>
	<br>
	<br>
	<br>
	<script>
function loadXMLDoc(str) {
  var xmlhttp = new XMLHttpRequest();
  $q=str;
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      var x, i, xmlDoc, txt,y,z,t,u,v;
  echo "hello";
  xmlDoc = xml.responseXML;
  txt = "";
   t = xmlDoc.getElementsByTagName("usn");
  x = xmlDoc.getElementsByTagName("sem");
   y = xmlDoc.getElementsByTagName("challan");
    z = xmlDoc.getElementsByTagName("amt");
	 u = xmlDoc.getElementsByTagName("favor");
	  v = xmlDoc.getElementsByTagName("deposit");
  for (i = 0; i< t.length; i++) {
    //if(t[i].childNodes[0].nodeValue==str){
    txt += x[i].childNodes[0].nodeValue + "<br>";
/*	txt += y[i].childNodes[0].nodeValue + "<br>";
	txt += z[i].childNodes[0].nodeValue + "<br>";
	txt += u[i].childNodes[0].nodeValue + "<br>";
	txt += v[i].childNodes[0].nodeValue + "<br>";*/
  
  document.getElementById("demo").innerHTML = txt;
}}
    }
  }
  xmlhttp.open("GET", "fee.xml", true);
  xmlhttp.send();
}

function myFunction(xml) {
  }
</script>

	
    </body>
</html>
