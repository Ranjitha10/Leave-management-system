<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_REQUEST["q"];

//$q = intval($_GET['q']);
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "counsellor";

					// Create connection
					$con = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($con->connect_error) {
    						die("Connection failed: " . $conn->connect_error);
					}
					

$result=$con->query("SELECT * FROM counsellor.student WHERE usn = '".$q."'");
echo "<table>
<tr>
<th>Name</th>
<th>DOB</th>
<th>Sex</th>
<th>USN</th>
<th>Batch</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
</tr>";

if ($result->num_rows == 0) {
echo "No Data";}
else{
while($row=$result->fetch_array(MYSQLI_ASSOC)){
  
   echo "<tr>";
    echo "<td>" .$row["name"]. "</td>";
    echo "<td>" .$row["dob"]. "</td>";
    echo "<td>" .$row["sex"]. "</td>";
    echo "<td>" .$row["usn"]. "</td>";
	echo "<td>" .$row["batch"]. "</td>";
    echo "<td>" .$row["e_id"]. "</td>";
    echo "<td>" .$row["ph"]. "</td>";
    echo "<td>" .$row["address"]. "</td>";
	
    echo "</tr>";
}}
echo "</table>";
echo "<br><br>";

$result=$con->query("SELECT * FROM counsellor.student WHERE usn = '".$q."'");
echo "Admission Details<br>";
echo "<table>
<tr>
<th>YOA</th>
<th>Mode</th>
<th>Rank</th>
</tr>";

if ($result->num_rows == 0) {
echo "No Data";}
else{
while($row=$result->fetch_array(MYSQLI_ASSOC)){
  
   echo "<tr>";
   echo "<td>" .$row["yoa"]. "</td>";
   echo "<td>" .$row["mode"]. "</td>";
   echo "<td>" .$row["rank"]. "</td>";
	echo "</tr>";
}}
echo "</table>";
echo "<br><br>";
  
   
$result=$con->query("SELECT * FROM counsellor.student WHERE usn = '".$q."'");
echo "Parent Details<br>";
echo "<table>
<tr>
<th>F_name</th>
<th>F_id</th>
<th>F_no</th>
<th>M_name</th>
<th>M_id</th>
<th>M_no</th>
</tr>";
if ($result->num_rows == 0) {
echo "No Data";}
else{
while($row=$result->fetch_array(MYSQLI_ASSOC)){
  
  echo "<td>" .$row["fname"]. "</td>";
    echo "<td>" .$row["fid"]. "</td>";
	echo "<td>" .$row["fno"]. "</td>";
    echo "<td>" .$row["mname"]. "</td>";
    echo "<td>" .$row["mid"]. "</td>";
    echo "<td>" .$row["mno"]. "</td>";
	 echo "</tr>";
}}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>