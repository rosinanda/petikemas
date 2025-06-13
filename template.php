<?php
session_start();
include "connection.php";
include "fun_shipper.php";
$LastID= FormatNoshipper(getLastShipper($conn));



function printPage($title,$content){
$per_page = 9;

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <title>'.$title.' | PT. Tresnamuda Sejati</title>
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
    
	
         
    <script src="js/camera.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
        <script src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    
    <script>	
        $(window).load( function(){	
            
        	   jQuery(".camera_wrap").camera();	 
               
        });
    </script>
    

    
    <!--[if lt IE 9]>
    <div style="text-align:center"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>  
    <link rel="stylesheet" href="assets/tm/css/tm_docs.css" type="text/css" media="screen">
    <script src="assets/assets/js/html5shiv.js"></script> 
    <script src="assets/assets/js/respond.min.js"></script>
  <![endif]-->
  
  <!-- AJAX -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="notif.js"></script>
  
    <style type="text/css">
<!--
.style1 {color: #666666}
-->
    </style>
</head>
<body>
<!--header-middle-->
<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								'.menulogin().'
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

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
                      '.booking().'
                      '.payment().'
                      '.traffic().'
				  				  				  
                  <li><a href="index-4.php">location</a></li>
				  </ul>

                  </li>
                </ul>
            </nav>
          </div>
      </div>
</header>

'.$content.'

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
';
}

function menulogin()
{
	$string = '';
	if(isset($_SESSION['username_shipper'])){
	$query = "SELECT name_shipper FROM shipper WHERE id_shipper='".$_SESSION['id_shipper']."'";
	$result = mysql_query($query);  
	while($row=mysql_fetch_array($result)){                                                 
	$name=$row[name_shipper];
	}
	}
	if(!isset($_SESSION['username_shipper'])){
		$string='
		<li><a style="cursor:pointer;" onClick="login(1)" data-toggle="modal" data-target="#new">New Shipper</a></li>
								<div id="new" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
											<h2>New Shipper Sign Up!</h2>
											</div>
											<div class="modal-body">
												<div class="tab-content">
													<div class="signup-form"><!--sign up form-->
														
												<form name="form1" method="post" action="insert_shipper.php">
													<div class="form-group">
														<label class="col-sm-4 control-label">Name</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="name_shipper" placeholder="Shipper Name" required>
													</div>
													</div>
													
													<div class="form-group">
														<label class="col-sm-4 control-label">Address</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="ads_shipper" placeholder="Shipper Address">
													</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">City</label>
														<div class="col-sm-8">
														 <select name="city_shipper">
																<option>Surabaya</option>
																<option>Sidoarjo</option>
																<option>Gresik</option>
																<option>Malang</option>
																<option>Nganjuk</option>
															</select>
														</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">No. Tlp</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="tlp_shipper" placeholder="Shipper Phone">
													</div>
													</div>
													
													<div class="form-group">
														<label class="col-sm-4 control-label">Fax</label>
														<div class="col-sm-8">
															<textarea class="form-control" type="text" name="fax_shipper" placeholder="Shipper Fax" required></textarea>
														</div>
													</div>


													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">PIC Name</label>
														<div class="col-sm-8">
														<input type="text" class="form-control" name="pic_shipper" placeholder="PIC">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label">No. Tlp PIC</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="tlppic_shipper" placeholder="PIC Phone" required>
														</div>
													</div>
													&nbsp;
													&nbsp;
														<div class="form-group">
														<label class="col-sm-4 control-label">Username</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="username_shipper">
														</div>
													</div>
													
													<div class="form-group">
														<label class="col-sm-4 control-label">E-mail</label>
														<div class="col-sm-8">
															<input type="email" class="form-control" name="email_shipper" placeholder="Your E-mail" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label">Password</label>
														<div class="col-sm-8">
															<input type="password" class="form-control" name="password_shipper">
														</div>
													</div>
													
														<input type="submit" name="regis" class="btn btn-default" value="Register">
												</form>


											</div><!--/sign up form-->
									</div><!--/tab content-->
										</div>
										
										<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal"> Close</button> 
										</div>
										</div>
										</div>
										</div>
										
										
				  				<li><a style="cursor:pointer;" onClick="login(1)" data-toggle="modal" data-target="#login">Login</a></li>
								
								<div id="login" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h2>Login Shipper!</h2>
											</div>
											<div class="modal-body">
												<form name="form1" method="post" action="login_singgah.php">
													  <div class="form-group">
														<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
														<div class="col-sm-10">
														  <input type="text" class="form-control" name="username_shipper" placeholder="Username">
														</div>
													  </div>
													  &nbsp;
													  <div class="form-group">
														<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
														<div class="col-sm-10">
														  <input type="password" class="form-control" name="password_shipper" placeholder="Password">
														</div>
													  </div>
													  &nbsp;
													  <div class="form-group">
														<div class="col-sm-offset-2 col-sm-10">
														  <button type="submit" name="login" class="btn btn-default">Sign in</button>
														</div>
													  </div>
													</form>
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal"> Close</button> 
										</div>
										</div>
										</div>
										</div>
								
		';
	}else{
			$string='
						<li><a href="#">'.$name.'</a></li>
							<li><a style="cursor:pointer;" onclick="ubahprofile(\'shipper\','.$_SESSION['username_shipper'].')"> Edit Profil</a></li>
							<li><a href="logout.php">Keluar</a></li>
					<li><a id="pesan" href="#"><i class="fa fa-bell"></i>Draft BL<span class="badge" id="jmlh" style="background-color:red;">0</span></a></li>
					<div id="info">
					<div id="konten-info">
					</div>
					</div>
					';
	}
	return $string;
}




function booking()
{
	$string='';
	if(!isset($_SESSION['username_shipper']))
	{
		$string = '	
		 <li><a style="cursor:pointer;" onClick="login(1)" data-toggle="modal" data-target="#login">Booking</a></li>
		';
	}else{
		$string = '
		<li><a href="booking.php">Booking</a></li>
		';
	}
	return $string;
}

function payment()
{
	$string='';
	if(!isset($_SESSION['username_shipper']))
	{
		$string = '	
		 <li><a style="cursor:pointer;" onClick="login(1)" data-toggle="modal" data-target="#login">Payment</a></li>
		';
	}else{
		$string = '
		<li><a href="payment.php">Payment</a></li>
		';
	}
	return $string;
}

function traffic()
{
	$string='';
	if(!isset($_SESSION['username_shipper']))
	{
		$string = '	
		 <li><a style="cursor:pointer;" onClick="login(1)" data-toggle="modal" data-target="#login">Traffic</a></li>
		';
	}else{
		$string = '
		<li><a href="traffic.php">Traffic</a></li>
		';
	}
	return $string;
}
?>