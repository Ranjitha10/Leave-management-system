<?php
error_reporting(0);
$con=@mysql_connect("localhost","root","");
if(!$con){return false;}
if(!mysql_select_db("leave_man",$con)){return false;}

$approved=$_POST['classid'];
echo "hello world!";
for($i=0;$i<count($approved);$i++)
{
	$classid=$approved[$i];
	echo $appid;
	$query1="UPDATE alter_arr SET status='Approved' WHERE class_id=$classid";
	$query_run=mysql_query($query1);
}
?>
