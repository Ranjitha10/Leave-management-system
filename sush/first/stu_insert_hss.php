<html>
    <head>
		<title>HSS Details</title>
		
	<script type='text/javascript' >
	function formsubmit()
	{

		var e_name = document.getElementById('e_name');
		var s_date = document.getElementById('s_date');
		var e_date = document.getElementById('e_date');
		var category = document.getElementById('category');
		
				
		if (e_name.value == '' )
		{
			alert('Please enter the event name');
			e_name.focus();
			e_name.select();
			return false;
		}
		
		if (s_date.value == '' )
		{
			alert('Please select start date of the event');
			s_date.focus();
			s_date.select();
			return false;
		}
		
		if (e_date.value == '' )
		{
			alert('Please select end date of the event');
			e_date.focus();
			e_date.select();
			return false;
		}
		
		if (category.value == '-1' )
		{
				alert('Please select a category');
				category.focus();
				category.select();	
				return false;
		}
			
	}
</script>
			
    </head>
        <br>
		<br>
		<br>
		<br>
		<br>
     <body bgcolor="#0a7f99">
	  <?php
$e_nameErr = "";
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
}
 ?>
 
<center>
      <form method="post" action="" onSubmit=return formsubmit()>
					<table>
					<tr><td><b><font color="white" size=6>HSS details:</font></b></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Event name :</font></td><td><input type="text" name="e_name" value="<?php echo $e_name;?>">
   <span class="error"> <?php echo $e_nameErr;?></span></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>From :</font></td><td><input type="date" name="s_date"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>To :</font></td><td><input type="date" name="e_date"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Category :</font></td><td><select id="text" name="category"/>
					 
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
//echo $_SESSION["name1"];  

$u_name=$_SESSION["name1"];

//$usn=$_POST['usn'];
$e_name=$_POST['e_name'];
$s_date=$_POST['s_date'];
$e_date=$_POST['e_date'];
$reason=$_POST['category'];


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

echo "hey!!";


if(!(strcmp($row["user_name"],$u_name)))
{
echo $row["usn"];
$usn1=$row["usn"];
$sql = "insert into counsellor.hss values('$usn1',$sem,'$e_name','$s_date','$e_date','$category')";

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


	
	

