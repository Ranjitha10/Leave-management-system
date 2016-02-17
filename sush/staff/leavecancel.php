<?php

$con=@mysql_connect("localhost","root","");
if(!$con){return false;}
if(!mysql_select_db("leave_man",$con)){return false;}

if(isset($_POST["appid"]))
{
		$appid=$_POST["appid"];
		session_start();
		$usr=$_SESSION["username"];
		$query="SELECT * FROM leave_app WHERE app_id=$appid";
		
		$query_run=mysql_query($query);
		$row=mysql_fetch_assoc($query_run);
		$cdate=date('Y'-'M'-'D');
		
	  if($row["start_date"]<=$cdate)
	      $welcome="StaffCancelError.php";
	  else
	   {
		if($row["staff_id"]==$usr)
		{
			$status=$row['status'];
			if($status=="Approved")
			{
				$type=$row['type'];
				$days=$row['no_of_days'];
				switch($type)
				{
					case "CL":
			$query2="SELECT balcl,availcl FROM leave_balance WHERE staff_id='$usr'";
		$query_run2=mysql_query($query2);		
		$row=mysql_fetch_assoc($query_run2);			
			$balcl=$row["balcl"];
			$availcl=$row["availcl"];
			$bal=$balcl+$days;
			$avail=$availcl-$days;
			$query1="UPDATE leave_balance SET balcl='$bal',availcl='$avail' WHERE staff_id='$usr'";
			
			break;
		case "RH":
			$query2="SELECT balrh,availrh FROM leave_balance WHERE staff_id='$usr'";
		$query_run2=mysql_query($query2);	
		$row=mysql_fetch_assoc($query_run2);
			$balrh=$row["balrh"];
			$availrh=$row["availrh"];
			$bal=$balrh+$days;
			$avail=$availrh-$days;
			
			$query1="UPDATE leave_balance SET balrh='$bal',availrh='$avail' WHERE staff_id='$usr'";
			
			break;
		case "EL":
			$query2="SELECT balel,availel FROM leave_balance WHERE staff_id='$usr'";
		$query_run2=mysql_query($query2);	
		$row=mysql_fetch_assoc($query_run2);
			$balel=$row["balel"];
			$availel=$row["availel"];
			$bal=$balel+$days;
			$avail=$availel-$days;
		
			$query1="UPDATE leave_balance SET balel='$bal',availel='$avail' WHERE staff_id='$usr'";
			
			break;
		case "CO":
			$query2="SELECT balco,availco FROM leave_balance WHERE staff_id='$usr'";
		$query_run2=mysql_query($query2);	
		$row=mysql_fetch_assoc($query_run2);
			$balco=$row["balco"];
			$availco=$row["availco"];
			$bal=$balco+$days;
			$avail=$availco-$days;
	
			$query1="UPDATE leave_balance SET balco='$bal',availco='$avail' WHERE staff_id='$usr'";
			
			break;
				}
				$query_run=mysql_query($query1);
			}
		
			$query="DELETE FROM leave_app WHERE app_id=$appid";
			$query2="DELETE FROM alter_arr WHERE app_id=$appid";
			$query_run=mysql_query($query);
			$query_run2=mysql_query($query2);
			if($query_run && $query_run2)
			{			
				echo '<script language="javascript">';
				echo 'alert("Application Successfully deleted")';
				echo '</script>';
				$welcome="StaffCancelSuccess.html";
			}
			else	$welcome="StaffCancelError.php";
			
		}
		
		else	$welcome="StaffCancelError.php";

		}
	}
else	$welcome="StaffCancelError.php";
header('Location: '.$welcome);

?>