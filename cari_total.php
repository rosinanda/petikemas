<?php
session_start();
include "connection.php";
$no_bl= $_POST['no_bl']; //get the nama value from form
$q = "SELECT * from bl where no_bl like '%$no_bl%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q

while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
$_SESSION["no_bl"] = $data['no_bl'];
$_SESSION["payment_total"] = $data['payment_total'];
}
if(isset($_SESSION["no_bl"])) {
header("Location:payment.php");
}

?>