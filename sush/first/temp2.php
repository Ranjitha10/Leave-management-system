<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "counsellor";

$_SESSION["name1"]=$_POST['name'];
//$_SESSION["u_pass"]=$_POST['pass'];

//$name=$_POST['name'];
$pass=$_POST['pass'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*
$sql = "select * from counsellor.student";
$result=$conn->query($sql);

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		if(strcmp($row["user_name"],$_SESSION["name"])==0 && strcmp($row["pwd"],$pass)==0)
		{
			//echo "LOGGED IN!!!";
			break;
		}

		//echo $row["name"]."<br>";
	}
	//echo "WRONG USERNAME AND PASSWORD COMBINATION"
}

if ($conn->query($sql) == TRUE) {
  //echo "THANK YOU!!!!YOUR SUBMISSION HAS BEEN RECORDED SUCCESSFULLY.";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}*/
header("Location: hod_view.php");	
//echo $_SESSION["name1"];

mysqli_close($conn);
?>

