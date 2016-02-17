<html>
    <head>
		<title>hss Details</title>
		<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
    </head>
        <br>
		<br>
		<br>
<body>

<center>
      <form action="">
					<p><font size=5.8 color="white">Enter USN:</font></p>
					<select id="text" name="usn" onchange="showusn(this.value)"/>
					<option value='-1'>Select</option> 
					

					
					<?php
					
					session_start();
					//$u_name=$_SESSION["name1"];
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
					
					$result4=$conn->query("select * from counsellor.student1");
					
				while($row4=$result4->fetch_array(MYSQLI_ASSOC))
						{	
							
					?>
						<option value="<?php echo $row4['usn'];?>"><?php echo $row4['usn'];?></option>
					
					
					<?php
					
				}
						?>
					</select>
					</form>
					<div id="txtHint"><b>Student Details:</b></div>
	
	<center>
	<br>
	<br>
	<br>
	<br>
<script>
function showusn(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("txtHint").innerHTML = xhttp.responseText;
    }
  }
  xhttp.open("GET", "getusn.php?q="+str, true);
  xhttp.send();
}
</script>

	

    </body>
</html>
