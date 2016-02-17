<html>
    <head>
		<title>Fee Details</title>
				
    </head>
        <br>
		<br>
		<br>
		<br>
		<br>
     <body bgcolor="#0a7f99">
	 
<center>
      <form method="post" action="" onSubmit=return formsubmit()>
					<table>
					<tr><td><b><font color="white" size=6>Fee details:</font></b></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Challan No. :</font></td><td><input type="text" name="challan"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Amount :</font></td><td><input type="text" name="amt"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>In favour of :</font></td><td><input type="text" name="favour"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Date :</font></td><td><input type="int" name="deposit_date"/></td></tr>
								<tr><td><br></td></tr>			
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

$challan=$_POST['challan'];
$amt=$_POST['amt'];
$favour=$_POST['favour'];
$deposit_date=$_POST['deposit_date'];

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
				
				$sql = "insert into counsellor.fee values('$usn',$sem,$challan,$amt,'$favour',$deposit_date)";
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
