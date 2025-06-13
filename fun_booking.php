<?php
function getLastSi() 
{ 
$querycount="SELECT IFNULL(MAX(substr(no_si, 19)), 0) as LastIDSI FROM si"; 
$result=mysql_query($querycount) or die(mysql_error()); 
$row=mysql_fetch_array($result, MYSQL_ASSOC);
return $row['LastIDSI']; 
}

function FormatNosi($num) { 
		$num=$num+1; switch (strlen($num)) 
		{     
		case 1 : $NoSi = "SI/".date('dmY')."/000000".$num; break;     
		case 2 : $NoSi = "SI/".date('dmY')."/00000".$num; break;     
		case 3 : $NoSi = "SI/".date('dmY')."/0000".$num; break;     
		case 4 : $NoSi = "SI/".date('dmY')."/000".$num; break;
		case 5 : $NoSi = "SI/".date('dmY')."/00".$num; break;
		case 6 : $NoSi = "SI/".date('dmY')."/0".$num; break;        
		default: $NoSi = $num;        
		}           
		return $NoSi; 
} 
?>