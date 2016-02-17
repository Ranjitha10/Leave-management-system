<html>
    <head>
		<title>Absence Details</title>
    </head>
        <br>
		<br>
		<br>
		<br>
		<br>
     <body bgcolor="#0a7f99">
	 
<center>
      <form method="post" action="">
					<table>
					<tr><td><b><font color="white" size=6>Absence details:</font></b></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Sem :</font></td><td><input type="int" name="sem" required="required"/></td></tr>
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
echo $_SESSION["name1"];  

$u_name=$_SESSION["name1"];

//$usn=$_POST['usn'];
$sem=$_POST['sem'];
$s_date=$_POST['s_date'];
$e_date=$_POST['e_date'];
$reason=$_POST['reason'];

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


	//$sql = "insert into counsellor.fee values('$usn','$sem',$challan,$amt,'$favour', '$deposit_date')";

$sql1= "select * from counsellor.student"; 
$result=$conn->query($sql1);
$row=$result->fetch_array(MYSQLI_ASSOC);
  //mysqli_fetch_array($result);


if(!(strcmp($row["user_name"],$u_name)))
{
$usn1=$row["usn"];
$sql = "insert into counsellor.absence values('$usn1',$sem,$s_date,$e_date,'$reason')";
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
