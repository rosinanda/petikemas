<?php
session_start();
include "connection.php";
$id_shipper=$_SESSION['id_shipper'];
$pesan = mysql_query("select b.no_bl from bl b, si s, shipper sh where b.no_si=s.no_si and s.id_shipper=sh.id_shipper and b.status_bl='Belum di konfirmasi' and sh.id_shipper='$id_shipper'");
$j = mysql_num_rows($pesan);
if($j>0){

    echo $j;
}
?>