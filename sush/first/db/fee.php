<html>
    <head>
		<title>Fee Details</title>
		
	<script type='text/javascript' >
	function formsubmit()
	{

		var sem = document.getElementById('sem');
		var challan = document.getElementById('challan');
		var amt = document.getElementById('amt');
		var favour = document.getElementById('favour');
		var deposit_date = document.getElementById('deposit_date');
						
		if (sem.value == -1)
		{
			alert('Please enter your semester');
			sem.focus();
			sem.select();
			return false;
		}
		
		if (challan.value == '' )
		{
			alert('Please enter challan no.');
			challan.focus();
			challan.select();
			return false;
		}
		
		if (amt.value == '' )
		{
			alert('Please enter amount');
			amt.focus();
			amt.select();
			return false;
		}
		
		if (favour.value == '' )
		{
			alert('Please enter "In favour of: "');
			favour.focus();
			favour.select();
			return false;
		}
		
		if (deposit_date.value == '' )
		{
			alert('Please enter deposit date');
			deposit_date.focus();
			deposit_date.select();
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

/*$usnErr = $semErr = $challanErr = $amtErr = $favourErr = $deposit_dateErr = "";
$usn = $sem = $challan =$amt =$favour =$deposit_date ="";

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
  
  if (empty($_POST["challan"])) {
    $challanErr = "Enter challan number";
  } else {
    $challan = test_input($_POST["challan"]);
  }
  
  if (empty($_POST["amt"])) {
    $amtErr = "Enter the amount";
  } else {
    $amt = test_input($_POST["amt"]);
  }
  
  if (empty($_POST["favour"])) {
    $favourErr = "Enter the 'in favour of' details";
  } else {
    $favour = test_input($_POST["favour"]);
  }
  
    
  if (empty($_POST["deposit_date"])) {
    $deposit_dateErr = "Enter the date of deposit";
  } else {
    $deposit_date = test_input($_POST["deposit_date"]);
  }
}*/

$usn=$_POST['usn'];
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


	$sql = "insert into counsellor.fee values('$usn','$sem',$challan,$amt,'$favour', '$deposit_date')";
	

if ($conn->query($sql) === TRUE) {
  echo "THANK YOU!!!!YOUR SUBMISSION HAS BEEN RECORDED SUCCESSFULLY.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);
?>

    </body>
</html>
