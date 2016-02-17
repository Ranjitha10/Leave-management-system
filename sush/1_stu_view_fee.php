<html>
    <head>
		<title>Absence Details</title>
    </head>
        <br>
		<br>
		<br>
<body>

<center><table>
	<tr><td><b><font size=6 color=white>Fee details:</font></b></td></tr>
	<tr><td><br></td></tr>
	</table></center>     

            <center><table width="1000px" height="50px" border="1" >
                    <th width="10%" height="10%"><font size="4" color=white><u><b>CHALLAN NO.</b></u></font></th>   
                    <th width="10%" height="10%"><font size="4" color=white><u><b>AMOUNT</b></u></font></th>
                    <th width="10%" height="10%"><font size="4" color=white><u><b> IN FAVOUR OF</b></u></font></th>
                    <th width="10%" height="10%"><font size="4" color=white><u><b>DEPOSIT DATE</b></u></font></th>
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

$result3=$conn->query("select * from counsellor.fee");

//echo "hey!!";
//echo $u_name;

while($row1=$result1->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($row1["user_name"],$_SESSION["name1"])))
	{
		while($row2=$result2->fetch_array(MYSQLI_ASSOC))
		{
			if(!(strcmp($row2["usn"],$row1["usn"])))
			{
				//gets my current sem
				
				while($row3=$result3->fetch_array(MYSQLI_ASSOC))
				{
					if( strcmp($row3["usn"],$row2["usn"])==0 && $row3["sem"]==$row2["sem"] )
					{
					
					?>
		</table></center>
            <center><table width="1000px" height="50px" bgcolor="" border="1">
            <tr>
                
                <td width="10%" ><center><?php echo $row3["challan"]; ?></center></td>
                <td width="10%" height="10%"><center><?php echo $row3["amt"]; ?></center></td>
                <td width="10%" height="10%"><center><?php echo $row3["favour"]; ?></center></td>
                 <td width="10%" height="10%"><center><?php echo $row3["deposit"]; ?></center></td>
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
