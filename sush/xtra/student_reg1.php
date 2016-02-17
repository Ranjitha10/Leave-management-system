<html>
    <head>
		<title>Registration Details</title>
		
	<script type='text/javascript' >
	function formsubmit()
	{

		var name = document.getElementById('name');
		var dob = document.getElementById('dob');
		var sex = document.getElementById('sex');
		var yoa = document.getElementById('yoa');
		var usn = document.getElementById('usn');
		var e_id = document.getElementById('e_id');
		var address = document.getElementById('address');
		var mode = document.getElementById('mode');
		var rank = document.getElementById('rank');
		var f_name = document.getElementById('f_name');
		var f_no = document.getElementById('f_no');
		var f_id = document.getElementById('f_id');
		var m_name = document.getElementById('m_name');
		var m_no = document.getElementById('m_no');
		var m_id = document.getElementById('m_id');
		
				
		if (name.value == '' )
		{
			alert('Please enter your Name');
			name.focus();
			name.select();
			return false;
		}
		
		if (dob.value == '' )
		{
			alert('Please enter you Date of Birth');
			dob.focus();
			dob.select();
			return false;
		}
		
		if (sex.value != '-1' )
		{
				alert('Please select your Sex');
				sex.focus();
				sex.select();	
				return false;
		}
		
		if (yoa.value == '' )
		{
			alert('Please enter your Year of Admission');
			yoa.focus();
			yoa.select();
			return false;
		}
		
		if (usn.value == '' )
		{
			alert('Please enter your USN');
			usn.focus();
			usn.select();
			return false;
		}
		
		if (e_id.value == '' )
		{
			alert('Please enter your Email ID');
			e_id.focus();
			e_id.select();
			return false;
		}
		
		if (address.value == '' )
		{
			alert('Please enter your Email ID');
			e_id.focus();
			e_id.select();
			return false;
		}
		
		if (mode.value == '-1' )
		{
			alert('Please enter your Mode of Admission');
			e_id.focus();
			e_id.select();
			return false;
		}
		
		if (rank.value == '' )
		{
			alert('Please enter your Email ID');
			e_id.focus();
			e_id.select();
			return false;
		}
		
		if (f_name.value == '' )
		{
			alert("Please enter your Father's name");
			f_name.focus();
			f_name.select();
			return false;
		}
		
		if (f_no.value == '' )
		{
			alert("Please enter your Father's Phone no.");
			f_no.focus();
			f_no.select();
			return false;
		}
		
		if (f_id.value == '' )
		{
			alert("Please enter your Father's Email ID");
			f_id.focus();
			f_id.select();
			return false;
		}
		
		if (m_name.value == '' )
		{
			alert("Please enter your Mother's name");
			m_name.focus();
			m_name.select();
			return false;
		}
		
		if (m_no.value == '' )
		{
			alert("Please enter your Mother's Phone no.");
			m_no.focus();
			m_no.select();
			return false;
		}
		
		if (m_id.value == '' )
		{
			alert("Please enter your Mother's Email ID");
			m_id.focus();
			m_id.select();
			return false;
		}
				
	}
</script>
			
    </head>
        <br>
		<br>
		<br>
     <body bgcolor="#0a7f99">
	 
<center>
      <form method="post" action="abc.html" onSubmit=return formsubmit()>
					<table>
					<tr><td><b><font color="white" size=6>Enter the following details:</font></b></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Name:</font></td><td><input type="text" name="name"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>DOB:</font></td><td><input type="date" name="dob"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>sex:</font></td><td>
					<input type="radio" name="sex" value="Male"><font color="White" size=4>Male</font></input>
					<input type="radio" name="sex" value="Female"><font color="White" size=4>Female</font></input>
						</td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Year of Admission:</font></td><td><input type="date" name="yoa"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>USN:</font></td><td><input type="text" name="usn"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Email ID:</font></td><td><input type="text" name="e_id"/></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Address:</font></td><td><input type="text" name="address"/></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Mode of Admission :</font></td><td><select id="text" name="mode"/>
					 
						<option value='-1'>Select</option> 
						<option value='CET'>CET</option>
						<option value='COMEDK'>COMEDK</option>
						<option value='MQ'>MQ</option>
					</select>
							</td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Rank:</font></td><td><input type="text" name="rank"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Father's Name:</font></td><td><input type="text" name="f_name"/></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Father's Contact No.:</font></td><td><input type="text" name="f_no"/></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Father's Email ID:</font></td><td><input type="text" name="f_id"/></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Mother's Name:</font></td><td><input type="text" name="m_name"/></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Mother's Contact No.:</font></td><td><input type="text" name="m_no"/></td></tr>	
							<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Mother's Email ID:</font></td><td><input type="text" name="m_id"/></td></tr>	
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

/*$nameErr = $dobErr = $sexErr = $yoaErr = $usnErr = $e_idErr = $addressErr = $modeErr = $rankErr = $f_nameErr = $f_noErr = $f_idErr = $m_nameErr = $f_noErr = $m_id = "";
$name = $dob = $sex = $yoa = $usn = $e_id = $address = $mode = $rank = $f_name = $f_no = $f_id = $m_name = $m_no = $m_id = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Enter name";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["dob"])) {
    $dobErr = "Enter dob";
  } else {
    $dob = test_input($_POST["dob"]);
  }
  
  if (empty($_POST["sex"])) {
    $sexErr = "Enter sex";
  } else {
    $sex = test_input($_POST["sex"]);
  }
  
  if (empty($_POST["yoa"])) {
    $yoaErr = "Enter yoa";
  } else {
    $yoa = test_input($_POST["yoa"]);
  }
  
  if (empty($_POST["usn"])) {
    $usnErr = "Enter usn";
  } else {
    $usn = test_input($_POST["usn"]);
  }
  
    
  if (empty($_POST["e_id"])) {
    $e_idErr = "Enter e_id";
  } else {
    $e_id = test_input($_POST["e_id"]);
  }
if (empty($_POST["address"])) {
    $addressErr = "Enter address";
  } else {
    $address = test_input($_POST["address"]);
  }
  
  if (empty($_POST["mode"])) {
    $modeErr = "Enter mode";
  } else {
    $mode = test_input($_POST["mode"]);
  }
  
  if (empty($_POST["rank"])) {
    $rankErr = "Enter rank";
  } else {
    $rank = test_input($_POST["rank"]);
  }
  
  if (empty($_POST["f_name"])) {
    $f_nameErr = "Enter f_name";
  } else {
    $f_name = test_input($_POST["f_name"]);
  }
  
    
  if (empty($_POST["f_no"])) {
    $f_noErr = "Enter f_no";
  } else {
    $f_no = test_input($_POST["f_no"]);
  }
if (empty($_POST["f_id"])) {
    $f_idErr = "Enter father's email id";
  } else {
    $f_id = test_input($_POST["f_id"]);
  }
  
    
  if (empty($_POST["m_name"])) {
    $m_nameErr = "Enter m_name";
  } else {
    $m_name = test_input($_POST["m_name"]);
  }
  
    
  if (empty($_POST["m_no"])) {
    $m_noErr = "Enter m_no";
  } else {
    $m_no = test_input($_POST["m_no"]);
  }
if (empty($_POST["m_id"])) {
    $m_idErr = "Enter mother's email id";
  } else {
    $m_id = test_input($_POST["m_id"]);
  }
}*/

$name=$_POST['name'];
$dob=$_POST['dob'];
$sex=$_POST['sex'];
$yoa=$_POST['yoa'];
$usn=$_POST['usn'];
$e_id=$_POST['e_id'];
$address=$_POST['address'];
$mode=$_POST['mode'];
$rank=$_POST['rank'];
$f_name=$_POST['f_name'];
$f_no=$_POST['f_no'];
$f_id=$_POST['f_id'];
$m_name=$_POST['m_name'];
$m_no=$_POST['m_no'];
$m_id=$_POST['m_id'];


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "counsellor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


	$sql = "insert into counsellor.student values('$name','$dob',$sex,'$yoa','$usn','$e_id', '$address','$mode',$rank,'$f_name',$f_no,'$f_id','$m_name',$m_no,'$m_id')";

if ($conn->query($sql) === TRUE) {
  echo "THANK YOU!!!!YOUR SUBMISSION HAS BEEN RECORDED SUCCESSFULLY.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);
?>

    </body>
</html>
