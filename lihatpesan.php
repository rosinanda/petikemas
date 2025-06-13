<?php
session_start();
include "connection.php";
$id_shipper=$_SESSION['id_shipper'];
$pesan = mysql_query("select b.no_bl from bl b, si s, shipper sh where b.no_si=s.no_si and s.id_shipper=sh.id_shipper and b.status_bl='Belum di konfirmasi' and sh.id_shipper='$id_shipper'");
$j = mysql_num_rows($pesan);
if($j>0){
    echo "<table border=0 width=100% style=\"font-size:10pt\">";
}else{
    die("<font color=red size=1>Tidak ada pesan baru yang belum dibaca</font>");
}
while($p = mysql_fetch_array($pesan)){
    echo "<tr><td onmouseover=\"this.style.backgroundColor='skyblue'\"
     onmouseout=\"this.style.backgroundColor='white'\">
     <a href=pesan.php?no=".$p['no_bl'].">No Bill of Lading: ".$p['no_bl']."</a><br>
		</td></tr>";
}
echo "</table>";
?>
