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
$challanErr = $amtErr = $favourErr = $deposit_dateErr = "";
	 $challan = $amt = $favour = $deposit_date = "";
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
 ?>
	 
<center>
      <form method="post" action="" onSubmit=return formsubmit()>
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
					<tr><td><font color="white" size=5.8>Date :</font></td><td><input type="int" name="deposit_date" value="<?php echo $deposit_date;?>">
   <span class="error"> <?php echo $deposit_dateErr;?></td></tr>
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
				if($flag==0){
				$sql = "insert into counsellor.fee values('$usn',$sem,$challan,$amt,'$favour',$deposit_date)";
			 } }
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
