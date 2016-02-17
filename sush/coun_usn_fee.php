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
					

$result=$con->query("SELECT * FROM counsellor.fee WHERE usn = '".$q."'");

echo "<table>
<tr>
<th>Sem</th>
<th>Chaallan</th>
<th>Amount</th>
<th>Favour</th>
<th>Deposit</th>
</tr>";

if ($result->num_rows == 0) {
echo "No Data";}
else{
while($row=$result->fetch_array(MYSQLI_ASSOC)){
  
   echo "<tr>";
    echo "<td>" .$row["sem"]. "</td>";
    echo "<td>" .$row["challan"]. "</td>";
    echo "<td>" .$row["amt"]. "</td>";
    echo "<td>" .$row["favour"]. "</td>";
    echo "<td>" .$row["deposit"]. "</td>";
    echo "</tr>";
}}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>