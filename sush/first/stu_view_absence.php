<html>
    <head>
		<title>Absence Details</title>
    </head>
        <br>
		<br>
		<br>
<body>

<center><table>
	<tr><td><b><font size=6>Absence details:</font></b></td></tr>
	<tr><td><br></td></tr>
	</table></center>     

            <center><table width="1000px" height="50px" border="1" bgcolor=#0a7f99>
                    <th width="10%" height="10%"><font size="4"><u><b>SEMESTER</b></u></font></th>    
                    <th width="10%" height="10%"><font size="4"><u><b>START DATE</b></u></font></th>
                    <th width="10%" height="10%"><font size="4"><u><b>END DATE</b></u></font></th>
                    <th width="10%" height="10%"><font size="4"><u><b>REASON</b></u></font></th>
            </table></center>
		
<?php
session_start();	
//echo $_SESSION["name1"];  

//$u_name=$_SESSION["name1"];

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

$result1=$conn->query("select * from counsellor.student");
$row1=$result1->fetch_array(MYSQLI_ASSOC);

//echo "hey!!";
//echo $u_name;

if(!(strcmp($row1["user_name"],$_SESSION["name1"])))
{

$result2=$conn->query("select * from counsellor.absence");

while($row2=$result2->fetch_array(MYSQLI_ASSOC))
{	
	
	if(!(strcmp($row1["usn"],$row2["usn"])))
	{
		?>
		</table></center>
            <center><table width="1000px" height="50px" bgcolor="" border="1">
            <tr>
                <td width="10%" ><?php echo $row2["sem"]; ?></td>
                <td width="10%" ><?php echo $row2["start"]; ?></td>
                <td width="10%" height="10%"><?php echo $row2["end"]; ?></td>
                <td width="10%" height="10%"><?php echo $row2["reason"]; ?></td>
            </tr>
       
         </table>
    </center>
		<?php
	}
}
}
mysqli_close($conn);
?>
    </body>
</html>
