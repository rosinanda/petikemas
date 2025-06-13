<?php
function getLast() 
{ 
$querycount="SELECT IFNULL(MAX(substr(id_status, 19)), 0) as Last FROM status_bl"; 
$result=mysql_query($querycount) or die(mysql_error()); 
$row=mysql_fetch_array($result, MYSQL_ASSOC);
return $row['Last']; 
}

function Format($num) { 
		$num=$num+1; switch (strlen($num)) 
		{     
		case 1 : $sesuai = "BL00".$num; break;     
		case 2 : $sesuai = "BL0".$num; break;     
		case 3 : $sesuai  = "BL".$num; break;         
		default: $sesuai  = $num;        
		}           
		return $sesuai ; 
} 
?>