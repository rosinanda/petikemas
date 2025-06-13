<?php
session_start();
mysql_connect("localhost","root","") or die("Nggak bisa koneksi");
mysql_select_db("tresnamuda");//sesuaikan dengan nama database anda

$username_emp = $_POST['username'];
$password_emp = $_POST['password'];
$op = $_GET['op'];

if($op=="in"){
    $cek = mysql_query("SELECT * FROM employee WHERE username_emp='$username_emp' AND password_emp='$password_emp'");
    if(mysql_num_rows($cek)==1){//jika berhasil akan bernilai 1
        $c = mysql_fetch_array($cek);
		$_SESSION['id_emp'] = $c['id_emp'];
		$_SESSION['password_emp'] = $c['password_emp'];
        $_SESSION['username_emp'] = $c['username_emp'];
        $_SESSION['departemen'] = $c['departemen'];
        if($c['departemen']=="marketing"){
            header("location:marketing/marketing.php");
        }else if($c['departemen']=="dokumen"){
            header("location:dokumen/dokumen.php");
        }else if($c['departemen']=="customer_service"){
            header("location:customer service/customer_service.php");
        }else if($c['departemen']=="kepala_cabang"){
            header("location:kepala cabang/kepala_cabang.php");
        }else if($c['departemen']=="keuangan"){
            header("location:keuangan/keuangan.php");
        }
    }else{
         die("password salah <a href=\"javascript:history.back()\">kembali</a>");
    }
}else if($op=="out"){
    unset($_SESSION['username_emp']);
    unset($_SESSION['departemen']);
    header("location:index.php");
}
?>
