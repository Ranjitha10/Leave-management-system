<html>
    <head>
		<title>Absence Details</title>
    </head>
        <br>
		<br>
		<br>
		<br>
		<br>
     <body >
	 
<center>
      <form method="post" action="">
					<table>
					<tr><td><b><font color="white" size=6>Absence details:</font></b></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>From :</font></td><td><input type="int" name="s_date" required="required"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>To :</font></td><td><input type="int" name="e_date" required="required"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Reason :</font></td><td><select id="text" name="reason" required="required"/>
					 
						<option value='-1'>Select</option> 
						<option value='Medical'>Medical</option>
						<option value='Technical Event'>Technical Event</option>
						<option value='Others'>Others</option>
					</select>
							</td></tr>	
							<tr><td><br></td></tr>
							<tr><td><br></td></tr>
					<tr><td>      </td><td><input type="submit" value="Submit"></td></tr>
					
					</table>
					</form>		
					</center>          
   

<br>
    <br>
    <br>
<?php
session_start(); 
$u_name=$_SESSION["name1"];

$s_date=$_POST['s_date'];
$e_date=$_POST['e_date'];
$reason=$_POST['reason'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "counsellor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$result1= $conn->query("select * from counsellor.student");
$result2=$conn->query("select * from counsellor.current_sem");

while($row1=$result1->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($row1["user_name"],$u_name)))
	{
		while($row2=$result2->fetch_array(MYSQLI_ASSOC))
		{
			if(strcmp($row2["usn"],$row1["usn"])==0)
			{
				$usn=$row2["usn"];
				$sem=$row2["sem"];
				//echo $usn;
				//echo $sem;
				
				$sql = "insert into counsellor.absence values('$usn',$sem,$s_date,$e_date,'$reason')";
			}
		}
	}
}

if ($conn->query($sql) == TRUE) {
	echo "<script>alert('Details Entered!!!');</script>";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);	
?>
    </body>
</html>
