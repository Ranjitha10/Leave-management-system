<?php
			$con=@mysql_connect("localhost","root","");
			if(!$con){return false;}
			if(!mysql_select_db("leave_man",$con)){return false;}
			session_start();
			$usr=$_SESSION["username"];
			$query="SELECT balcl,availcl FROM leave_balance WHERE staff_id='$usr'";
			$result=mysql_query($query);
			$row=mysql_fetch_assoc($result);
			$clb=$row["balcl"];
			$cla=$row["availcl"];
			$val=($clb/($clb+$cla))*100;
			echo $val;
?>