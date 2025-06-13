<?php
include "connection.php";
include "template.php";

$title="Location";
$content='
<div id="content">
    <!--==============================row8=================================-->
    <div class="row_8">
        <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 gmap">
                      <div class="map"><iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe></div>
                    </div>  
                 </div> 
                 <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 address">
                        <h2>HEAD OFFICE</h2>
                        <address>
                            <div class="info">
                                <strong>Komplek Ruko Sunter Permai Indah<BR>Jl. Mitra Sunter Boulevard. Block B No. 12-16. Jakarta 14350.Indonesia.</strong>
                            	<p><span>Telephone:</span> 021-6522333 (Hunting)</p>
                            	<p><span>FAX:</span>021-6522336, 6522337.</p>
                            	<p>E-mail: <a href="mailto:#">adminjkt@tresnamuda.co.id</a></p>
                            </div>
                        </address>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 address">
                        <h2>BRANCH OFFICE</h2>
                        <div class="col-lg-4 col-md-4 col-sm-4 address">
                        <h3>SURABAYA</h3>
                           <address>
                            <div class="info">
                                <strong>Jl. Perak Timur No.210. Surabaya 60165.</strong>
                            	<p><span>Telephone:</span> 031-3295475 (Hunting)</p>
                            	<p><span>FAX:</span>031-3291305, 3292714.</p>
                            	<p>E-mail: <a href="mailto:#">adminsub@tresnamuda.co.id</a></p>
                            </div>
                        </address>
						<h3>SEMARANG</h3>
                           <address>
                            <div class="info">
                                <strong>Jl. Sermar Usman Janatin No.18/V-VI. Semarang 50241.</strong>
                            	<p><span>Telephone:</span> 024-3551813, 3551802, 3542998 </p>
                            	<p><span>FAX:</span>024-3543228.</p>
                            	<p>E-mail: <a href="mailto:#">adminsmg@tresnamuda.co.id</a></p>
                            </div>
                        </address>
						<h3>MERAK</h3>
                           <address>
                            <div class="info">
                                <strong>Komplek Arga Bajapura, Jl. Arga Raung B3 No. 16, Cilegon 435436</strong>
                            	<p><span>Telephone:</span> 0254-571194</p>
                            	<p><span>FAX:</span>0254-571194.</p>
                            	<p>E-mail: <a href="mailto:#">adminjkt@tresnamuda.co.id</a></p>
                            </div>
                        </address>
						<h3>BANDUNG</h3>
                           <address>
                            <div class="info">
                                <strong>Jl. Ibrahim Adjie No.394A. Bandung 40275.</strong>
                            	<p><span>Telephone:</span>  022-733288, 733289, 7333295, 7333270, 7333335</p>
                            	<p><span>FAX:</span>022-7308559.</p>
                            	<p>E-mail: <a href="mailto:#">adminbdg@tresnamuda.co.id</a></p>
                            </div>
                        </address>
                    </div>
					<div class="col-lg-4 col-md-4 col-sm-4 address">
                        <h3>GRESIK</h3>
                           <address>
                            <div class="info">
                                <strong>Perum Gresik Kota Baru, JL. Rantau No. 22, Sukomulyo, Manyar, Gresik 61151</strong>
                            	<p><span>Telephone:</span> (031) 3950389</p>
                            	<p><span>FAX:</span>(031) 3950389</p>
                            	<p>E-mail: <a href="mailto:#">adminsub@tresnamuda.co.id</a></p>
                            </div>
                        </address>
						<h3>BANJARMASIN</h3>
                           <address>
                            <div class="info">
                                <strong>Jl. Cempaka XI No. 47. Banjarmasin 70113 Kalimantan Selatan</strong>
                            	<p><span>Telephone:</span> 0511-55997, 413778</p>
                            	<p><span>FAX:</span> 0511-55997.</p>
                            	<p>E-mail: <a href="mailto:#">mktbjm@tresnamuda.co.id</a></p>
                            </div>
                        </address>
						<h3>BANDAR LAMPUNG</h3>
                           <address>
                            <div class="info">
                                <strong>Jl. Laks. Malahayati No. 108. Teluk Betung. Bandar Lampung 35225,</strong>
                            	<p><span>Telephone:</span> 0721-487717, 487718.</p>
                            	<p><span>FAX:</span>0721-485647.</p>
                            	<p>E-mail: <a href="mailto:#"> adminpjn@tresnamuda.co.id</a></p>
                            </div>
                        </address>
						<h3>MAKASSAR</h3>
                           <address>
                            <div class="info">
                                <strong>Jl. Wahidin Sudirohusodo No.147, Makassar 90173, Sulawesi Selatan.</strong>
                            	<p><span>Telephone:</span>0411-3617060,3612201,3622430.</p>
                            	<p><span>FAX:</span>0411-3621735/3613088.</p>
                            	<p>E-mail: <a href="mailto:#">mktmks@tresnamuda.co.id</a></p>
                            </div>
                        </address>
                    </div>
					<div class="col-lg-4 col-md-4 col-sm-4 address">
                        <h3>MEDAN</h3>
                           <address>
                            <div class="info">
                                <strong>Komplek Ruko Bilal Prima, Blok C No. 15 & 16, Jl. Bilal, Medan 20239.</strong>
                            	<p><span>Telephone:</span>061-6643330-31, 6630038</p>
                            	<p><span>FAX:</span>061-6637938.</p>
                            	<p>E-mail: <a href="mailto:#">adminmdn@tresnamuda.co.id</a></p>
                            </div>
                        </address>
						<h3>PONTIANAK</h3>
                           <address>
                            <div class="info">
                                <strong>Koplek Perdana Square, Jl. Perdana Blok E 22 RT001/RW10, Pontianak 78124.</strong>
                            	<p><span>Telephone:</span> 0561-733557 (Hunting), 6655868</p>
                            	<p><span>FAX:</span>0561-732334.</p>
                            	<p>E-mail: <a href="mailto:#">adminpnk@tresnamuda.co.id</a></p>
                            </div>
                        </address>
						<h3>TANJUNG PRIOK</h3>
                           <address>
                            <div class="info">
                                <strong>Jl. Kebon Bawang 11 No. 41, Tajung Priok 14320</strong>
                            	<p><span>Telephone:</span> 021-43936974, 4301447 Ext. 716</p>
                            	<p><span>FAX:</span>021-43936974.</p>
                            	<p>E-mail: <a href="mailto:#">adminjkt@tresnamuda.co.id</a></p>
                            </div>
                        </address>
                    </div>
                    </div>
                 </div> 
        </div>
    </div>
</div>
';
printPage($title,$content);
?>