<?php
include "connection.php";
include "template.php";

$title="Home";
$content='
<div id="content">

    <!--==============================slider=================================-->
    <div class="slider">
        <div class="camera_wrap">
          <div data-src="img/picture1.jpg"></div>
          <div data-src="img/picture2.jpg"></div>
          <div data-src="img/picture3.jpg"></div>
        </div>
    </div>
	
	
	
    <!--==============================row1=================================-->
    <div class="row_1">
        <div class="container">
            <p class="title1">Welcome!</p>
            <p class="title2">
			<p align="center" class="style10"><span class="style13"><span class="style15"><strong>PT. Tresnamuda Sejati</strong> also called TMS Lines was established in 1986 by Mr. David V. Lengkong and his wife </span></span></p>
						<p align="center" class="style14">Mrs. Emmy Wijaya, with their hard work and continues innovation, now TMS Lines have their own offices in all major cities in Indonesia : </p>
						<p align="center" class="style14">Java island - Jakarta, Surabaya, Semarang, Gresik & Merak, Sumatera - Belawan/Medan and Panjang/Bandar Lampung, Kalimantan - Pontianak </p>
						<p align="center" class="style14">and Banjarmasin, Sulawesi/Celebes - Makassar</p>
						<p align="center" class="style10">&nbsp;</p>
			</p>
        </div>
    </div>
    <!--==============================row2=================================-->
    <div class="row_2">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>
    <!--==============================row3=================================-->
    <div class="row_3">
        <div class="container">
            <div class="row">
                <ul class="list3">
                    <li class="col-lg-12 col-md-6 col-sm-6">
                        <div class="box4">
                            <div class="info1 maxheight">
							<center>
                                <img src="img/grub.png">
								</center>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-12 col-md-6 col-sm-6">
                        <div class="box4">
								<center>
                                <img src="img/agent.png">
								</center>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================row4=================================-->
    <div class="row_4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 chef row4_col">
                    <h2>About Me</h2>
                    <figure><img src="img/page1_img8.jpg" alt=""></figure>
                    <p class="title3">TMS Lines</p>
                    <p>OUR BUSSINESS
Tresnamuda Sejati also called TMS Lines is a ship owner, operator and agencies business. TMS Lines offer fully containerized services for domestic service from Jakarta to Panjang  (Bandar Lampung) Vise versa and for Intenational services from all major ports in Indonesia to Asia Pacific region, Middle East, USA & Europe Ports. </p>
                    <a href="index-1.php" class="btn-link btn-link2">read more<span></span></a>
                </div>
                <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 row4_col">
                    <h2>Latest Services</h2>                        
                    <ul class="list2">
                        <li><a href="#">E-Booking</a></li>
                        <li><a href="#">E-Payment</a></li>
                        <li><a href="#">Traffic Monitor</a></li>
                    </ul> 
                </div>
                <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 locations row4_col">
                    <h2>Head Office</h2>
                    <figure><img src="img/smalllogo1.png" alt=""></figure>
                    <p class="title4">Komplek Ruko Sunter Permai Indah
Jl. Mitra Sunter Boulevard. Block B No. 12-16. Jakarta 14350.
Indonesia.<br>Chicago<br>Telp. 021-6522333 (Hunting),
Fax. 021-6522336, 6522337.</p>
                    <hr class="line1">
                    <a href="#" class="btn-link btn-link3"><span></span>adminjkt@tresnamuda.co.id</a>
                </div>
            </div>
        </div>
    </div>
</div>
';
printPage($title,$content);
?>