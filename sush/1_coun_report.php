<html>
    <head>
	
    </head>
        <br>
		<br>
		<br>
<body>

<center>
      <form method="post" action="report_pdf.php">
					<table>
					<tr><td><br></td></tr>
					<tr><td><font color=white size=5.8>Enter USN:</font></td><td><select id="text" name="usn"/>
					
					<option value='-1'>Select</option> 
					
					<?php
					
					session_start();
					$u_name=$_SESSION["name1"];
					//echo $u_name;
					
					$servername = "localhost";
					$username = "root";
					$password = "richa";
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
					if(strcmp($u_name,$row3["user_name"])==0)
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
					</select>
					</td></tr>
								
							<tr><td><br></td></tr>
							
					<tr><td>      </td><td><input type="submit" name="submit" value="enter"></td></tr>
	

	<br>
	<br>
	<br>
	
	
	<tr><td><br></td></tr>
	
           


    </body>
</html>
