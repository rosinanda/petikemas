<?php
session_start();
include "../koneksi.php";
$pesan = mysql_query("SELECT * FROM si WHERE draft_bl='belum'");
$j = mysql_num_rows($pesan);
if($j>0){
    echo "<table border=0 width=100% style=\"font-size:10pt\">";
}else{
    die("<font color=red size=1>Tidak ada pesan baru yang belum dibaca</font>");
}
while($p = mysql_fetch_array($pesan)){
    echo "<tr><td onmouseover=\"this.style.backgroundColor='skyblue'\"
     onmouseout=\"this.style.backgroundColor='white'\">
     <a href=pesan.php?no=".$p['no_si'].">nomor shipping instruction : ".$p['no_si']."</a><br>
		</td></tr>";
}
echo "</table>";
?>
