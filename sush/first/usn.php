<html>
    <head>
		<title>CIE Details</title>
    </head>
        <br>
		<br>
		<br>
<body bgcolor="#0a7f99">

<center>
       <form method="post" action="m.php" onSubmit=return formsubmit()>
<table>
<tr><td><font color="white" size=5.8>Sub Code:</font></td><td><select id="text" name="sub_code"/>
					
					<option value='-1'>Select</option> 
					
					<?php
					session_start();
										$usn=$_SESSION["usn2"];
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
					
					$result3=$conn->query("select * from counsellor.current_sem");
					
				while($row3=$result3->fetch_array(MYSQLI_ASSOC))
				{
					if(strcmp($usn,$row3['usn'])==0)
					{
						$s=$row3['sem'];
						$result4=$conn->query("select * from counsellor.sem($s)");
						while($row4=$result4->fetch_array(MYSQLI_ASSOC))
						{	
							if(!(strcmp($usn,$row4['usn'])))
							{
					
					?>
						<option value="<?php echo $row4['sub_code'];?>"><?php echo $row4['sub_code'];?></option>
					
					
					<?php
					
				
				}
				
						}
					}
				}
			
				mysqli_close($conn);
						?>
					</select>
					</td></tr>
					
					<tr><td>      </td><td><input type="submit" value="Submit"></td></tr>
					
					
					
					
					
					</table>
					</form>		
					</center>  

					
</body>
</html>
