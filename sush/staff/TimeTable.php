<!DOCTYPE html>
<html>
	<head><title>time table</title></head>
	<body>
	<?php
	session_start();
	$user=$_SESSION["username"]; 
	//echo $user;
	$user=$user.".htm";
	//echo $user;	?>
		<iframe src="../staff/PTT-20-2-15/<?php echo $user;?>" height="800px" width = "1200px" frameborder="0">
		</iframe> 
	</body>
		
</html>