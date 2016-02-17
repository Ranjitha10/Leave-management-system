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

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "counsellor";
$challanErr = $amtErr = $favourErr = $depositErr = "";
	 $challan = $amt = $favour = $deposit = "";
	 $flag=0;
	 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
  if (empty($_POST["challan"])) {
     $challanErr = "challan no is required";
   } else {
     $challan = test_input($_POST["challan"]);
     if (!preg_match("/^[0-9]{4,6}$/",$challan)) {
       $challanErr = "invalid challan no"; $flag=1;
     }
   }
   
   if (empty($_POST["amt"])) {
     $amtErr = "Amount paid is required";
   } else {
     $amt = test_input($_POST["amt"]);
     if (!preg_match("/^[0-9]{4,6}$/",$amt)) {
       $amtErr = "invalid data/amt"; $flag=1;
     }
   }
   
     if (empty($_POST["favour"])) {
     $favourErr = "required";
   } else {
     $favour = test_input($_POST["favour"]);
     if (!preg_match("/^[a-zA-Z. ]*$/",$favour)) {
       $favourErr = "invalid"; $flag=1;
     }
   }
   
  
  } 
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
	 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result1= $conn->query("select * from counsellor.student1");
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
				
						$challan1=$_POST["challan"]; //echo $challan1;
						$amt1=$_POST["amt"];
						$favour1=$_POST["favour"];
						$deposit1=$_POST["deposit"];
			         if($flag!=1){
						$sql = "update counsellor.fee set challan=$challan1, amt=$amt1, favour='$favour1', deposit=$deposit1 where usn='$usn' and sem=$sem";
					}}
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
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	  <p><span class="error"></span></p>
					<table>
					<tr><td><b><font color="white" size=6>Fee details:</font></b></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Challan No. :</font></td><td><input type="text" name="challan" value="<?php echo $challan;?>">
   <span class="error"> <?php echo $challanErr;?></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Amount :</font></td><td><input type="text" name="amt" value="<?php echo $amt;?>">
   <span class="error"> <?php echo $amtErr;?></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>In favour of :</font></td><td><input type="text" name="favour" value="<?php echo $favour;?>">
   <span class="error"> <?php echo $favourErr;?></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Date :</font></td><td><input type="int" name="deposit" value="<?php echo $deposit;?>">
   <span class="error"> <?php echo $depositErr;?></td></tr>
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
