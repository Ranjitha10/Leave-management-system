<html>
    <head>
		<title>Fee Details</title>
				
    </head>
        <br>
		<br>
		<br>
		<br>
		<br>
     <body>
     <?php
session_start(); 
$u_name=$_SESSION["name1"];

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

$result1= $conn->query("select * from counsellor.student");
$result2=$conn->query("select * from counsellor.current_sem");
$result3=$conn->query("select * from counsellor.fee");

while($row1=$result1->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($row1["user_name"],$u_name)))
	{
		while($row2=$result2->fetch_array(MYSQLI_ASSOC))
		{
			if(strcmp($row2["usn"],$row1["usn"])==0)
			{
				while($row3=$result3->fetch_array(MYSQLI_ASSOC))
				{
					if( strcmp($row2["usn"],$row3["usn"])==0 && $row2["sem"]==$row3["sem"])
					{
						$usn=$row3["usn"];
						$sem=$row3["sem"];
				
						$challan=$row3["challan"];
						$amt=$row3["amt"];
						$favour=$row3["favour"];
						$deposit=$row3["deposit"];
				
						$challan1=$_POST['challan']; //echo $challan1;
						$amt1=$_POST['amt'];
						$favour1=$_POST['favour'];
						$deposit1=$_POST['deposit_date'];
			
						$sql = "update counsellor.fee set challan=$challan1, amt=$amt1, favour='$favour1', deposit=$deposit1 where usn='$usn' and sem=$sem";
					}
				}
			}
		}
	}
}

if ($conn->query($sql) == TRUE) {
	echo "<script>alert('Details updated!!!');</script>";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);	
?>
	 
<center>
      <form method="post" action="" onSubmit=return formsubmit()>
					<table>
					<tr><td><b><font color="white" size=6>Fee details:</font></b></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Challan No. :</font></td><td><input type="text" name="challan" value="<?php echo $challan;?>"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Amount :</font></td><td><input type="text" name="amt" value="<?php echo $amt;?>"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>In favour of :</font></td><td><input type="text" name="favour" value="<?php echo $favour;?>"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Date :</font></td><td><input type="int" name="deposit_date" value="<?php echo $deposit;?>"/></td></tr>
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
