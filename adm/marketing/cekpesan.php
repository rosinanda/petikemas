<?php
include "../koneksi.php";
$pesan = mysql_query("SELECT no_si FROM si WHERE konfirmasi='no'");
$j = mysql_num_rows($pesan);
if($j>0){

    echo $j;
}
?>