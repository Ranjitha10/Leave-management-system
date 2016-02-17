<html>
    <head>
		<title>Absence Details</title>
    </head>
        <br>
		<br>
		<br>
<body>

<center><table>
	<tr><td><b><font size=6 color=white>CIE MARKS:</font></b></td></tr>
	<tr><td><br></td></tr>
	</table></center>     

            <center><table width="1000px" height="50px" border="1">    
                    <th width="10%" height="10%"><font size="4" color=white><u><b>SUBJECT CODE</b></u></font></th>
                    <th width="10%" height="10%"><font size="4" color=white><u><b>CIE 1</b></u></font></th>
                    <th width="10%" height="10%"><font size="4" color=white><u><b>CIE 2</b></u></font></th>
                    <th width="10%" height="10%"><font size="4" color=white><u><b>CIE 3</b></u></font></th>
            </table></center>
		
<?php
session_start();	
//echo $_SESSION["name1"];  

//$u_name=$_SESSION["name1"];

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

$result1=$conn->query("select * from counsellor.student");

$result2=$conn->query("select * from counsellor.current_sem");

while($row1=$result1->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($row1["user_name"],$_SESSION["name1"])))
	{
		while($row2=$result2->fetch_array(MYSQLI_ASSOC))
		{
			if(!(strcmp($row2["usn"],$row1["usn"])))
			{
				if($row2["sem"]==1)
				$result3=$conn->query("select * from counsellor.sem1");
				
				if($row2["sem"]==2)
				$result3=$conn->query("select * from counsellor.sem2");
				
				if($row2["sem"]==3)
				$result3=$conn->query("select * from counsellor.sem3");
				
				if($row2["sem"]==4)
				$result3=$conn->query("select * from counsellor.sem4");
				
				if($row2["sem"]==5)
				$result3=$conn->query("select * from counsellor.sem5");
				
				if($row2["sem"]==6)
				$result3=$conn->query("select * from counsellor.sem6");
				
				if($row2["sem"]==7)
				$result3=$conn->query("select * from counsellor.sem7");
				
				if($row2["sem"]==8)
				$result3=$conn->query("select * from counsellor.sem8");
				
				
				while($row3=$result3->fetch_array(MYSQLI_ASSOC))
				{
					if( strcmp($row3["usn"],$row2["usn"])==0 )
					{
					
					?>
		</table></center>
            <center><table width="1000px" height="50px" bgcolor="" border="1">
            <tr>
                
                <td width="10%" ><center><?php echo $row3["sub_code"]; ?><center></td>
                <td width="10%" height="10%"><center><?php echo $row3["cie1"]; ?><center></td>
                <td width="10%" height="10%"><center><?php echo $row3["cie2"]; ?><center></td>
                <td width="10%" height="10%"><center><?php echo $row3["cie3"]; ?><center></td>
            </tr>
       
         </table>
    </center>
		<?php
					
					}
						
				}
				
			}
		}
	}

}

mysqli_close($conn);
?>
    </body>
</html>
