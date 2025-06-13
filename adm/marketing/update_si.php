<?php
session_start();
include "../koneksi.php";
$no_si=$_POST['no_si'];
$container=$_POST['container'];

			$sql	= 'update si set no_container="'.$container.'", id_employee="'.$_SESSION['id_emp'].'" where no_si="'.$no_si.'"';
	$result=mysql_query($sql);
		$sq	= 'update container set stock_container= stock_container-1 where no_container="'.$container.'"';
	$res=mysql_query($sq);
	if($result){
	echo "Successful";
	echo "<BR>";
	header("location: marketing.php");
}

else {
echo "ERROR";
}
?>

