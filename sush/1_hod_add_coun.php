<html>
    <head>
		<title>add counsellor</title>
    </head>
        <br>
		<br>
		<br>
<body>

<center>
     <form method="post" action="" onSubmit="">
					<table>
					
				
					
								<tr><td><font color="white" size=6>Enter details</font></td></tr>
								<tr><td><br></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Staff id :</font></td><td><input type="text" name="s_id" required="required"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Staff name :</font></td><td><input type="text" name="s_name" required="required"/></td></tr>
					
					<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Batch :</font></td><td><input type="integer" name="batch" required="required"/></td></tr>
					
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
		
	$s_id=$_POST["s_id"];
	$s_name=$_POST["s_name"];
	$batch=$_POST["batch"];
	//echo $usn1;echo "asjov";
	$name=$_POST["name"];//echo $sub;
	$pwd=$_POST["pwd"];//echo $cie1;
	
	$pwd1=md5($pwd);
	
	session_start();
	$u_name=$_SESSION["name1"];
	
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
	
	
$result1=$conn->query("select * from counsellor.staff");
//echo "check1";
$flag=0;
while($row1=$result1->fetch_array(MYSQLI_ASSOC))
{
	if(strcmp($row1["s_id"],$s_id)==0){
	echo "<script>alert('Staff already assigned to a batch!!!');</script>";$flag=1;}
	
	//echo $row1["batch"];
	//echo $usn;echo $name;echo $pwd;//echo $row1["batch"];
	//$b=$row1["batch"];
		//$sql="insert into counsellor.student values ('$usn','$name','$pwd',$row1["batch"])";
		
}
//mysqli_close($conn);
//}

if($flag==0)
{
$sql="insert into counsellor.staff values ('$s_name',$batch,'$s_id','counsellor','$name','$pwd1')";
if ($conn->query($sql) == TRUE) {
	echo "<script>alert('Counsellor assigned batch!!!');</script>";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

}


?>

    </body>
</html>
