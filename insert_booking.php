<?php
session_start();
include "connection.php";
include "fun_booking.php";

$LastIDSI= FormatNosi(getLastSi());
$id_shipper=$_SESSION['id_shipper'];
$date_si = date('Y-m-d');
$voy = $_POST['voy'];
$id_company = $_POST['id_company'];
$date_si = $_POST['date_si'];
$notify_party = $_POST['notify_party'];
$pol = $_POST['pol'];
$po_disc = $_POST['po_disc'];
$po_del = $_POST['po_del'];
$party = $_POST['party'];
$type_container = $_POST['type_container'];
$desc_og = $_POST['desc_og'];
$w_nett = $_POST['w_nett'];
$w_gross = $_POST['w_gross'];
$data_stuffing = $_POST['data_stuffing'];
$place_stuffing = $_POST['place_stuffing'];
$fumigation = $_POST['fumigation'];

$sql= "INSERT INTO si
(no_si, voy, id_shipper, id_company, date_si, notify_party, pol, po_disc, po_del, party, type_container, desc_og, w_nett, w_gross, data_stuffing, place_stuffing, fumigation, konfirmasi, draft_bl) 
VALUES 
('$LastIDSI', '$voy', '$id_shipper', '$id_company', '$date_si', '$notify_party', '$pol', '$po_disc', '$po_del', '$party', '$type_container', '$desc_og', '$w_nett', '$w_gross', '$data_stuffing', '$place_stuffing', '$fumigation', 'no', 'belum')";
echo "qquery : " . $sql;
$result=mysql_query($sql);
if($result){
echo "Successful";
echo "<BR>";
header("location: booking.php");
}

else {
echo "ERROR";
}




?>

