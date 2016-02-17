<html>
    <head>
		<title>CIE marks</title>
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
					</td></tr>
								
							<tr><td><br></td></tr>
							
					<tr><td>      </td><td><input type="submit" name="submit" value="enter"></td></tr>
	
	
	<center><table>
	<br>
	<br>
	<br>
	<br>
	<tr><td><b><font size=6 color=white
	>CIE marks  </font></b></td>
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

            <center><table width="1000px" height="50px" border="1" >    
                    <th width="10%" height="10%"><font size="4" color=white><u><b>SUBJECT CODE</b></u></font></th>
                    <th width="10%" height="10%"><font size="4" color=white><u><b>CIE 1</b></u></font></th>
                    <th width="10%" height="10%"><font size="4" color=white><u><b>CIE 2</b></u></font></th>
                    <th width="10%" height="10%"><font size="4" color=white><u><b>CIE 3</b></u></font></th>
            </table></center>
		
           
<?php

  if(isset($_POST['submit'])) 
  {
	$usn=$_POST["usn"];
$result1=$conn->query("select * from counsellor.current_sem");

while($row1=$result1->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($row1["usn"],$usn)))
	{
		
				if($row1["sem"]==1)
				$result2=$conn->query("select * from counsellor.sem1");
				
				if($row1["sem"]==2)
				$result2=$conn->query("select * from counsellor.sem2");
				
				if($row1["sem"]==3)
				$result2=$conn->query("select * from counsellor.sem3");
				
				if($row1["sem"]==4)
				$result2=$conn->query("select * from counsellor.sem4");
				
				if($row1["sem"]==5)
				$result2=$conn->query("select * from counsellor.sem5");
				
				if($row1["sem"]==6)
				$result2=$conn->query("select * from counsellor.sem6");
				
				if($row1["sem"]==7)
				$result2=$conn->query("select * from counsellor.sem7");
				
				if($row1["sem"]==8)
				$result2=$conn->query("select * from counsellor.sem8");
		
		
		
		while($row2=$result2->fetch_array(MYSQLI_ASSOC))
		{
					if( strcmp($row2["usn"],$row1["usn"])==0)
					{
					
					?>
		</table></center>
             <center><table width="1000px" height="50px" bgcolor="" border="1">
            <tr>
                
                <td width="10%" ><center><?php echo $row2["sub_code"]; ?></center></td>
                <td width="10%" height="10%"><center><?php echo $row2["cie1"]; ?><center></td>
                <td width="10%" height="10%"><center><?php echo $row2["cie2"]; ?><center></td>
                <td width="10%" height="10%"><center><?php echo $row2["cie3"]; ?><center></td>
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
