<?php
function getLastBl() 
{ 
$querycount="SELECT IFNULL(MAX(substr(no_bl, 19)), 0) as LastIDBL FROM bl"; 
$result=mysql_query($querycount) or die(mysql_error()); 
$row=mysql_fetch_array($result, MYSQL_ASSOC);
return $row['LastIDBL']; 
}

function FormatNobl($num) { 
		$num=$num+1; switch (strlen($num)) 
		{     
		case 1 : $NoBl = "BL/".date('dmY')."/000000".$num; break;     
		case 2 : $NoBl = "BL/".date('dmY')."/00000".$num; break;     
		case 3 : $NoBl = "BL/".date('dmY')."/0000".$num; break;     
		case 4 : $NoBl = "BL/".date('dmY')."/000".$num; break;
		case 5 : $NoBl = "BL/".date('dmY')."/00".$num; break;
		case 6 : $NoBl = "BL/".date('dmY')."/0".$num; break;       
		default: $NoBl = $num;        
		}           
		return $NoBl; 
} 
?>