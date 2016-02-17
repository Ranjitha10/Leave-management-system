<html>
    <head>
		<title>HSS Details</title>
			
    </head>
        <br>
		<br>
		<br>
		<br>
		<br>
     <body >
	 
	  <?php
/*$e_nameErr = "";
$e_name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["e_name"])) {
     $e_nameErr = "Name is required";
   } else {
     $e_name = test_input($_POST["e_name"]);
     if (!preg_match("/^[a-zA-Z@]*$/",$e_name)) {
       $e_nameErr = "Only letters and white space allowed"; 
     }
   }
  

  } 
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}*/
 ?>
	 
<center>
      <form method="post" action="" onSubmit=return formsubmit()>
					<table>
					<tr><td><b><font color="white" size=6>HSS details:</font></b></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Event name :</font></td><td><input type="text" name="e_name" value="<?php echo $u_name; ?>" /></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>From :</font></td><td><input type="date" name="s_date" required="required"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>To :</font></td><td><input type="date" name="e_date" required="required"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Category :</font></td><td><select id="text" name="category" required="required" />
					 
						<option value='-1'>Select</option> 
						<option value='Internship'>Internship</option>
						<option value='Training'>Training</option>
						<option value='Workshop'>Workshop</option>
						<option value='NCC'>NCC</option>
						<option value='Paper presentation'>Paper presentation</option>
						<option value='Coordinating an event'>Coordinating the event</option>
						<option value='Participating in the event'>Participating in the event</option>
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

$e_name=$_POST['e_name'];
$s_date=$_POST['s_date'];
$e_date=$_POST['e_date'];
$category=$_POST['category'];

$servername = "localhost";
$username = "root";
$password = "richa";
$dbname = "counsellor";
$abc=47;
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
				
				$sql = "insert into counsellor.hss values('$usn',$sem,'$e_name',$s_date,$e_date,'$category')";
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


	
	

