<?php
include "connection.php";
include "fun_shipper.php";
$LastID= FormatNoshipper(getLastShipper());

$name_shipper = $_POST['name_shipper'];
$ads_shipper = $_POST['ads_shipper'];
$city_shipper = $_POST['city_shipper'];
$tlp_shipper = $_POST['tlp_shipper'];
$fax_shipper = $_POST['fax_shipper'];
$email_shipper = $_POST['email_shipper'];
$pic_shipper = $_POST['pic_shipper'];
$tlppic_shipper = $_POST['tlppic_shipper'];
$username_shipper = $_POST['username_shipper'];
$password_shipper = $_POST['password_shipper'];


$sql= "INSERT INTO shipper
(id_shipper, name_shipper, ads_shipper, city_shipper, tlp_shipper, fax_shipper, email_shipper, pic_shipper, tlppic_shipper, username_shipper, password_shipper) 
VALUES 
('$LastID', '$name_shipper','$ads_shipper','$city_shipper', '$tlp_shipper', '$fax_shipper', '$email_shipper', '$pic_shipper', '$tlppic_shipper', '$username_shipper', '$password_shipper')";
echo "qquery : " . $sql;
$result=mysql_query($sql);
if($result){
echo "Successful";
echo "<BR>";
header("location: index.php");
}

else {
echo "ERROR";
}
?>

