<?php
session_start();
include "connection.php";
include "fun_booking.php";
$LastIDSI= FormatNosi(getLastSi());
	if(isset($_SESSION['username_shipper'])){
	$query = "SELECT name_shipper FROM shipper WHERE id_shipper='".$_SESSION['id_shipper']."'";
	$result = mysql_query($query);  
	while($row=mysql_fetch_array($result)){                                                 
	$name=$row[name_shipper];
	}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booking</title>
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
body {
	background-color: #666666;
}
-->
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<!--header-middle-->

		<!--/header-middle-->

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
                    <h2>Shipping Instruction </h2>
						&nbsp;
						&nbsp;
						&nbsp;
						&nbsp;
						<div class="tab-content">
						<form class="form-inline style1">
						  <div class="form-group">
							<label>Shipper : <?php echo $name ?></label>
						  </div>
						  <br>
						  <div class="form-group">
							<label name="date_si">Date	: <?php 
							$tgl=date('d-m-Y');
							echo $tgl;
							?></label>
						  </div>
						  <br>
						   <div class="form-group">
							<label for="exampleInputEmail2">No. Shipping Instruction : <?php  echo $LastIDSI ?> </label>
					      </div>
						</form>
						</div>
						<br>
						<br>
						&nbsp;
						&nbsp;
										<div class="tab-content">
													<div class="signup-form"><!--sign up form-->
														
												<form name="form1" method="post" action="insert_booking.php">
												 <fieldset>
													<div class="form-group">
														<label class="col-sm-4 control-label">Port of Lading </label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="pol" placeholder="Port of Lading" required>
													</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Port of Discharge </label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="po_disc" placeholder="Port of Discharge ">
													</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Port of Delivery </label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="po_del" placeholder="Port of Delivery">
													</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Consignee</label>
														<div class="col-sm-8">
														 <select name="id_company">
														<?php
																$query = "SELECT * FROM company";
																$result = mysql_query($query);  
																	while($row=mysql_fetch_array($result)){                                                 
																	echo "<option value='".$row[id_company]."'>".$row[name_company]."</option>";
																	}
																?>          
														  </select>
														</div>
													</div>
													&nbsp;
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Date</label>
														<div class="col-sm-8">
														 <select name="voy">
														<?php
																$query = "SELECT * FROM schedule";
																$result = mysql_query($query);  
																	while($row=mysql_fetch_array($result)){                                                 
																	echo "<option value='".$row[voy]."'>".$row[eta]."</option>";
																	}
																?>          
														  </select>
														</div>
													</div>
													&nbsp;
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Notify Party</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="notify_party" placeholder="Notify Party">
													</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Party</label>
													  <div class="col-sm-8">
													  <select name="party">
															
														<option>20FT</option>
														 <option>40FT</option>
															 <option>45FT</option>
													    </select>
															
															
															Type
															<select name="type_container">
															
														<option>DRY CONTAINER STANDARD</option>
														 <option>OPEN TOP CONTAINER</option>
														<option>FLATRACK CONTAINER</option> 
														<option>REFRIGERATED CONTAINER</option>
														 <option>TANK CONTAINER</option>
														<option>FANTAINER / VENTILATION</option>
														<option>BULK CONTAINER</option>
														 <option>OPEN SIDE CONTAINER</option>
														<option>PLATFORMS</option>          
														  </select>
														  
													  </div>
													</div>


													&nbsp;
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Descruption of Goods</label>
														<div class="col-sm-8">
														<input type="text" class="form-control" name="desc_og" placeholder="Description of Goods">
														</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Wight</label>
														<div class="col-sm-4">
															<input type="text" class="form-control" name="w_nett" placeholder="Nett" required>
														</div>
														<div class="col-sm-4">
															<input type="text" class="form-control" name="w_gross" placeholder="Gross" required>
														</div>
													</div>
													&nbsp;
													&nbsp;
														<div class="form-group">
														<label class="col-sm-4 control-label">Date of Stuffing</label>
														<div class="col-sm-8">
															<input type="date" class="form-control" name="data_stuffing">
														</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Place of Stuffing</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="place_stuffing" placeholder="Place of Stuffing" required>
														</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Fumigation</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="fumigation" placeholder="Fumigation" required>
														</div>
													</div>
													&nbsp;
													&nbsp;
													&nbsp;
													&nbsp;
													<center>
													<div class="form-group">
													  <input type="submit" name="regis" class="btn btn-default" value="Send">
													</div>
												 </center>
                          </fieldset>

												</form>


											</div><!--/sign up form-->
									</div><!--/tab content-->
			  </div>
                <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-4 col-md-4 col-sm-4">
                    <h2>types of containers</h2>
                    <hr class="line2">
                    <p class="style1"><strong><a href="http://wwwmultibusiness.blogspot.com/2010/01/macam-macam-container.html">1. DRY CONTAINER STANDARD</a></strong><br>
                    Kontainer standar yang digunakan untuk mengangkut semua jenis muatan umum (Kargo kering)</p>
                    <p class="style1"><strong><a href="http://wwwmultibusiness.blogspot.com/2010/01/macam-macam-container.html">2. OPEN TOP CONTAINER</a></strong><br>
                      Container digunakan terhadap semua jenis kargo umum (kargo kering), khususnya digunakan untuk muatan dengan kriteria sebagai berikut:<br>
                      <strong><em>a. Muatan Berat</em></strong><br>
                      <strong><em>b. Muatan tinggi</em></strong><br>
                    <strong><em>c. Muatan yang proses pemuatanya tidak dapat dilakukan secara normal ( loading dari atas )</em></strong></p>
                    <p class="style1"><strong><a href="http://wwwmultibusiness.blogspot.com/2010/01/macam-macam-container.html">3. FLATRACK CONTAINER</a></strong><br>
                    Flatracks digunakan khususnya untuk mengangkut muatan berat ( Alat berat Heavy lift dan kargo overheight atau overwidth )</p>
                    <p class="style1"><strong><a href="http://wwwmultibusiness.blogspot.com/2011/07/reefer-container.html">4. REFRIGERATED CONTAINER</a></strong><br>
                    Reefer Container digunakan untuk mengangkut muatan yang memerlukan penanganan suhu tertentu / di atas atau di bawah titik beku. Barang-barang dibagi menjadi barang dingin dan barang beku, tergantung pada suhu yang diinginkan. Umumnya meliputi produk buah-buahan, sayuran, daging dan susu, seperti mentega dan keju.</p>
                    <p class="style1"><strong><a href="http://wwwmultibusiness.blogspot.com/2011/07/iso-tank.html">5. TANK CONTAINER</a></strong><br>
                    Container tangki digunakan untuk mengangkut muatan cair, seperti: Bahan pangan: jus buah, minyak manis. Kimia: bahan berbahaya, seperti bahan bakar, zat beracun, agen perlindungan korosi</p>
                    <p class="style1"><strong><a href="http://wwwmultibusiness.blogspot.com/2011/12/goh-garment-of-hangertainer.html">6. HANGER TAINER</a></strong><br>
                    Digunakan untuk muatan pakaian yang cara penyimpanannya dengan cara digantung.</p>
                    <p class="style1"><strong><a href="http://wwwmultibusiness.blogspot.com/2010/01/macam-macam-container.html">7. FANTAINER / VENTILATION</a></strong><br>
                    Kontainer berventilasi digunakan terutama untuk mengangkut muatan yang memerlukan sirkulasi udara yang cukup. Salah satu yang paling signifikan dari komoditas tersebut adalah biji kopi </p>
                    <p class="style1"><strong><a href="http://wwwmultibusiness.blogspot.com/2010/01/macam-macam-container.html">8. BULK CONTAINER</a></strong><br>
                    Bulk Container digunakan terutama untuk mengangkut muatan dalam bentuk curah, seperti butiran, bahan pakan, rempah-rempah.</p>
                    <p class="style1"><a href="http://wwwmultibusiness.blogspot.com/2010/01/macam-macam-container.html">9. OPEN SIDE CONTAINER</a><br>
                    Jenis container yang didesignt untuk dapat melakukan pemuatan muatan dari sisi samping.</p>
                    <p class="style1"><strong><a href="http://wwwmultibusiness.blogspot.com/2010/01/macam-macam-container.html">10. PLATFORMS</a></strong><br>
                    Jenis container yang dipergunakan untuk muatan dengan ukuran lebih besar dan beratnya melebihi standar muatan pada umumnya.</p>
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