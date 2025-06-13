<?php
session_start();
include "connection.php";
include "fun_sesuai.php";

$Last= Format(getLast());
$id_shipper=$_SESSION['id_shipper'];
$keterangan= $_POST['keterangan'];
$no_bl= $_POST['no_bl'];
if (isset($_POST['check1'])) {  
  $status=$_POST['check1'];  
  }  
  if (isset($_POST['check2'])) {  
  $status=$_POST['check2'];  
  }   

$sql= "INSERT INTO status_bl
(id_status, id_shipper, no_bl, status, keterangan) 
VALUES 
('$Last', '$id_shipper', '$no_bl', '$status', '$keterangan')";
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

