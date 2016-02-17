<table border="1">
    <tr>
    	<th>Staff_id</th>
		<th>NAME</th>
		<th>Post</th>
		<th>Balcl</th>
		<th>Balrh</th>
		<th>Balel</th>
		<th>Balco</th>
		<th>Availcl</th>
		<th>Availrh</th>
		<th>Availel</th>
		<th>Availco</th
	</tr>
	<?php
	//connection to mysql
	//$hostname="localhost"; 
//$username="root"; 
//$password="root"; 
//$database="leave_man";
  session_start();
			if( !(isset($_SESSION['username'])) )
				header("Location: admin_login1.php");
		
//$con=mysqli_connect($hostname,$username,$password,$database);
	$con=@mysql_connect("localhost","root","");
			if(!$con){return false;}
			if(!mysql_select_db("leave_man",$con)){return false;}
			$usr=$_SESSION["username"];
	
 				$query="SELECT staff_id,f_name,designation,balcl,balrh,balel,balco,availcl,availrh,availel,availco FROM leave_balance, staff WHERE staff.staff_id=leave_balance.staff_id AND staff.staff_id!='admin'" ;/*AND em.post='$postorder[$j]'";*/
            	$result=mysql_query($query);
				$rows=10;
           		for($i=0;$i<$rows;$i++)
            	{	
					$staffid=mysql_result($result,$i,'staff.staff_id');
					$fname=mysql_result($result,$i,'f_name');
					$post=mysql_result($result,$i,'designation');
            		$balcl=mysql_result($result,$i,'balcl');
                	$balrh=mysql_result($result,$i,'balrh');
                	$balel=mysql_result($result,$i,'balel');
                	$balco=mysql_result($result,$i,'balco');
                	$availcl=mysql_result($result,$i,'availcl');
                	$availrh=mysql_result($result,$i,'availrh');
                	$availel=mysql_result($result,$i,'availel');
                	$availco=mysql_result($result,$i,'availco');
                	echo "<tr><td>" .$staffid. "</td><td>" . $fname .  "</td><td>" .$post. "</td><td>" . $balcl . "</td><td>" . $balrh . "</td><td>" . $balel . "</td><td>" . $balco . "</td><td>" . $availcl . "</td><td>" . $availrh . "</td><td>" . $availel . "</td><td>" . $availco . "</td></tr>";
            	}
			
        ?>
                                        </tbody>
                                    </table>