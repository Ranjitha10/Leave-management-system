<?php
error_reporting(0);
$con=mysql_connect("localhost","root","");
if(!$con)
{echo  "Error Connecting server!";}

if(!mysql_select_db("leave_man",$con)){echo " Error Selecting db"; }

if(!empty($_POST["type"])&&!empty($_POST["sdate"]) &&!empty($_POST["edate"]) 
/*!empty($_POST["element_1_1"])&&!empty($_POST["element_1_2"])&&!empty($_POST["element_1_3"])&&!empty($_POST["element_2_1"])&&!empty($_POST["element_2_2"])&&!empty($_POST["element_2_3"])*/
&&!empty($_POST["reason"]))
{
	$type=$_POST['type']; 

	$app =$_POST['app_id'];
	//$user=$_POST['username'];
	//$hf1=$_POST['halffull1'];
	//$hf2=$_POST['halffull2'];
	$reason=$_POST["reason"];
	
	/*
	$dd1=$_POST['element_1_1'];
	$mm1=$_POST['element_1_2'];
	$yy1=$_POST['element_1_3'];
	$dd2=$_POST['element_2_1'];
	$mm2=$_POST['element_2_2'];
	$yy2=$_POST['element_2_3'];
	*/
	session_start();
	$usr=$_SESSION["username"];
	$type=$_POST['type'];
	//if($dd1<10)$dd1="0$dd1";
	//if($dd2<10)$dd2="0$dd2";
	$sdate=$_POST["sdate"];
	$edate=$_POST["edate"];
	
	$status="Pending";
	$no_of_days=0;
	//echo "hello";
/*	
	//$usr=$_POST["element_0"];
	
	$no_of_days=0;
	$sn=strtotime($sdate);
	$cy = date('Y');
	//$cy = atoi($cy);
	$cm = date('m');
	//$cm = atoi($cm);
	$cd = date('d');
	//$cd = atoi($cd);
	//echo "hello1111";
	
	

		if( ($yy2!=$yy1) 
			||
			(  ($yy2==$yy1) 
				&& ( ($mm2<$mm1) || ($mm2==$mm1  && ($dd2<$dd1)  )  ) )
			||
			(  ($yy1!=$cy) ||
			  ( ($yy1==$cy)
				  && ( ($mm1<$cm ) || ( $mm1==$cm && $cd>$dd1) ) ) ) )
		$welcome="StaffApplyError1.html";
		
		*/
	
		
		
		if( strtotime($sdate)<time() ||  strtotime($edate)<time()||  strtotime($sdate)>strtotime($edate))
			$welcome="StaffApplyError1.html";
		
		
		
	else
{	
			
$query="INSERT INTO leave_app  VALUES (default,'$usr','$type','$sdate','$edate','$no_of_days',curdate(),'$reason','$status')";
$res=mysql_query($query);
	if(!$res)
			{
			echo "Query Failed";
			$welcome="StaffApplyError1.html";
			}
	else
	{
	$query="SELECT app_id FROM leave_app WHERE staff_id='$usr' AND type='$type' AND start_date='$sdate' AND end_date='$edate' AND status='$status' AND reason='$reason'";
		if($result=mysql_query($query))
		{
			$row=mysql_fetch_assoc($result);
			$appid=$row["app_id"];
		//	echo $appid;
			/*$subdays=0;
			if($hf1==1)$subdays=$subdays+0.5;
			if(strtotime($sdate)!=strtotime($edate))
			{
				if($hf2==1)$subdays=$subdays+0.5;
			}
			echo $subdays;*/
			
				 $al_staff_id = $_POST['al_staff_id'];
		$date = $_POST['date'];
          $sem = $_POST['sem'];
          $time = $_POST['time'];
         $status = "pending";
          $flag=1;
		  $num=count($al_staff_id);
		  
		  
		  
		  foreach ($al_staff_id as $index => $value)
{			
								
				if($sem[$index]<1 || $sem[$index]>8)
				$welcome='StaffApplyError1.html';
			else
			{
				$sql = "INSERT INTO alter_arr (class_id,app_id, staff_id, date, sem, time, status) VALUES (default,'$appid','$al_staff_id[$index]','$date[$index]','$sem[$index]','$time[$index]','$status')";
				if(mysql_query($sql)) {
					echo "Success";
					$welcome='Staff.php';
					}
				else
					$welcome='StaffApplyError3.html';
			}
			
		}
header('Location: '.$welcome);
			
			
			
			
			
			
			
			$query="UPDATE leave_app SET no_of_days=((DATEDIFF(end_date,start_date))+1) WHERE app_id=$appid";
			$result=mysql_query($query);
			
			$query2="select no_of_days from leave_app where app_id=$appid";
			$result2=mysql_query($query2);
			$row2=mysql_fetch_assoc($result2);
			$days=$row2["no_of_days"];
			echo $days;
			$query1="SELECT * FROM leave_balance WHERE staff_id='$usr'";
			$result=mysql_query($query1);
			$query_data=mysql_fetch_assoc($result);
			switch($type)
			{
				case 'CL':
					$bal=$query_data["balcl"];
					break;
				case 'RH':
					$bal=$query_data["balrh"];
					break;
				case 'EL':
					$bal=$query_data["balel"];
					break;
				case 'CO':
					$bal=$query_data["balco"];
					break;
			}
			echo "bal".$bal;
			if($days>$bal /*|| ($type=="CL" && $days>3) || ($type=="EL" && $days<5)*/)
			{
				$query1="DELETE FROM leave_app WHERE app_id=$appid";
				$result=mysql_query($query1);
				$welcome="StaffApplyError3.html";
			}
			else if(!$result)
			{
			echo "Query Failed";
			$welcome="StaffApplyError1.html";
			}
			else
			$welcome="StaffApplySuccess.html";
			
		}
	}
	}
}
else
$welcome="StaffApplyError1.html";
header('location: '.$welcome);
 ?>





