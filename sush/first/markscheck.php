<html>
    <head>
		<title>Report Card Details</title>
    </head>
        <br>
		<br>
		<br>
<body bgcolor="#0a7f99">

<center>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	
<table>
<tr><td><font color="white" size=5.8>Enter USN:</font></td><td><select id="text" name="usn"/>
					
					<option value='-1'>Select</option> 
					
					<?php
					
					//$usn=$_POST["usn"];$usn1=$usn;
					
					session_start();
					
					$u_name=$_SESSION["name1"];
                  
//$_SESSION["u_pass"]=$_POST['pass'];

					
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
					
					$result3=$conn->query("select * from counsellor.st");
					$result4=$conn->query("select * from counsellor.student");
					
				while($row3=$result3->fetch_array(MYSQLI_ASSOC))
				{
					if(strcmp($u_name,$row3["name"])==0)
					{
						while($row4=$result4->fetch_array(MYSQLI_ASSOC))
						{	
							if($row3["batch"]==$row4["batch"])
							{
						
					
					?>
						<option value="<?php echo $row4['usn'];?>"><?php echo $row4['usn'];?></option>
					
					
					<?php
					
				//	$usn=$_POST["usn"];		
				}
				
						}
					}
				}
			$_SESSION["usn2"]=$_POST['usn'];
				mysqli_close($conn);
						?>
					</select>
					</td></tr>
					<tr><td>      </td><td><input type="submit" value="Submit"></td></tr>
					
					
					

<?PHP

$usn=$_SESSION["usn2"];

$hostname = "localhost";  
$username = "root";  
$password = ""; 
$dbname = "counsellor"; 
$db_table = "markscard";

$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$result1= $conn->query("select * from counsellor.student1");
$result1=$conn->query("select * from counsellor.current_sem");
$result2=$conn->query("select * from counsellor.markscard");

$check=0;
while($row1=$result1->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($row1["usn"],$usn)))
	{
		while($row2=$result2->fetch_array(MYSQLI_ASSOC))
		{
			if( strcmp($usn,$row2["usn"])==0 && $row1["sem"]==$row2["sem"])
			{
				
					echo "<script>alert('Has uploaded Report card!!!');</script>";
					$check=1;
			}

		}
	}
}
if($check==0)
{
echo "<script>alert('Has not uploaded Report card!!!');</script>";
					
}
mysqli_close($conn);	

?>


					
					</table>
					</form>		
					</center>  

					
</body>
</html>
