<?php
session_start();
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","");
mysql_select_db("tresnamuda",$conn);
$result = mysql_query("SELECT * FROM shipper WHERE username_shipper='" . $_POST["username_shipper"] . "' and password_shipper = '". $_POST["password_shipper"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["id_shipper"] = $row[id_shipper];
$_SESSION["username_shipper"] = $row[username_shipper];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id_shipper"])) {
header("Location:index.php");
}
?>