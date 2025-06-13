<?php
include "../koneksi.php";
include "template.php";

$title="Dokumen";

$no = $_GET['no'];
$pesan = mysql_query("SELECT * FROM bl,status_bl, shipper WHERE bl.no_bl='$no' and nl.no_bl=status_bl.no_bl and status_bl.id_shipper=shipper.id_shipper");
while($p = mysql_fetch_array($pesan)){
		$content='
			<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Konfirmasi Kesesuaian Draft Bill of Lading</h1>
                        <ol class="breadcrumb">
                            <li class="active">
                        </ol>
                    </div>
                </div>
                <div class="row">
                    
					<div class="tab-content">

													<div class="form-group">
														<label class="col-sm-4 control-label">Name Shipper :</label>
														<div class="col-sm-8">
															<label> '.$p['name_shipper'].' </label>
														</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Email Shipper : </label>
														<div class="col-sm-8">
															<label> '.$p['email_shipper'].' </label>
														</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Nomor B/L :  </label>
														<div class="col-sm-8">
															<label> '.$p['no_bl'].' </label>
														</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Status Draft B/L : </label>
														<div class="col-sm-8">
															<label> '.$p['status'].' </label>
														</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Keterangan :  </label>
														<div class="col-sm-8">
															<label> '.$p['keterangan'].' </label>
														</div>
													</div>
													&nbsp;
													&nbsp;
													&nbsp;
													<center>
													<div class="form-group">
													  <a href="dokumen.php"><input type="submit" name="buat_draft" class="btn btn-default" value="Back to home"></a>
													</div>
												 </center>


					</div><!--/tab content-->
					
					
                </div>
                <!-- /.row -->

				<!-- jQuery -->
				<script src="../js/jquery.js"></script>

				<!-- Bootstrap Core JavaScript -->
				<script src="../js/bootstrap.min.js"></script>

				<!-- Morris Charts JavaScript -->
				<script src="../js/plugins/morris/raphael.min.js"></script>
				<script src="../js/plugins/morris/morris.min.js"></script>
				<script src="../js/plugins/morris/morris-data.js"></script>
		';
}
//set sudah dibaca = Y kalau sudah dibaca
$update = mysql_query("UPDATE bl SET status_bl='Menunggu Pembayaran'
WHERE no_bl='$no'");

printPage($title,$content);


?>

