<?php
session_start();
include "connection.php";

$no_bl=$_POST['no'];
$already_paid = $_POST['payment_total'];
$bank_shipper = $_POST['bank_shipper'];
$bank_tresna = $_POST['bank_tresna'];
$date_paid = $_POST['date_paid'];


$ekstensi_diperbolehkan=array('png','jpg');
$nama=$_FILES['bukti_transfer']['name'];
$x=explode('.',$nama);
$ekstensi=strtolower(end($x));
$ukuran=$_FILES['bukti_transfer']['size'];
$file_tmp=$_FILES['bukti_transfer']['tmp_name'];

if(in_array($ekstensi,$ekstensi_diperbolehkan)===true){
	if($ukuran<1044070){
		move_uploaded_file($file_tmp, 'file/'.$nama);
			$sql	= 'update bl set already_paid="'.$already_paid.'", bank_shipper="'.$bank_shipper.'", bank_tresna="'.$bank_tresna.'", date_paid="'.$date_paid.'", bukti_transfer="'.$nama.'" where no_bl="'.$no_bl.'"';
	$result=mysql_query($sql);
	if($result){
	echo "Successful";
	echo "<BR>";
	header("location: payment.php");
}

else {
echo "ERROR";
}
		
	}

}



?>

