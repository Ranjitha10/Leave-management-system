<html>
    <head>
		<title>hss Details</title>
    </head>
        <br>
		<br>
		<br>
<body bgcolor=#0a7f99>

<center>
     <form method="post" action="" onSubmit="">
					<table>
					
				
					
								<tr><td><font color="white" size=6>Enter details</font></td></tr><br>
								<tr><td><br></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>USN :</font></td><td><input type="text" name="usn" required="required"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Username :</font></td><td><input type="text" name="name" required="required"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Password :</font></td><td><input type="password" name="pwd" required="required"/></td></tr>
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
	<br>
	
	<?php
	
	 //if(isset($_POST['submit'])) 
  	//{
		
	$usn=$_POST["usn"];
	//echo $usn1;echo "asjov";
	$name=$_POST["name"];//echo $sub;
	$pwd=$_POST["pwd"];//echo $cie1;
	
	
	$pwd1=md5($pwd);
	
	session_start();
	$u_name=$_SESSION["name1"];
	
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
$result1=$conn->query("select * from counsellor.staff");
//echo "check1";

$result2=$conn->query("select * from counsellor.student");

while($row2=$result2->fetch_array(MYSQLI_ASSOC))
	{//echo $usn;
		if($row2["usn"]==$usn)
		{
		$flag=1;//echo "abc";
		}
		//$sql="insert into counsellor.student values ('$usn','$name','$pwd',$row1["batch"])";
	
	}

while($row1=$result1->fetch_array(MYSQLI_ASSOC))
{
	if(strcmp($row1["user_name"],$u_name)==0)
	{
	//echo $row1["batch"];
	//echo $usn;echo $name;echo $pwd;//echo $row1["batch"];
	$b=$row1["batch"];
	
	
	
	$sql="insert into counsellor.student values ('$usn','$name','$pwd1',$b)";
	}

}
//mysqli_close($conn);
//}
if($flag==0){
if ($conn->query($sql) == TRUE) {
	echo "<script>alert('Student assigned batch');</script>";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
}

else if($flag==1)
	//echo "<script>alert('Student already added to the batch!!!');</script>";
?>

    </body>
</html>
