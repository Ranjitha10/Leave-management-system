<html>
    <head>
		<title>Marks Details</title>
			
    </head>
        <br>
		<br>
		<br>
		<br>
		<br>
     <body bgcolor="#0a7f99">
	 
<center>
      <form method="post" action="" onSubmit="">
					<table>
					<tr><td><b><font color="white" size=6>CIE Marks:</font></b></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>USN :</font></td><td><input type="text" name="usn" required="required"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Semester :</font></td><td><select type="integer" name="sem" required="required"/>
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
					<tr><td><font color="white" size=5.8>Subject Code :</font></td><td><input type="text" name="sub" required="required"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>CIE 1 :</font></td><td><input type="integer" name="cie1" required="required"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>CIE 2 :</font></td><td><input type="integer" name="cie2" required="required"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>CIE 3 :</font></td><td><input type="integer" name="cie3" required="required"/></td></tr>
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

$usnErr = $semErr = $subErr = $cie1Err = $cie2Err = $cie3Err = "";
$usn = $sem = $sub =$cie1 =$cie2 =$cie3 ="";

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
  
  if (empty($_POST["sub"])) {
    $subErr = "Enter subject code";
  } else {
    $sub = test_input($_POST["sub"]);
  }
  
  if (empty($_POST["cie1"])) {
    $cie1Err = "Enter marks of cie1";
  } else {
    $cie1 = test_input($_POST["cie1"]);
  }
  
  if (empty($_POST["cie2"])) {
    $cie2Err = "Enter marks of cie2";
  } else {
    $cie2 = test_input($_POST["cie2"]);
  }
  
    
  if (empty($_POST["cie3"])) {
    $cie3Err = "Enter marks of cie3";
  } else {
    $cie3 = test_input($_POST["cie3"]);
  }
}

$usn=$_POST['usn'];
$sem=$_POST['sem'];
$sub=$_POST['sub'];
$cie1=$_POST['cie1'];
$cie2=$_POST['cie2'];
$cie3=$_POST['cie3'];


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

if($sem == 1)
	$sql = "insert into counsellor.sem1 values('$usn','$sub',$cie1,$cie2,$cie3)";
else 	if($sem == 2)
			$sql = "insert into counsellor.sem2 values('$usn','$sub',$cie1,$cie2,$cie3)";
else 	if($sem == 3)
			$sql = "insert into counsellor.sem3 values('$usn','$sub',$cie1,$cie2,$cie3)";
else 	if($sem == 4)
			$sql = "insert into counsellor.sem4 values('$usn','$sub',$cie1,$cie2,$cie3)";
else 	if($sem == 5)
			$sql = "insert into counsellor.sem5 values('$usn','$sub',$cie1,$cie2,$cie3)";
else 	if($sem == 6)
			$sql = "insert into counsellor.sem6 values('$usn','$sub',$cie1,$cie2,$cie3)";
else 	if($sem == 7)
			$sql = "insert into counsellor.sem7 values('$usn','$sub',$cie1,$cie2,$cie3)";
else 	if($sem == 8)
			$sql = "insert into counsellor.sem8 values('$usn','$sub',$cie1,$cie2,$cie3)";	

if ($conn->query($sql) === TRUE) {
  echo "THANK YOU!!!!YOUR SUBMISSION HAS BEEN RECORDED SUCCESSFULLY.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);
?>

    </body>
</html>
