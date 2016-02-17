
<?php
$con=@mysql_connect("localhost","root","");
if(!$con){return false;}
if(!mysql_select_db("leave_man",$con)){return false;}

if(!empty($_POST["username"]))
{
	echo "here";
	
		$username=$_POST["username"];
		
		
			$query="SELECT * FROM leave_balance WHERE staff_id='$username'";
			$query_run=mysql_query($query);
			$query2=mysql_fetch_assoc($query_run);
			
			$balco=$query2["balco"];
			echo $balco;
			$bal=$balco+1;
			$query1="UPDATE leave_balance SET balco='$bal' WHERE staff_id='$username'";
			$query_run=mysql_query($query1);
			if($query_run)
			{
			
				echo '<script language="javascript">';
				echo 'alert("CO balance was successfully updated! ")';
				//echo $balco;
				echo '</script>';
					//$welcome="deletesuccessful.html";
			
	
			}
		
}
//header('Location: '.$welcome);
?>