<html>
    <head>
		<title>hss Details</title>
    </head>
        <br>
		<br>
		<br>
<body bgcolor=#0a7f99>
<?php
$subErr = $cie1Err = $cie2Err = $cie3Err = $usnErr = "";
$sub = $cie1 = $cie2 = $cie3 = $usn = "";
$flag=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["sub"])) {
     $subErr = "Subject code is required";
   } else {
     $sub = test_input($_POST["sub"]);
     if (!preg_match("/^[0-9A-Z]{6}$/",$sub)) {
       $subErr = "Invalid subject code"; $flag=1;
     }
   }
   
    if (empty($_POST["cie1"])) {
     $cie1Err = "cie1 is required";
   } else {
     $cie1 = test_input($_POST["cie1"]);
     if (!((preg_match("/^[0-9AB]{1,2}$/",$cie1)) && (( $_POST["cie1"] ) <=45 )))
	 {
       $cie1Err = "invalid"; $flag=1;
     }
   }
   
   if (empty($_POST["cie2"])) {
     $cie2Err = "cie2 is required";
   } else {
     $cie2 = test_input($_POST["cie2"]);
     if (!((preg_match("/^[0-9AB]{1,2}$/",$cie2)) && (( $_POST["cie2"] ) <=45 )))
	 {
       $cie2Err = "invalid"; $flag=1;
     }
   }
   
   if (empty($_POST["cie3"])) {
     $cie3Err = "cie3 is required";
   } else {
     $cie3 = test_input($_POST["cie3"]);
    if (!((preg_match("/^[0-9AB]{1,2}$/",$cie3)) && (( $_POST["cie3"] ) <=45 )))
	 {
       $cie3Err = "invalid";  $flag=1;
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
     <form method="post" action="" onSubmit="">
					<table>
					<tr><td><b><font color="white" size=6>Enter cie marks  </font></b></td>
					<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Enter USN:</font></td><td><select id="text" name="usn"/>
					
					<option value='-1'>Select</option> 
					
					<?php
					
					//$usn=$_POST["usn"];$usn1=$usn;
					
					session_start();
					
					$u_name=$_SESSION["name1"];
					
					//echo $u_name;
					
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
					
					$result3=$conn->query("select * from counsellor.staff");
					$result4=$conn->query("select * from counsellor.student1");
					
				while($row3=$result3->fetch_array(MYSQLI_ASSOC))
				{
					if(strcmp($u_name,$row3["user_name"])==0)
					{
						while($row4=$result4->fetch_array(MYSQLI_ASSOC))
						{	
							if($row3["batch"]==$row4["batch"])
							{
					
					
					?>
						<option value="<?php echo $row4['usn'];?>"><?php echo $row4['usn'];?></option>
					
					
					<?php
					
							}
						}
					}
				}
						?>
					</select>
					</td></tr>
								

      
					
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Subject Code :</font></td><td><input type="text" name="sub" required="required" value="<?php echo $sub;?>">
   <span class="error"> <?php echo $subErr;?></span></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>CIE 1 :</font></td><td><input type="integer" name="cie1" required="required" value="<?php echo $cie1;?>">
   <span class="error"> <?php echo $cie1Err;?></span></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>CIE 2 :</font></td><td><input type="integer" name="cie2" required="required"value="<?php echo $cie2;?>">
   <span class="error"> <?php echo $cie2Err;?></span></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>CIE 3 :</font></td><td><input type="integer" name="cie3" required="required" value="<?php echo $cie3;?>">
   <span class="error"> <?php echo $cie3Err;?></span></td></tr>
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
	echo $usn1;echo "asjov";
	$sub=$_POST["sub"];echo $sub;
	$cie1=$_POST["cie1"];echo $cie1;
	$cie2=$_POST["cie2"];echo $cie2;
	$cie3=$_POST["cie3"];echo $cie3;
	
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
	
	
$result1=$conn->query("select * from counsellor.current_sem");
echo "check1";

while($row1=$result1->fetch_array(MYSQLI_ASSOC))
{
	if(strcmp($row1["usn"],$usn)==0)
	{echo "check2";
	//$usn=$_POST["usn"];
	echo $usn1;
		if($row1['sem']==1) $sql="insert into counsellor.sem1 values ('$usn','$sub',$cie1,$cie2,$cie3)";
		if($row1['sem']==2) $sql="insert into counsellor.sem2 values ('$usn','$sub',$cie1,$cie2,$cie3)";
		if($row1['sem']==3) $sql="insert into counsellor.sem3 values ('$usn','$sub',$cie1,$cie2,$cie3)";
		if($row1['sem']==4) $sql="insert into counsellor.sem4 values ('$usn','$sub',$cie1,$cie2,$cie3)";
		if($row1['sem']==5) $sql="insert into counsellor.sem5 values ('$usn','$sub',$cie1,$cie2,$cie3)";
		if($row1['sem']==6) $sql="insert into counsellor.sem6 values ('$usn','$sub',$cie1,$cie2,$cie3)";
		if($row1['sem']==7) $sql="insert into counsellor.sem7 values ('$usn','$sub',$cie1,$cie2,$cie3)";
		if($row1['sem']==8) $sql="insert into counsellor.sem8 values ('$usn','$sub',$cie1,$cie2,$cie3)";
		
	
		
	}

}
//mysqli_close($conn);
//}
if($flag==0){
if ($conn->query($sql) == TRUE) {
	echo "<script>alert('Details Entered!!!');</script>";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>

    </body>
</html>
