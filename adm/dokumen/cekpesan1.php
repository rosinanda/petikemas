<?php
include "../koneksi.php";
$pesan = mysql_query("SELECT no_bl FROM bl WHERE status_bl='Sudah di konfirmasi'");
$j = mysql_num_rows($pesan);
if($j>0){

    echo $j;
}
?>