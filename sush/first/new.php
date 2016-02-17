<html>
    <head>
		<title>STUDENT Details</title>
				
    </head>
        <br>
		<br>
		<br>
		<br>
		<br>
     <body bgcolor="#0a7f99">
	 <center>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<table>
					<tr><td><br></td></tr>
					<tr><td><font color="black" size=5.8>Enter USN:</font></td><td><select id="text" name="usn"/>
					
					<option value='-1'>Select</option> 
					<?php
					
					session_start();
					$u_name=$_SESSION["name1"];
					//echo $u_name;
					
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
							
					<tr><td>      </td><td><input type="submit" name="submit" value="submit"></td></tr>
					
	 
     <?php
if(isset($_POST['submit'])) 
  {
	$usn=$_POST["usn"];
$result1= $conn->query("select * from counsellor.student");

while($row1=$result1->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($row1["usn"],$usn)))
	{
						$usn=$row1["usn"];
						
						$e_id=$row1["e_id"];
						$phone=$row1["phone"];
						$f_id=$row1["f_id"];
						$f_no=$row1["f_no"];
						$m_id=$row1["m_id"];
						$m_no=$row1["m_no"];
						$address=$row1["address"];
						
						$e_id1=$_POST['e_id'];
						$phone1=$_POST['phone'];
						$f_id1=$_POST['f_id'];
						$f_no1=$_POST['f_no'];
						$m_id1=$_POST['m_id'];
						$m_no1=$_POST['m_no'];
						$address1=$_POST['address'];
						
				
			
						$sql = "update counsellor.student set e_id='$e_id1', phone=$phone1, f_id='$f_id1', f_no=$f_no1 , m_id='$m_id1', m_no=$m_no1 , address='$address1' where usn='$usn'";
				
				
			
		}
	
}

if ($conn->query($sql) == TRUE) {
	echo "<script>alert('Details updated!!!');</script>";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
	 
<center>
      <form method="post" action="" onSubmit=return formsubmit()>
					<table>
					<tr><td><b><font color="white" size=6>STUDENT details:</font></b></td></tr>
					<tr><td><br></td></tr>
					<tr><td><br></td></tr>
					
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Email ID :</font></td><td><input type="text" name="e_id" value="<?php echo $e_id;?>"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Phone No:</font></td><td><input type="text" name="phone" value="<?php echo $phone;?>"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Father Mail_Id:</font></td><td><input type="text" name="f_id" value="<?php echo $f_id;?>"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Father No :</font></td><td><input type="text" name="f_no" value="<?php echo $f_no;?>"/></td></tr>
								<tr><td><br></td></tr>	
					<tr><td><font color="white" size=5.8>Mother Mail_Id:</font></td><td><input type="text" name="m_id" value="<?php echo $m_id;?>"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Mother No:</font></td><td><input type="text" name="m_no" value="<?php echo $m_no;?>"/></td></tr>
								<tr><td><br></td></tr>
					<tr><td><font color="white" size=5.8>Address:</font></td><td><input type="text" name="address" value="<?php echo $address;?>"/></td></tr>
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
	}
//mysqli_close($conn);	
?>
	
    </body>
</html>
