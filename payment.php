<?php
session_start();
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment</title>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/l.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/l.png" type="image/x-icon" />
    <meta name = "format-detection" content = "telephone=no" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/camera.css">
    
	<script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    
         
    <script src='js/camera.js'></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
        <script src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    
    <script>	
        $(window).load( function(){	
            
        	   jQuery('.camera_wrap').camera();	 
               
        });
    </script>
    

    
    <!--[if lt IE 9]>
    <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>  
    <link rel="stylesheet" href="assets/tm/css/tm_docs.css" type="text/css" media="screen">
    <script src="assets/assets/js/html5shiv.js"></script> 
    <script src="assets/assets/js/respond.min.js"></script>
  <![endif]-->
  
  
    <style type="text/css">
<!--
.style1 {color: #666666}
-->
    </style>
</head>
<body>
<!--==============================header===========================================================================================================-->
<header id="header">
      <div class="container">
        <h1 class="navbar-brand navbar-brand_"><a href="index.html"><img alt="Grill point" src="img/logo.png"></a></h1>
      </div>
      <div class="menuheader">
          <div class="container">
            <nav class="navbar navbar-default navbar-static-top tm_navbar" role="navigation">
                <ul class="nav sf-menu">
                  <li><a href="index.php">home</a></li>
                  <li><a href="index-1.php">about me</a></li>
                  <li><a href="index-2.php">gallery</a></li>
                  <li><a href="index-3.php">Route</a></li>
				  <li class="active"><a href="#">Services</a>
                    <ul>
                      <li class="active"><a href="booking.php">Booking</a></li>
                      <li><a href="payment.php">Payment</a></li>
                      <li><a href="traffic.php">Traffic</a></li>
                    </ul>
                  </li>
				  				  				  
                  <li><a href="index-4.php">location</a></li>
				  </ul>

                  </li>
                </ul>
            </nav>
          </div>
      </div>
</header>
<!--==============================content=================================-->
<div id="content">
    <!--==============================row5=================================-->
    <div class="row_5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 reserve_table">
                    <h2>Payment</h2>
                    
							
							
							 
							<form name="formcari" method="get" action="<?=$_SERVER['PHP_SELF']?>">
							  <div class="form-group">
								<label>Please input your number of draft Bill of Lading</label>
								<input type="text" class="form-control"  name="no_bl" placeholder="number of draft Bill of Lading">
								 <button type="submit" name="cari" class="btn btn-default">Cek</button>
							  </div>
							  </form>
							  
							  <?php
							  echo '<form name="update" method="post" action="insert_payment.php" enctype="multipart/form-data">';
							  if(isset($_GET['cari'])){
							  $no_bl = $_GET['no_bl'];
								$sql = "select no_bl, payment_total from bl where no_bl like '%$no_bl%'";
								$result = mysql_query($sql);
								if(mysql_num_rows($result) > 0){
										while($bl = mysql_fetch_array($result)){
											echo '
											 <input type="hidden" class="form-control" name="no" value ="'.$bl['no_bl'].'">
											<div class="form-group">
											  <div class="input-group">
													<div class="input-group-addon">Rp. </div>
													  <input type="text" class="form-control" id="rupiah" name="payment_total" value ="'.$bl['payment_total'].'">
													  <div class="input-group-addon">.00</div>
												</div>
											  </div>
											';
										}
								}else{
									echo 'Data not found!'; 
								}
							}
							
							echo'
							<table class="table" bordercolor="#333333">
								<tr>
									<td>
									<h3>Transfer</h3>
									<div class="form-group">
									
									<label class="col-sm-4 control-label">Rekening Bank Anda</label>
									
									<label class="col-sm-4 control-label">Rekening Bank TMS Yang Ada</label>
									</div>
									<br>
									<br>
									<br>
									<div class="form-group">
									<div class="col-sm-4">
									<select class="form-control" name="bank_shipper">
															  <option>BCA</option>
															  <option>MANDIRI</option>
															  <option>BRI</option>
															  <option>BNI</option>
															</select>
									</div>
									<div class="col-sm-4">
									<select class="form-control" name="bank_tresna">
															  <option>BCA</option>
															  <option>MANDIRI</option>
															  <option>BRI</option>
															  <option>BNI</option>
															</select>
									</div>
									</div>
									
									</td>
								</tr>
								</table>
								
								<div class="form-group">
								<label class="col-sm-4 control-label">Tanggal Transfer</label>
								<div class="col-sm-8">
								<input type="date" class="form-control" name="date_paid">
								</div>
								</div>
							  <div class="form-group">	
								<label>Bukti Transfer</label>
								<input type="file" id="exampleInputFile" name="bukti_transfer">
								<p class="help-block">Wajib upload bukti transfer, ukuran minimal 1MB</p>
							  </div>

							  <button type="submit" name="submit" class="btn btn-default">Send</button>
							</form>
					
							';
							
							  ?>
							  
							  
					
					
					
                </div>
                
                <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-4 col-md-4 col-sm-4">
                    <h2>Fleet Ownet</h2>
                    <hr class="line2">
                    <p class="style1">MV “TMS GLORY” ex ASIAN GLORY  / CONTAINER VESSEL / INDONESIAN FLAG / CALL SIGN JZMV/ IMO NO. 9065431 / CLASS  BKI / PORT OF REGISTRY TANJUNG PRIOK / BUILT 1993 / BUILDER DAE SUN  SHIPBUILDING &amp; ENGINEERING CO., LTD., BUSAN, KOREA / DEADWEIGHT 7.042 T /  GRT 4.951 T / NRT 2.182 T / LOA 113.20 M / BEAM 19.00 M / DEPTH 8,50 M / DRAFT  6.513 M / LOADING CAPACITY 357 TEUS / MAIN ENGINE : SSANGYONG-MAN-B&amp;W TYPE  6L35MC / AUX ENGINE YANMAR S185DL-ET / SPEED 12.0 KNOTS.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================footer=================================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 footercol">
                <ul class="social_icons clearfix">
                     <li><a href="#"><img src="img/follow_icon1.png" alt=""></a></li>
                     <li><a href="#"><img src="img/follow_icon2.png" alt=""></a></li>
                     <li><a href="#"><img src="img/follow_icon3.png" alt=""></a></li>
                     <li><a href="#"><img src="img/follow_icon4.png" alt=""></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 footerlogo footercol">
                <a class="smalllogo2 logo" href="index.html"><img src="img/logofooter.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 footercol">
                <p class="footerpriv">&copy; 2016 &bull; <a class="privacylink" href="index-5.html"> PT Tresnamuda Sejati</a></p>
            </div>
        </div>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
</body>
</html>