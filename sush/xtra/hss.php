<html>
    <head>
		<title>HSS Details</title>
			
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
					<tr><td><b><font color="white" size=6>HSS details:</font></b></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Event name :</font></td><td><input type="text" name="e_name"/></td></tr>
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

/*$usnErr = $semErr = $e_nameErr = $s_dateErr = $e_dateErr = $categoryErr = "";
$usn = $sem = $e_name =$s_date =$e_date =$category ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["usn"])) {
    $usnErr = "Enter usn";
  } else {
    $usn = test_input($_POST["usn"]);
  }

  if (empty($_POST["sem"])) {
    $semErr = "Enter semester";
  } else {
    $sem = test_input($_POST["sem"]);
  }
  
  if (empty($_POST["e_name"])) {
    $e_nameErr = "Enter the name of the event";
  } else {
    $e_name = test_input($_POST["e_name"]);
  }
  
  if (empty($_POST["s_date"])) {
    $s_dateErr = "Enter the start date";
  } else {
    $s_date = test_input($_POST["s_date"]);
  }
  
  if (empty($_POST["e_date"])) {
    $e_dateErr = "Enter the end date";
  } else {
    $e_date = test_input($_POST["e_date"]);
  }
  
    
  if (empty($_POST["category"])) {
    $categoryErr = "Enter the category of the event";
  } else {
    $category = test_input($_POST["category"]);
  }
}*/

$usn=$_POST['usn'];
$sem=$_POST['sem'];
$e_name=$_POST['e_name'];
$s_date=$_POST['s_date'];
$e_date=$_POST['e_date'];
$category=$_POST['category'];


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


	$sql = "insert into counsellor.hss values('$usn',$sem,'$e_name','$s_date','$e_date', '$category')";
	

if ($conn->query($sql) === TRUE) {
  echo "THANK YOU!!!!YOUR SUBMISSION HAS BEEN RECORDED SUCCESSFULLY.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);
?>

    </body>
</html>
