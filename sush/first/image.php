
<?PHP
session_start();	
//echo $_SESSION["name1"];  

$u_name=$_SESSION["name1"];

$hostname = "localhost";  
$username = "root";  
$password = ""; 
$dbname = "counsellor"; 
$db_table = "markscard";

$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$uploadDir = 'images/'; //Image Upload Folder
if(isset($_POST['Submit']))
{
$filename = $_FILES['Photo']['name'];
$tmpName  = $_FILES['Photo']['tmp_name'];
$fileSize = $_FILES['Photo']['size'];
$fileType = $_FILES['Photo']['type'];
$filepath = $uploadDir . $filename;
$result = move_uploaded_file($tmpName, $filepath);
if (!$result) {
echo "Error uploading file";
exit;
}
if(!get_magic_quotes_gpc())
{
    $filename = addslashes($filename);
	$filepath = addslashes($filepath);
}}
$result1= $conn->query("select * from counsellor.student1");
$result2=$conn->query("select * from counsellor.current_sem");

while($row1=$result1->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($row1["user_name"],$u_name)))
	{
		while($row2=$result2->fetch_array(MYSQLI_ASSOC))
		{
			if(strcmp($row2["usn"],$row1["usn"])==0)
			{
				$usn=$row2["usn"];
				$sem=$row2["sem"];
$sql = "insert into counsellor.markscard values('$filename','$filepath','$usn',$sem)";
}
//$sql = "insert into counsellor.fee values('$usn',$sem,$challan,$amt,'$favour',$deposit_date)";
			
//mysql_query($query) 

}
}
}
if ($conn->query($sql) == TRUE) {
	echo "<script>alert('Details Entered!!!');</script>";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);	

?>

