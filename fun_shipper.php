<?php
function getLastShipper($conn) 
{ 
    $querycount = "SELECT IFNULL(MAX(RIGHT(id_shipper, 4)), 0) as LastID FROM shipper"; 
    $result = mysqli_query($conn, $querycount) or die(mysqli_error($conn)); 
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    return $row['LastID']; 
}

function FormatNoshipper($num) 
{ 
    $num = $num + 1; 
    switch (strlen($num)) 
    {     
        case 1 : $NoShipper = "S000".$num; break;     
        case 2 : $NoShipper = "S00".$num; break;     
        case 3 : $NoShipper = "S0".$num; break;     
        case 4 : $NoShipper = "S".$num; break;     
        default: $NoShipper = $num;        
    }           
    return $NoShipper; 
} 
?>
