<?php
error_reporting(0);
$con=@mysql_connect("localhost","root","");
if(!$con){return false;}
if(!mysql_select_db("leave_man",$con)){return false;}

$approved=$_POST['appid'];
$rejected=$_POST['appid2'];
//$b=$_POST['approved'];
for($i=0;$i<count($rejected);$i++)
{
	$appid=$rejected[$i];
	echo $appid;
	
	//$status = $b[$i];
	//if($status=="1")
	$query1="UPDATE leave_app SET status='Rejected' WHERE app_id=$appid";
	$query_run=mysql_query($query1);
}
for($i=0;$i<count($approved);$i++)
{
	$appid=$approved[$i];
	echo $appid;
	
	//$status = $b[$i];
	//if($status=="1")
	$query1="UPDATE leave_app SET status='Approved' WHERE app_id=$appid";
	//}
	//else
	//{
	//	$query1="UPDATE leave_app SET status='Rejected' WHERE app_id=$appid";
//	}
	$query_run=mysql_query($query1);
	$query1="SELECT * FROM leave_app as la,leave_balance as lb WHERE la.app_id=$appid AND lb.staff_id=la.staff_id";
	$query_run=mysql_query($query1);
	$row=mysql_fetch_assoc($query_run);
	$type=$row["type"];
	$days=$row["no_of_days"];
	$usr=$row['staff_id'];
	switch($type)
	{
		case 'CL':
			$balcl=$row["balcl"];
			$availcl=$row["availcl"];
			$bal=$balcl-$days;
			$avail=$availcl+$days;
			if($bal>0){
			$query1="UPDATE leave_balance SET balcl='$bal',availcl='$avail' WHERE staff_id='$usr'";
			}
			break;
		case 'RH':
			$balrh=$row["balrh"];
			$availrh=$row["availrh"];
			$bal=$balrh-$days;
			$avail=$availrh+$days;
			if($bal>0){
			$query1="UPDATE leave_balance SET balrh='$bal',availrh='$avail' WHERE staff_id='$usr'";
			}
			break;
		case 'EL':
			$balel=$row["balel"];
			$availel=$row["availel"];
			$bal=$balel-$days;
			$avail=$availel+$days;
			if($bal>0){
			$query1="UPDATE leave_balance SET balel='$bal',availel='$avail' WHERE staff_id='$usr'";
			}
			break;
		case 'CO':
			$balco=$row["balco"];
			$availco=$row["availco"];
			$bal=$balco-$days;
			$avail=$availco+$days;
			if($bal>0){
			$query1="UPDATE leave_balance SET balco='$bal',availco='$avail' WHERE staff_id='$usr'";
			}
			break;
	}
	$query_run=mysql_query($query1);
}
?>