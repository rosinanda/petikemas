<?php
session_start();
include "../koneksi.php";
include "fun_payment.php";

$LastIDBL= FormatNobl(getLastBl());
$no_si=$_POST['no_si'];
$no_container = $_POST['no_container'];
$id_company = $_POST['id_company'];
$harga_pengiriman = $_POST['harga_pengiriman'];

								$cari = "select name_container, harga_container from container where no_container='$no_container'";
								$re = mysql_query($cari);
								if(mysql_num_rows($re) > 0){
										while($bl = mysql_fetch_array($re)){
											$name_container=$bl['name_container'];
											$harga_container=$bl['harga_container'];
											$total=$harga_container+$harga_pengiriman;
											
$sql= "INSERT INTO bl
(no_bl, no_si, harga_container, harga_pengiriman, payment_total, status_bl) 
VALUES 
('$LastIDBL', '$no_si', '$harga_container', '$harga_pengiriman', '$total', 'Belum di konfirmasi')";
echo "qquery : " . $sql;
$result=mysql_query($sql);
if($result){
echo "Successful";
echo "<BR>";
header("location: dokumen.php");
}

else {
echo "ERROR";
}
											
											
										}
								}else{
									echo 'Data not found!'; 
								}
?>

