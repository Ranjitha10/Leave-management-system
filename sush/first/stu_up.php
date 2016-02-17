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
	 <?php
session_start();
$u_name=$_SESSION["name1"];

//$usn=$_POST['usn'];
//$sem=$_POST['sem'];
$challan=$_POST['challan'];
$amt=$_POST['amt'];
$favour=$_POST['favour'];
$deposit_date=$_POST['deposit_date'];


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

$sql1= "select * from counsellor.student"; 
$result=$conn->query($sql1);
$row=$result->fetch_array(MYSQLI_ASSOC);
  //mysqli_fetch_array($result);

//echo "hey!!";
echo $u_name;
//echo $row["name"];

if(!(strcmp($row["user_name"],$u_name)))
{
echo $row["usn"];
$usn1=$row["usn"];

//$sql = "insert into counsellor.absence values('$usn1',$sem,$s_date,$e_date,'$reason')";

$sql2 = "select * from counsellor.fee";
$result2=$conn->query($sql2);
$row2=$result->fetch_array(MYSQLI_ASSOC);

}
	//$sql = "insert into counsellor.fee values('$usn','$sem',$challan,$amt,'$favour', '$deposit_date')";
	
/*
if ($conn->query($sql) === TRUE) {
  echo "THANK YOU!!!!YOUR SUBMISSION HAS BEEN RECORDED SUCCESSFULLY.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/

mysqli_close($conn);

?>


<center>
      <form method="post" action="abc.html" onSubmit="">
					<table>
					<tr><td><b><font color="white" size=6>Fee details:</font></b></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Challan No. :</font></td><td><input type="text" name="challan" value="<?php print $line['challan'];?>"></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Amount :</font></td><td><input type="text" name="amt" value=$row2["amt"] /></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>In favour of :</font></td><td><input type="text" name="favour" value=$row2["favour"] /></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Date :</font></td><td><input type="date" name="deposit_date" value=$row2["deposit"] /></td></tr>
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


    </body>
</html>
