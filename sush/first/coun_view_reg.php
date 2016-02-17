<html>
    <head>
		<title>STUDENT Details</title>
    </head>
        <br>
		<br>
		<br>
<body>

<center>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<table>
					<tr><td><br></td></tr>
					<tr><td><font color="black" size=5.8>Enter USN:</font></td><td><select id="text" name="usn"/>
					
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
							
					<tr><td>      </td><td><input type="submit" name="submit" value="submit"></td></tr>
					<center><table>
	<br>
	<br>
	<br>
	<br>
	<tr><td><b><font size=6>STUDENT details  </font></b></td>
	<?php
	 if(isset($_POST['submit'])) 
  	{
		$usn=$_POST["usn"];
		$result4=$conn->query("select * from counsellor.student1");
		while($row4=$result4->fetch_array(MYSQLI_ASSOC))
		{	
			if(strcmp($row4["usn"],$usn)==0)
							{
		?>
		
		<td><b><font size=6> of :  </font></b></td>
		<td><b><font size=6 color=#0a7f99><?php echo $row4["name"];?></font></b></td></tr>
	<?php
	}}}
	?>
	
	<tr><td><br></td></tr>
	</table></center>   

			<center><table width="1000px" height="50px" border="1" bgcolor=#0a7f99>
                    <th width="10%" height="10%"><u><b>DOB</b></u></th>   
                    <th width="10%" height="10%"><u><b>EMAIL_ID</b></u></th>
                    <th width="10%" height="10%"><u><b>PHONE_NO</b></u></th>
                    <th width="10%" height="10%"><u><b>FATHER NAME</b></u></th>
					<th width="10%" height="10%"><u><b>FATHER MAIL_ID</b></u></th>
					<th width="10%" height="10%"><u><b>FATHER NO.</b></u></th>
					<th width="10%" height="10%"><u><b>MOTHER NAME</b></u></th>
					<th width="10%" height="10%"><u><b>MOTHER MAIL_ID</b></u></th>
					<th width="10%" height="10%"><u><b>MOTHER NO.</b></u></th>
					<th width="10%" height="10%"><u><b>ADDRESS</b></u></th>
            </table></center>
 
<?php

  if(isset($_POST['submit'])) 
  {
	$usn=$_POST["usn"];
	
$result1=$conn->query("select * from counsellor.student");

while($row1=$result1->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($row1["usn"],$usn)))
	{
		?>
		</table></center>
            <center><table width="1000px" height="50px" bgcolor="" border="1">
            <tr>
                
                <td width="10%" height="10%"><?php echo $row1["dob"]; ?></td>
                <td width="10%" height="10%"><?php echo $row1["e_id"]; ?></td>
                <td width="10%" height="10%"><?php echo $row1["phone"]; ?></td>
                 <td width="10%" height="10%"><?php echo $row1["f_name"]; ?></td>
				 <td width="10%" height="10%"><?php echo $row1["f_id"]; ?></td>
				 <td width="10%" height="10%"><?php echo $row1["f_no"]; ?></td>
				 <td width="10%" height="10%"><?php echo $row1["m_name"]; ?></td>
				 <td width="10%" height="10%"><?php echo $row1["m_id"]; ?></td>
				 <td width="10%" height="10%"><?php echo $row1["m_no"]; ?></td>
				 <td width="10%" height="10%"><?php echo $row1["address"]; ?></td>
            </tr>
       
         </table>
    </center>
	
		<?php
					
					
						
				
				
			}
		
	
	
}

//mysqli_close($conn);
}
?>
    </body>
</html>
