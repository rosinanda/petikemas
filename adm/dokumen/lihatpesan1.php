<?php
session_start();
include "../koneksi.php";
$pesan = mysql_query("SELECT * FROM bl WHERE status_bl='Sudah di konfirmasi'");
$j = mysql_num_rows($pesan);
if($j>0){
    echo "<table border=0 width=100% style=\"font-size:10pt\">";
}else{
    die("<font color=red size=1>Tidak ada pesan baru yang belum dibaca</font>");
}
while($p = mysql_fetch_array($pesan)){
    echo "<tr><td onmouseover=\"this.style.backgroundColor='skyblue'\"
     onmouseout=\"this.style.backgroundColor='white'\">
     <a href=pesan1.php?no=".$p['no_bl'].">nomor BL : ".$p['no_bl']."</a><br>
		</td></tr>";
}
echo "</table>";
?>
