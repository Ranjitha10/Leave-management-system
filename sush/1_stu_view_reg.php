<html>
    <head>
		<title>General Details</title>
    </head>
        <br>
		<br>
		<br>
<body>
<center>
<table>
	<tr><td><b><font size=6 color=white>General details:</font></b></td></tr>
	<tr><td><br></td></tr>
	
<?php
session_start();
$u_name=$_SESSION["name1"];	
//echo $_SESSION["name1"];  

//$u_name=$_SESSION["name1"];

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

$result=$conn->query("select * from counsellor.current_sem");
$result1=$conn->query("select * from counsellor.student1");

$result3=$conn->query("select * from counsellor.student");

//echo "hey!!";
//echo $u_name;

while($row3=$result3->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($row3["user_name"],$u_name)))
	{
		while($row1=$result1->fetch_array(MYSQLI_ASSOC))
		{
			if(!(strcmp($row1["usn"],$row3["usn"])))
			{
				while($row=$result->fetch_array(MYSQLI_ASSOC))
				{
					if(!(strcmp($row["usn"],$row1["usn"])))
					{
					
					?>
		</table></center>
		<center>
            <table width="1000px" height="50px" bgcolor="" border="1">
            
            
            <tr><font color=white><?php echo "USN : ".$row1["usn"]; ?></font></tr>
            
            <tr><td> <center><font color=white>  <?php echo "NAME : ".$row1["name"]; ?></font></center></td>
                <td><center><font color=white><?php echo "SEMESTER : ".$row["sem"]; ?></font></center></td>
                <td><center><font color=white><?php echo "BATCH NUMBER : ".$row1["batch"]; ?></font></center></td>
                <td>  <center><font color=white> <?php echo "DOB : ".$row1["dob"]; ?></font></center></td></tr></table>
                <br>
               <br>
              
              <table width="1000px" height="50px" bgcolor="" border="1">
             <tr>
             <td width="40%"><font color=white> <center><?php echo "SEX : ".$row1["sex"]; ?></font><br><br></center></td>
             <td>  <center><font color=white> <?php echo "E-MAIL ID : ".$row1["e_id"]; ?></font><br><br><center></td></tr>
              <tr> <td width="40%"><center><font color=white> <?php echo "CONTACT NUMBER : ".$row1["phone"]; ?></font><br><br>
              <center></td>
               
             <td>  <center><font color=white> <?php echo "ADDRESS : ".$row1["address"]; ?></font><br><br><center></td> </tr> 
          </table>
              
              <br><br>
              <font color=white>Admission details</font>
              <br>
              <table width="1000px" height="50px" bgcolor="" border="1">
               
               <tr>  <td> <center> <font color=white><?php echo "YEAR OF ADMISSION";  ?></font><br><br></td>
              <td><center><font color=white>  <?php echo " ADMISSION THROUGH" ?></font><br><br></td>
              <td> <center><font color=white> <?php echo " RANK "; ?></font><br><br></td></tr>
               <br>
               
               <br>
               <tr>
               <td><center>  <?php echo $row1["yoa"]; ?><br><br></center></td>
               <td> <center><?php echo $row1["adm_type"]; ?><br><br></center></td>
              <td> <center> <?php echo $row1["rank"]; ?><br><br></center></td></tr>
              </table>
              <br>
              <br>
              
               <br>
               <font color=white>Parents details</font>
               <br><br>
               <table width="1000px" height="50px" bgcolor="" border="1">
               
               <tr>  <td> <center> <font color=white><?php echo "NAME";  ?></font><br><br></td>
              <td><center> <font color=white> <?php echo " E-MAIL ID "; ?></font><br><br></td>
              <td> <center> <font color=white><?php echo " CONTACT NUMBER "; ?></font><br><br></td></tr>
               <br>
               <br>
            <tr> <td width="35%"><font color=white><?php echo "FATHER :  "; ?></font><center><?php echo $row1["f_name"]; ?><br><br></center></td>
              <td width="35%"><center>  <?php echo $row1["f_id"]; ?><br><br></center></td>
              <td> <center> <?php echo $row1["f_no"]; ?><br><br></center></td></tr>
              
       		<tr><td width="35%"><font color=white><?php echo "MOTHER :  "; ?></font><center><?php echo $row1["m_name"]; ?><br><br></center></td>
              <td width="35%"> <center> <?php echo $row1["m_id"]; ?><br><br></center></td>
              <td> <center> <?php echo $row1["m_no"]; ?><br><br></center></td></tr>
              </table>
              
             </center>
    
		<?php
	}
}
}
}}}
mysqli_close($conn);
?>
    </body>
</html>
