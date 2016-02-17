<?php

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

$flag=0;

session_start();

$_SESSION["name1"]=$_POST['name'];
$pass=$_POST['pass'];


if($_SESSION["name1"]=='hod' && $pass=='hod')
$flag=1;

	if($flag==0)
	{
		
		?>
		<center>
		<br>
		<br>
		<br>
		<br>
		<?php
		echo "WRONG USERNAME AND PASSWORD COMBINATION";
		?>
		<br>
		<a href="1_hod_login.php">BACK TO LOGIN PAGE</a>
		</center>
		<?php
	}
//}
/*
if ($conn->query($sql) == TRUE) {
  //echo "THANK YOU!!!!YOUR SUBMISSION HAS BEEN RECORDED SUCCESSFULLY.";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}*/
if ($flag) header("Location: 1_hod_view.php");



mysqli_close($conn);
?>

