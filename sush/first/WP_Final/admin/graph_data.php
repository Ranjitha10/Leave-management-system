<?php
        	$con=@mysql_connect("localhost","root","");
			if(!$con){return false;}
			if(!mysql_select_db("leave_man",$con)){return false;}
	
 				//$myquery="SELECT staff_id,availcl FROM leave_balance  WHERE staff_id!='admin'" ;/*AND em.post='$postorder[$j]'";*/
				$myquery="SELECT em.staff_id,f_name,l_name,designation,availcl FROM leave_balance AS lb, staff AS em WHERE em.staff_id=lb.staff_id AND em.staff_id!='admin'";
            	$query=mysql_query($myquery);
				if ( ! $query ) {
				echo mysql_error();
				die;
				}
    
				$data = array();
    
				for ($x = 0; $x < mysql_num_rows($query); $x++) {
				$data[] = mysql_fetch_assoc($query);
				}
    
				echo json_encode($data);     
     
				mysql_close($con);
			
        ?>