<html>
    <head>
		<title>Absence Details</title>
    </head>
        <br>
		<br>
		<br>
<body>

<center>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<table>
					<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Enter USN:</font></td><td><select id="text" name="usn"/>
					
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
							
					<tr><td>      </td><td><input type="submit" name="submit" value="enter"></td></tr>
	
	
	<center><table>
	<br>
	<br>
	<br>
	<br>
	<tr><td><b><font size=6 color=white>Absence details  </font></b></td>
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
		
		<td><b><font size=6 color=white> of :  </font></b></td>
		<td><b><font size=6 color=black><?php echo $row4["name"];?></font></b></td></tr>
	<?php
	}}}
	?>
	
	<tr><td><br></td></tr>
	</table></center>     

            <center><table width="1000px" height="50px" border="1">    
                    <th width="10%" height="10%"><font size="4" color=white><u><b>START DATE</b></u></font></th>
                    <th width="10%" height="10%"><font size="4" color=white><u><b>END DATE</b></u></font></th>
                    <th width="10%" height="10%"><font size="4" color=white><u><b>REASON</b></u></font></th>
            </table></center>
		
           
<?php

  if(isset($_POST['submit'])) 
  {
	$usn=$_POST["usn"];
$result1=$conn->query("select * from counsellor.current_sem");
$result2=$conn->query("select * from counsellor.absence");

while($row1=$result1->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($row1["usn"],$usn)))
	{
		while($row2=$result2->fetch_array(MYSQLI_ASSOC))
		{
					if( strcmp($row2["usn"],$row1["usn"])==0 && $row2["sem"]==$row1["sem"] )
					{
					
					?>
		</table></center>
             <center><table width="1000px" height="50px" bgcolor="" border="1">
            <tr>
                
                <td width="10%" ><center><?php echo $row2["start"]; ?></center></td>
                <td width="10%" height="10%"><center><?php echo $row2["end"]; ?></center></td>
                <td width="10%" height="10%"><center><?php echo $row2["reason"]; ?></center></td>
            </tr>
       
         </table>
    </center>
		
		<?php
								
				}
				
			}
		
	}

}
//mysqli_close($conn);
}
?>

    </body>
</html>
