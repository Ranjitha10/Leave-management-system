<?php

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

$flag=0;

//SQL INJECTIONNNNN

/*
session_start();

$_SESSION["name1"]=$_POST['name'];
$pass=$_POST['pass'];
 
// !!!!!!!!SQL INJECTION!!!!!!!!!!*/

//for the first entry check!!!
//$sql = 'select * from counsellor.student where user_name="   richa" /*    and pwd="  richa"*/ or "1"="1    "';
/* $sql = 'select * from counsellor.student where user_name="'.$_POST['name'].'" and pwd="'.$_POST['pass'].'"';
//$sql = "select * from counsellor.student where user_name='{$_POST['name']}' and pwd='{$_POST['pass']}'";
//$sql = "select * from counsellor.student where user_name=' richa   ' and pwd='   ' OR ''='   '";
$result=$conn->query($sql);
//$row=$result->fetch_array(MYSQLI_ASSOC);
while($row=$result->fetch_array(MYSQLI_ASSOC))
{
	
	echo "LOGGED IN!!!";//echo $row['pwd'];
	$flag=1;$_SESSION["name1"]=$row["user_name"];
	header("Location: student_view.php");
	break;
}

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
		<a href="stu_login.php">BACK TO LOGIN PAGE</a>
		</center>
		<?php
	}
	
if ($flag) header("Location: student_view.php");
*/



session_start();


$_SESSION["name1"]=$_POST['name'];
$pass=$_POST['pass'];
//$pass1=md5($pass);
//echo $pass;

echo $pass1;
$sql = "(select * from counsellor.student where user_name='{$_POST['name']}' and pwd=md5('$pass'))";


//  SQL INJECTIONN

//$sql = sprintf("select * from counsellor.student where user_name='%s' and pwd='%s'", mysql_real_escape_string($_POST['name']),
            //mysql_real_escape_string($_POST['pass']));
//$input1=mysql_real_escape_string($_POST['name']);
//$_SESSION["name1"]=$input1;

//$input2=mysql_real_escape_string($_POST['pass']);
//$pass=$input2;          
            
            
$result=$conn->query($sql);
//if($result->num_rows > 0)
//{ echo $row["user_name"];

	/*while($row=$result->fetch_array(MYSQLI_ASSOC))
	{
		if($row["user_name"]==$_SESSION["name1"] && $row["pwd"]==$pass)
		{
		
			echo "LOGGED IN!!!";$flag=1;
			//header("Location : student_view.php");
			break;
		}

	}*/
	$row=$result->fetch_array(MYSQLI_ASSOC);//$p=$row["pwd"];
	
	if($row)
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
		<a href="stu_login.php">BACK TO LOGIN PAGE</a>
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
if ($flag) header("Location: student_view.php");



mysqli_close($conn);
?>

