<?php
include "../koneksi.php";
$pesan = mysql_query("SELECT no_si FROM si WHERE draft_bl='belum'");
$j = mysql_num_rows($pesan);
if($j>0){

    echo $j;
}
?>