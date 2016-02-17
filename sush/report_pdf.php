<?php

session_start();
$u_name=$_SESSION["name1"];

require("pdf/fpdf.php");
$pdf=new FPDF();

$pdf->AddPage();


$usn=$_POST["usn"];


$servername = "localhost";
$username = "root";
$password = "richa";
$dbname = "counsellor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$rsem=$conn->query("select * from counsellor.current_sem");
$rstu=$conn->query("select * from counsellor.student1");



while($rstu1=$rstu->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($rstu1["usn"],$usn)))
	{
		
		while($rsem1=$rsem->fetch_array(MYSQLI_ASSOC))
		{
			if(!(strcmp($rsem1["usn"],$usn)))
			{
			$ss=$rsem1["sem"];
		
		$name=$rstu1["name"];
		$batch=$rstu1["batch"];
		$dob=$rstu1["dob"];
		$sex=$rstu1["sex"];
		$e_id=$rstu1["e_id"];
		$phone=$rstu1["phone"];
		$add=$rstu1["address"];
		
		$yoa=$rstu1["yoa"];
		$adm=$rstu1["adm_type"];
		$rank=$rstu1["rank"];
		
		$f_name=$rstu1["f_name"];
		$f_id=$rstu1["f_id"];
		$f_no=$rstu1["f_no"];
		$m_name=$rstu1["m_name"];
		$m_id=$rstu1["m_id"];
		$m_no=$rstu1["m_no"];
		
	 //$pdf->Cell(0,10,$name,1,1,"C");
	//$pdf->Cell(0,10,$add,1,0,"C");
	//$pdf->Cell(0,10,$f_name,1,0,"C");
	
	$pdf->Cell(0,15,"",0);
	$pdf->SetFont("Arial","I","15");$pdf->Ln();
	$pdf->Cell(0,7,"USN : {$usn}",0);$pdf->Ln();
	$pdf->Cell(0,7,"Name : {$name}",0);$pdf->Ln();
	$pdf->Cell(0,7,"Sem : {$ss}",0);$pdf->Ln();$pdf->Ln();
	
	$pdf->SetFont("Arial","B","15");
	$pdf->Cell(0,12,"General Details:",0);	$pdf->Ln();
	$pdf->SetFont("Arial","","13");
	$pdf->Cell(0,6,"Batch : {$batch}",0);$pdf->Ln();
	$pdf->Cell(0,6,"DOB : {$dob}",0);$pdf->Ln();
	$pdf->Cell(0,6,"Sex : {$sex}",0);$pdf->Ln();
	$pdf->Cell(0,6,"E-mail : {$e_id}",0);$pdf->Ln();
	$pdf->Cell(0,6,"Contact : {$phone}",0);$pdf->Ln();
	$pdf->Cell(0,6,"Address : {$add}",0);$pdf->Ln();$pdf->Ln();
	
	$pdf->SetFont("Arial","B","15");
	$pdf->Cell(0,12,"Admission Details:",0);$pdf->Ln();	
	$pdf->SetFont("Arial","","13");
	$pdf->Cell(0,6,"Year : {$yoa}",0);$pdf->Ln();
	$pdf->Cell(0,6,"Mode : {$adm}",0);$pdf->Ln();
	$pdf->Cell(0,6,"Rank : {$rank}",0);$pdf->Ln();$pdf->Ln();
	
	
	$pdf->SetFont("Arial","B","15");
	$pdf->Cell(0,12,"Parent Details:",0);$pdf->Ln();	
	
	// Column widths
    $w = array(28, 52, 52,52);
    // Header
    	$pdf->SetFont("Arial","B","12");
    	$pdf->Cell($w[0],7,"",1,0,'C');
        $pdf->Cell($w[1],7,"Name",1,0,'C');
        $pdf->Cell($w[2],7,"E-Mail",1,0,'C');
        $pdf->Cell($w[3],7,"Contact",1,0,'C');
    $pdf->Ln();
     // Data
   	$pdf->SetFont("Arial","I","13");
   	$pdf->Cell($w[0],6,"Father",1,0,'C');
   	$pdf->SetFont("Arial","","13");
        $pdf->Cell($w[1],6,$f_name,1,0,'C');
        $pdf->Cell($w[2],6,$f_id,1,0,'C');
        $pdf->Cell($w[3],6,$f_no,1,0,'C');
        
        $pdf->Ln();
    
    
    // Data
   	$pdf->SetFont("Arial","I","13");
   	$pdf->Cell($w[0],6,"Mother",1,0,'C');
   	$pdf->SetFont("Arial","","13");
        $pdf->Cell($w[1],6,$m_name,1,0,'C');
        $pdf->Cell($w[2],6,$m_id,1,0,'C');
        $pdf->Cell($w[3],6,$m_no,1,0,'C');
        
        $pdf->Ln();
    
    // Closing line
   // $pdf->Cell(array_sum($w),0,'','T');	
	
		
	}}}
}

$pdf->Ln();
$pdf->Ln();
$pdf->SetFont("Arial","B","15");
	$pdf->Cell(0,12,"Fee Details:",0);$pdf->Ln();
	
	// Column widths
    $w = array(46, 46, 46,46);
    // Header
    	$pdf->SetFont("Arial","B","12");
        $pdf->Cell($w[0],7,"Challan No.",1,0,'C');
        $pdf->Cell($w[1],7,"Amount",1,0,'C');
        $pdf->Cell($w[2],7,"In favour of",1,0,'C');
        $pdf->Cell($w[3],7,"Date",1,0,'C');
        $pdf->SetFont("Arial","","13");
    $pdf->Ln();
     // Data
   
   	
    
    // Closing line
    //$pdf->Cell(array_sum($w),0,'','T');	
	

$rsem=$conn->query("select * from counsellor.current_sem");
$rab=$conn->query("select * from counsellor.fee");


while($rsem1=$rsem->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($rsem1["usn"],$usn)))
	{
		while($rab1=$rab->fetch_array(MYSQLI_ASSOC))
		{
					if( strcmp($rab1["usn"],$rsem1["usn"])==0 && $rsem1["sem"]==$rab1["sem"] )
					{
					
					$c=$rab1["challan"];
					$a=$rab1["amt"];
					$f=$rab1["favour"];
					$d=$rab1["deposit"];
					
        				$pdf->Cell($w[0],6,$c,1,0,'C');
       					$pdf->Cell($w[1],6,$a,1,0,'C');
        				$pdf->Cell($w[2],6,$f,1,0,'C');
        				$pdf->Cell($w[3],6,$d,1,0,'C');
        				
        				$pdf->Ln();
	
					}
		}
	}
}

$pdf->Ln();
$pdf->Ln();
$pdf->SetFont("Arial","B","15");
	$pdf->Cell(0,12,"CIE Marks:",0);$pdf->Ln();
	
	// Column widths
    $w = array(46, 46, 46,46);
    // Header
    	$pdf->SetFont("Arial","B","12");
        $pdf->Cell($w[0],7,"Subject Code",1,0,'C');
        $pdf->Cell($w[1],7,"CIE 1",1,0,'C');
        $pdf->Cell($w[2],7,"CIE 2",1,0,'C');
        $pdf->Cell($w[3],7,"CIE 3",1,0,'C');
        $pdf->SetFont("Arial","","13");
    $pdf->Ln();
     // Data
   
   	
    
    // Closing line
    //$pdf->Cell(array_sum($w),0,'','T');	
		

$rsem=$conn->query("select * from counsellor.current_sem");


while($rsem1=$rsem->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($rsem1["usn"],$usn)))
	{
		if($rsem1["sem"]==1) $rs=$conn->query("select * from counsellor.sem1");
		if($rsem1["sem"]==2) $rs=$conn->query("select * from counsellor.sem2");
		if($rsem1["sem"]==3) $rs=$conn->query("select * from counsellor.sem3");
		if($rsem1["sem"]==4) $rs=$conn->query("select * from counsellor.sem4");
		if($rsem1["sem"]==5) $rs=$conn->query("select * from counsellor.sem5");
		if($rsem1["sem"]==6) $rs=$conn->query("select * from counsellor.sem6");
		if($rsem1["sem"]==7) $rs=$conn->query("select * from counsellor.sem7");
		if($rsem1["sem"]==8) $rs=$conn->query("select * from counsellor.sem8");
		
		while($rab1=$rs->fetch_array(MYSQLI_ASSOC))
		{
					if( strcmp($rab1["usn"],$rsem1["usn"])==0 )
					{
					
					$c=$rab1["sub_code"];
					$a=$rab1["cie1"];
					$f=$rab1["cie2"];
					$d=$rab1["cie3"];
					
        				$pdf->Cell($w[0],6,$c,1,0,'C');
       					$pdf->Cell($w[1],6,$a,1,0,'C');
        				$pdf->Cell($w[2],6,$f,1,0,'C');
        				$pdf->Cell($w[3],6,$d,1,0,'C');
        				
        				$pdf->Ln();
	
					}
		}
	}
}



$rsem=$conn->query("select * from counsellor.current_sem");
$rhss=$conn->query("select * from counsellor.hss");

$pdf->Ln();
$pdf->SetFont("Arial","B","15");
	$pdf->Cell(0,12,"HSS Details:",0);$pdf->Ln();
	
	// Column widths
    $w = array(46, 46, 46,46);
    // Header
    	$pdf->SetFont("Arial","B","12");
    	$pdf->Cell($w[0],7,"Event",1,0,'C');
        $pdf->Cell($w[1],7,"From",1,0,'C');
        $pdf->Cell($w[2],7,"To",1,0,'C');
        $pdf->Cell($w[3],7,"Category",1,0,'C');
        $pdf->SetFont("Arial","","13");
    $pdf->Ln();
     // Data
   
   	
    
    // Closing line
    //$pdf->Cell(array_sum($w),0,'','T');	
		

while($rsem1=$rsem->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($rsem1["usn"],$usn)))
	{
		while($rhss1=$rhss->fetch_array(MYSQLI_ASSOC))
		{
					if( strcmp($rhss1["usn"],$rsem1["usn"])==0 && $rsem1["sem"]==$rhss1["sem"] )
					{
					
					$ev=$rhss1["event"];
					$st=$rhss1["start"];
					$en=$rhss1["end"];
					$ca=$rhss1["category"];
					
					$pdf->Cell($w[0],6,$ev,1,0,'C');
        				$pdf->Cell($w[1],6,$st,1,0,'C');
       					$pdf->Cell($w[2],6,$en,1,0,'C');
        				$pdf->Cell($w[3],6,$ca,1,0,'C');
        
        				$pdf->Ln();
	
					}
		}
	}
}

$pdf->Ln();
$pdf->Ln();
$pdf->SetFont("Arial","B","15");
	$pdf->Cell(0,12,"Absence Details:",0);$pdf->Ln();
	
	// Column widths
    $w = array(61, 61, 61);
    // Header
    	$pdf->SetFont("Arial","B","12");
        $pdf->Cell($w[0],7,"From",1,0,'C');
        $pdf->Cell($w[1],7,"To",1,0,'C');
        $pdf->Cell($w[2],7,"Reason",1,0,'C');
        $pdf->SetFont("Arial","","13");
    $pdf->Ln();
     // Data
   
   	
    
    // Closing line
    //$pdf->Cell(array_sum($w),0,'','T');	
		


$rsem=$conn->query("select * from counsellor.current_sem");
$rab=$conn->query("select * from counsellor.absence");


while($rsem1=$rsem->fetch_array(MYSQLI_ASSOC))
{
	if(!(strcmp($rsem1["usn"],$usn)))
	{
		while($rab1=$rab->fetch_array(MYSQLI_ASSOC))
		{
					if( strcmp($rab1["usn"],$rsem1["usn"])==0 && $rsem1["sem"]==$rab1["sem"] )
					{
					
					$st=$rab1["start"];
					$en=$rab1["end"];
					$re=$rab1["reason"];
					
        				$pdf->Cell($w[0],6,$st,1,0,'C');
       					$pdf->Cell($w[1],6,$en,1,0,'C');
        				$pdf->Cell($w[2],6,$re,1,0,'C');
        
        				$pdf->Ln();
	
					}
		}
	}
}

$pdf->Output();
?>
