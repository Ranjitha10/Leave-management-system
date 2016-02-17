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
      <form method="post" action="abc.html" onSubmit=return formsubmit()>
					<table>
					<tr><td><b><font color="white" size=6>Fee details:</font></b></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Semester :</font></td><td><select type="integer" name="sem"/>
						<option value='-1'>Select</option> 
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
					</select>
					</td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Challan No. :</font></td><td><input type="text" name="challan"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Amount :</font></td><td><input type="text" name="amt"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>In favour of :</font></td><td><input type="text" name="favour"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Date :</font></td><td><input type="date" name="deposit_date"/></td></tr>
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
//echo $_SESSION["name1"];  

$u_name=$_SESSION["name1"];

//$usn=$_POST['usn'];
$sem=$_POST['sem'];
$challan=$_POST['challan'];
$amt=$_POST['amt'];
$favour=$_POST['favour'];
$deposit_date=$_POST['deposit_date'];


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


	//$sql = "insert into counsellor.fee values('$usn','$sem',$challan,$amt,'$favour', '$deposit_date')";

$sql1= "select * from counsellor.student"; 
$result=$conn->query($sql1);
$row=$result->fetch_array(MYSQLI_ASSOC);
  //mysqli_fetch_array($result);

//echo $u_name;
//echo $row["name"];
//echo "hey!!";

if(!(strcmp($row["user_name"],$u_name)))
{
$usn1=$row["usn"];
$sql = "insert into counsellor.fee values('$usn1',$sem,$challan,$amt,'$favour','$deposit_date')";

}
if ($conn->query($sql) == TRUE) {
	echo "<script>alert('Details Entered!!!');</script>";
  //echo "THANK YOU!!!!YOUR SUBMISSION HAS BEEN RECORDED SUCCESSFULLY.";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);	
if ($conn->query($sql) === TRUE) {
mysqli_close($conn);
?>

    </body>
</html>
