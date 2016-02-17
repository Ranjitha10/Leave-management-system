<html>
    <head>
		<title>General Details</title>
    </head>
        <br>
		<br>
		<br>
<body>

<table>
	<tr><td><b><font size=6>General details:</font></b></td></tr>
	<tr><td><br></td></tr>
	
<?php
session_start();	
//echo $_SESSION["name1"];  

//$u_name=$_SESSION["name1"];

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

$result1=$conn->query("select * from counsellor.student");
$row1=$result1->fetch_array(MYSQLI_ASSOC);

//echo "hey!!";
//echo $u_name;

if(!(strcmp($row1["user_name"],$_SESSION["name1"])))
{

$result2=$conn->query("select * from counsellor.student");

while($row2=$result2->fetch_array(MYSQLI_ASSOC))
{	
	
	if(!(strcmp($row1["usn"],$row2["usn"])))
	{
		?>
		</table></center>
            <table width="1000px" height="50px" bgcolor="" border="1">
            
                <?php echo "NAME : ".$row2["name"]; ?><br><br>
                <?php echo "USN : ".$row2["usn"]; ?><br><br>
                <?php echo "BATCH NUMBER : ".$row2["batch"]; ?><br><br>
                <?php echo "SEX : ".$row2["sex"]; ?><br><br>
                <?php echo "DOB : ".$row2["dob"]; ?><br><br>
                <?php echo "YEAR OF ADMISSION : ".$row2["yoa"]; ?><br><br>
                <?php echo "ADMISSION THROUGH : ".$row2["adm_type"]; ?><br><br>
                <?php echo "RANK : ".$row2["rank"]; ?><br><br>
                <?php echo "E-MAIL ID : ".$row2["e_id"]; ?><br><br>
                <?php echo "CONTACT NUMBER : ".$row2["phone"]; ?><br><br>
                <?php echo "FATHER'S NAME : ".$row2["f_name"]; ?><br><br>
                <?php echo "FATHER'S E-MAIL ID : ".$row2["f_id"]; ?><br><br>
                <?php echo "FATHER'S CONTACT NUMBER : ".$row2["f_no"]; ?><br><br>
       		<?php echo "MOTHER'S NAME : ".$row2["m_name"]; ?><br><br>
                <?php echo "MOTHER'S E-MAIL ID : ".$row2["m_id"]; ?><br><br>
                <?php echo "MOTHER'S CONTACT NUMBER : ".$row2["m_no"]; ?><br><br>
                <?php echo "ADDRESS : ".$row2["address"]; ?><br><br>   
       
         </table>
    
		<?php
	}
}
}
mysqli_close($conn);
?>
    </body>
</html>
